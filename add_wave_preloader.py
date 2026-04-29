import os
import glob
import re

css_code = """    <style>
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background-color: #09121d;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 1.5s ease-out, visibility 1.5s ease-out;
        }

        #canvas-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>"""

html_code = """
    <!-- Chỉ có Canvas 3D, loại bỏ hoàn toàn chữ và phần trăm -->
    <div id="preloader">
        <div id="canvas-container"></div>
    </div>
"""

js_code = """    <!-- Gọi thư viện Three.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>

    <script>
        // 1. Khởi tạo Scene
        const container = document.getElementById('canvas-container');
        const scene = new THREE.Scene();
        
        // 2. Camera - Đặt góc nhìn chéo từ trên xuống để thấy rõ sự nhấp nhô
        const camera = new THREE.PerspectiveCamera(60, window.innerWidth / window.innerHeight, 1, 3000);
        camera.position.set(0, 350, 800);
        camera.lookAt(0, 0, 0);

        // 3. Renderer
        const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
        renderer.setSize(window.innerWidth, window.innerHeight);
        renderer.setPixelRatio(window.devicePixelRatio);
        container.appendChild(renderer.domElement);

        // 4. Cấu hình Lưới Sóng (Wave Grid)
        const lineCount = 80;        // Số lượng dải sóng (trục Z)
        const pointsCount = 200;     // Độ mịn của mỗi dải sóng (trục X)
        const separation = 12;       // Khoảng cách giữa các điểm
        
        const lines = []; // Mảng chứa các đường (Lines)
        
        // Vật liệu cho các đường vân (mờ mờ ảo ảo)
        const lineMaterial = new THREE.LineBasicMaterial({
            color: 0x4aa3df, // Màu xanh cyan/bạc giống ảnh
            transparent: true,
            opacity: 0.15,
            blending: THREE.AdditiveBlending // Chế độ hòa trộn tạo độ sáng chói khi đè lên nhau
        });

        // Vật liệu cho các điểm hạt (bụi sáng li ti bám theo đường vân)
        const pointsMaterial = new THREE.PointsMaterial({
            color: 0xffffff,
            size: 1.5,
            transparent: true,
            opacity: 0.4,
            blending: THREE.AdditiveBlending
        });

        // Khởi tạo các đường và điểm
        for (let i = 0; i < lineCount; i++) {
            const geometry = new THREE.BufferGeometry();
            const positions = new Float32Array(pointsCount * 3);

            // Gán tọa độ mặc định ban đầu
            for (let j = 0; j < pointsCount; j++) {
                const x = (j - pointsCount / 2) * separation;
                const z = (i - lineCount / 2) * separation;
                
                positions[j * 3] = x;
                positions[j * 3 + 1] = 0; // Trục Y sẽ được tính toán lại trong hàm animate
                positions[j * 3 + 2] = z;
            }

            geometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));

            // Thêm đường vân (Line)
            const line = new THREE.Line(geometry, lineMaterial);
            scene.add(line);
            lines.push(line);

            // Thêm các hạt sáng (Points) dùng chung hình học với line
            // Để tối ưu, ta không cần hạt ở mọi dòng, có thể xen kẽ
            if (i % 2 === 0) {
                const points = new THREE.Points(geometry, pointsMaterial);
                scene.add(points);
            }
        }

        // 5. Vòng lặp Animation - Tạo độ nhấp nhô phức tạp
        const clock = new THREE.Clock();
        let animationId;

        function animate() {
            animationId = requestAnimationFrame(animate);
            
            // Lấy thời gian để làm biến chạy cho phương trình sóng
            const time = clock.getElapsedTime() * 0.6; 

            for (let i = 0; i < lineCount; i++) {
                const positions = lines[i].geometry.attributes.position.array;
                const z = (i - lineCount / 2) * separation;

                for (let j = 0; j < pointsCount; j++) {
                    const x = (j - pointsCount / 2) * separation;
                    const index = j * 3;

                    // Phương trình sóng kết hợp nhiều hàm Sin/Cos để tạo ra 
                    // sự nhấp nhô gồ ghề, có đỉnh cao, có rãnh sâu như trong ảnh
                    const wave1 = Math.sin(x * 0.008 + time) * 80;
                    const wave2 = Math.sin(z * 0.01 + time * 0.8) * 60;
                    const wave3 = Math.cos((x * 0.02) + (z * 0.015) - time) * 35;
                    
                    const y = wave1 + wave2 + wave3;

                    positions[index + 1] = y; // Cập nhật trục Y
                }
                
                // Cập nhật lại khung hình
                lines[i].geometry.attributes.position.needsUpdate = true;
            }

            // Xoay nhẹ toàn bộ trục để có góc nhìn động
            scene.rotation.y += 0.001;

            renderer.render(scene, camera);
        }
        
        animate();

        // 6. Responsive khi đổi kích thước màn hình
        window.addEventListener('resize', () => {
            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(window.innerWidth, window.innerHeight);
        });

        // 7. Logic ẩn Preloader mượt mà
        setTimeout(() => {
            const preloaderEl = document.getElementById('preloader');

            if (preloaderEl) {
                preloaderEl.style.opacity = '0';
                preloaderEl.style.visibility = 'hidden';
            }

            setTimeout(() => {
                document.body.classList.remove('overflow-hidden');
                if (animationId) cancelAnimationFrame(animationId);
            }, 1500); 
        }, 4000); 

    </script>
</body>"""

def process_file(filepath):
    filename = os.path.basename(filepath)
    if filename in ["index.html", "overview.html"]:
        print(f"Skipping {filename}")
        return

    with open(filepath, 'r', encoding='utf-8') as f:
        content = f.read()

    if 'id="preloader"' in content or 'id="canvas-container"' in content:
        print(f"Preloader already exists in {filename}, skipping")
        return

    # 1. Replace </head>
    content = content.replace("</head>", css_code)

    # 2. Add overflow-hidden to body and append the HTML
    # We look for <body class="xyz">
    def body_replace(match):
        body_tag = match.group(0)
        # If class attribute exists
        if 'class="' in body_tag:
            body_tag = body_tag.replace('class="', 'class="overflow-hidden ')
        else:
            body_tag = body_tag.replace('<body', '<body class="overflow-hidden"')
        
        return body_tag + html_code

    content = re.sub(r'<body[^>]*>', body_replace, content, count=1)

    # 3. Replace </body> with JS and </body>
    content = content.replace("</body>", js_code)

    with open(filepath, 'w', encoding='utf-8') as f:
        f.write(content)
        
    print(f"Successfully processed {filename}")

def main():
    files = glob.glob("*.html")
    for f in files:
        process_file(f)

if __name__ == "__main__":
    main()
