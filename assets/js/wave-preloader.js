// 1. Khởi tạo Scene
const container = document.getElementById('canvas-container');
if (container) {
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
        }, 800);
    }, 1500);
}
