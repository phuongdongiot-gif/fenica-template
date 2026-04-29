// JS để điều khiển logic mở/đóng mobile menu
document.addEventListener('DOMContentLoaded', () => {
    const menuBtn = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIconPath = document.getElementById('menu-icon-path');

    const toggleProject = document.getElementById('toggle-project');
    const projectSubmenu = document.getElementById('project-submenu');
    const toggleProjectIcon = document.getElementById('toggle-project-icon');

    if (menuBtn && mobileMenu) {
        menuBtn.addEventListener('click', () => {
            const isHidden = mobileMenu.classList.contains('hidden');
            if (isHidden) {
                mobileMenu.classList.remove('hidden');
                setTimeout(() => mobileMenu.classList.remove('opacity-0'), 10);
                menuIconPath.setAttribute('d', 'M6 18L18 6M6 6l12 12'); // Change to X
            } else {
                mobileMenu.classList.add('opacity-0');
                setTimeout(() => mobileMenu.classList.add('hidden'), 300);
                menuIconPath.setAttribute('d', 'M4 6h16M4 12h16M4 18h16'); // Change to Hamburger
            }
        });
    }

    if (toggleProject && projectSubmenu) {
        toggleProject.addEventListener('click', () => {
            const isHidden = projectSubmenu.classList.contains('hidden');
            if (isHidden) {
                projectSubmenu.classList.remove('hidden');
                projectSubmenu.classList.add('flex');
                toggleProjectIcon.classList.add('rotate-180');
            } else {
                projectSubmenu.classList.add('hidden');
                projectSubmenu.classList.remove('flex');
                toggleProjectIcon.classList.remove('rotate-180');
            }
        });
    }

    // Logic Header thu nhỏ khi scroll
    const headerContainer = document.getElementById('headerContainer');
    const header = document.getElementById('header');
    const logos = document.querySelectorAll('.logo-img');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            // Thu nhỏ container padding
            if (headerContainer) {
                headerContainer.classList.remove('py-3', 'md:py-4');
                headerContainer.classList.add('py-1', 'md:py-2');
            }
            // Đổi màu nền Header đậm hơn
            if (header) {
                header.classList.remove('bg-[#0e1e2e]/80');
                header.classList.add('bg-[#0e1e2e]/95', 'shadow-lg');
            }
            // Thu nhỏ logo
            logos.forEach(logo => {
                logo.classList.remove('w-20', 'w-24', 'md:w-32');
                logo.classList.add('w-16', 'md:w-24');
            });
        } else {
            // Phục hồi container padding
            if (headerContainer) {
                headerContainer.classList.add('py-3', 'md:py-4');
                headerContainer.classList.remove('py-1', 'md:py-2');
            }
            // Phục hồi màu nền
            if (header) {
                header.classList.add('bg-[#0e1e2e]/80');
                header.classList.remove('bg-[#0e1e2e]/95', 'shadow-lg');
            }
            // Phục hồi logo
            logos.forEach((logo, index) => {
                logo.classList.remove('w-16', 'md:w-24');
                if (index === 1) { // Logo giữa
                    logo.classList.add('w-24', 'md:w-32');
                } else { // Logo trái, phải
                    logo.classList.add('w-20', 'md:w-32');
                }
            });
        }
    });
});
