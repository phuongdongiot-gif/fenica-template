// 1. WAVE DÀNH CHO BACKGROUND (Chạy liên tục, chậm, mờ, nằm sát dưới)
function initBackgroundWave() {
    const container = document.getElementById('bg-canvas');
    if (!container) return;

    const scene = new THREE.Scene();
    scene.position.y = -80; // Hạ khối sóng xuống dưới

    const camera = new THREE.PerspectiveCamera(60, window.innerWidth / window.innerHeight, 1, 3000);
    camera.position.set(0, 200, 500); // Zoom gần hơn
    camera.lookAt(0, 0, 0);

    const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
    renderer.setSize(window.innerWidth, window.innerHeight);
    renderer.setPixelRatio(window.devicePixelRatio);
    container.appendChild(renderer.domElement);

    const lineCount = 40;        // Giảm một nửa (từ 80 -> 40) để tối ưu CPU
    const pointsCount = 100;     // Giảm một nửa (từ 200 -> 100) để tối ưu CPU
    const separation = 24;       // Tăng gấp đôi khoảng cách để giữ nguyên diện tích bao phủ
    const lines = [];

    const lineMaterial = new THREE.LineBasicMaterial({
        color: 0x4aa3df,
        transparent: true,
        opacity: 0.1, // Mờ
        blending: THREE.AdditiveBlending
    });

    const pointsMaterial = new THREE.PointsMaterial({
        color: 0xffffff,
        size: 1.5,
        transparent: true,
        opacity: 0.25, // Mờ
        blending: THREE.AdditiveBlending
    });

    for (let i = 0; i < lineCount; i++) {
        const geometry = new THREE.BufferGeometry();
        const positions = new Float32Array(pointsCount * 3);
        for (let j = 0; j < pointsCount; j++) {
            positions[j * 3] = (j - pointsCount / 2) * separation;
            positions[j * 3 + 1] = 0;
            positions[j * 3 + 2] = (i - lineCount / 2) * separation;
        }
        geometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));

        const line = new THREE.Line(geometry, lineMaterial);
        scene.add(line);
        lines.push(line);

        if (i % 2 === 0) {
            const points = new THREE.Points(geometry, pointsMaterial);
            scene.add(points);
        }
    }

    const clock = new THREE.Clock();
    function animate() {
        requestAnimationFrame(animate);
        const time = clock.getElapsedTime() * 0.25; // Chậm

        for (let i = 0; i < lineCount; i++) {
            const positions = lines[i].geometry.attributes.position.array;
            const z = (i - lineCount / 2) * separation;
            for (let j = 0; j < pointsCount; j++) {
                const x = (j - pointsCount / 2) * separation;
                const index = j * 3;
                
                // Mượt mà, biên độ thấp
                const wave1 = Math.sin(x * 0.005 + time) * 60;
                const wave2 = Math.sin(z * 0.008 + time * 0.8) * 45;
                const wave3 = Math.cos((x * 0.01) + (z * 0.01) - time) * 25;
                positions[index + 1] = wave1 + wave2 + wave3;
            }
            lines[i].geometry.attributes.position.needsUpdate = true;
        }
        
        // Không xoay
        renderer.render(scene, camera);
    }
    animate();

    window.addEventListener('resize', () => {
        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(window.innerWidth, window.innerHeight);
    });
}


// 2. WAVE DÀNH CHO PRELOADER (Tắt sau 1.5s, nhanh, sáng, xoay)
function initPreloaderWave() {
    const container = document.getElementById('preloader-canvas');
    if (!container) return;

    const scene = new THREE.Scene();

    const camera = new THREE.PerspectiveCamera(60, window.innerWidth / window.innerHeight, 1, 3000);
    camera.position.set(0, 350, 800); // Xa hơn, ở giữa
    camera.lookAt(0, 0, 0);

    const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
    renderer.setSize(window.innerWidth, window.innerHeight);
    renderer.setPixelRatio(window.devicePixelRatio);
    container.appendChild(renderer.domElement);

    const lineCount = 40;        // Giảm một nửa để tối ưu CPU
    const pointsCount = 100;     // Giảm một nửa để tối ưu CPU
    const separation = 24;       // Tăng gấp đôi khoảng cách
    const lines = [];

    const lineMaterial = new THREE.LineBasicMaterial({
        color: 0x4aa3df,
        transparent: true,
        opacity: 0.15, // Sáng hơn
        blending: THREE.AdditiveBlending
    });

    const pointsMaterial = new THREE.PointsMaterial({
        color: 0xffffff,
        size: 1.5,
        transparent: true,
        opacity: 0.4, // Sáng hơn
        blending: THREE.AdditiveBlending
    });

    for (let i = 0; i < lineCount; i++) {
        const geometry = new THREE.BufferGeometry();
        const positions = new Float32Array(pointsCount * 3);
        for (let j = 0; j < pointsCount; j++) {
            positions[j * 3] = (j - pointsCount / 2) * separation;
            positions[j * 3 + 1] = 0;
            positions[j * 3 + 2] = (i - lineCount / 2) * separation;
        }
        geometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));

        const line = new THREE.Line(geometry, lineMaterial);
        scene.add(line);
        lines.push(line);

        if (i % 2 === 0) {
            const points = new THREE.Points(geometry, pointsMaterial);
            scene.add(points);
        }
    }

    const clock = new THREE.Clock();
    let animationId;

    function animate() {
        animationId = requestAnimationFrame(animate);
        const time = clock.getElapsedTime() * 0.6; // Nhanh hơn

        for (let i = 0; i < lineCount; i++) {
            const positions = lines[i].geometry.attributes.position.array;
            const z = (i - lineCount / 2) * separation;
            for (let j = 0; j < pointsCount; j++) {
                const x = (j - pointsCount / 2) * separation;
                const index = j * 3;
                
                // Gồ ghề, biên độ cao
                const wave1 = Math.sin(x * 0.008 + time) * 80;
                const wave2 = Math.sin(z * 0.01 + time * 0.8) * 60;
                const wave3 = Math.cos((x * 0.02) + (z * 0.015) - time) * 35;
                positions[index + 1] = wave1 + wave2 + wave3;
            }
            lines[i].geometry.attributes.position.needsUpdate = true;
        }

        scene.rotation.y += 0.001; // Xoay
        renderer.render(scene, camera);
    }
    animate();

    // Resize event
    const onResize = () => {
        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(window.innerWidth, window.innerHeight);
    };
    window.addEventListener('resize', onResize);

    // Logic tắt Preloader
    setTimeout(() => {
        const preloaderEl = document.getElementById('preloader');
        if (preloaderEl) {
            preloaderEl.style.opacity = '0';
            preloaderEl.style.visibility = 'hidden';
        }

        setTimeout(() => {
            document.body.classList.remove('overflow-hidden');
            if (animationId) cancelAnimationFrame(animationId);
            renderer.dispose(); // Dọn dẹp WebGL để giải phóng bộ nhớ
            window.removeEventListener('resize', onResize);
        }, 800);
    }, 1500);
}

// Khởi chạy cả 2 hiệu ứng
initBackgroundWave();
initPreloaderWave();
