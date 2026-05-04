/**
 * Fenica - Plans Section Interactivity
 * Handles scroll spy, active indicator, and smooth scrolling for floor plans
 */

document.addEventListener('DOMContentLoaded', () => {
    const links = document.querySelectorAll('.floor-nav-link');
    const sections = document.querySelectorAll('.floor-section');
    const indicator = document.getElementById('active-indicator');

    // Function to update the active indicator line and text color
    function updateIndicator(activeLink) {
        if (!activeLink) return;
        
        // Calculate offset relative to the parent container
        const linkTop = activeLink.offsetTop;
        const linkHeight = activeLink.offsetHeight;
        
        // Move indicator
        if (indicator) {
            indicator.style.transform = `translateY(${linkTop}px)`;
            indicator.style.height = `${linkHeight}px`;
        }
        
        // Update active classes for text
        links.forEach(l => {
            l.classList.remove('text-[#d4ae6f]', 'bg-[#d4ae6f]/10');
            l.classList.add('text-white/60');
        });
        activeLink.classList.remove('text-white/60');
        activeLink.classList.add('text-[#d4ae6f]', 'bg-[#d4ae6f]/10');
    }

    // Setup Intersection Observer for Scroll Spy
    // Detects when a floor section is in the middle of the screen
    const observerOptions = {
        root: null,
        rootMargin: '-30% 0px -40% 0px',
        threshold: 0
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const id = entry.target.getAttribute('id');
                const activeLink = document.querySelector(`.floor-nav-link[href="#${id}"]`);
                updateIndicator(activeLink);
            }
        });
    }, observerOptions);

    // Start observing sections
    sections.forEach(sec => observer.observe(sec));

    // Smooth scroll on click
    links.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const targetId = link.getAttribute('href');
            const targetSection = document.querySelector(targetId);
            
            if (targetSection) {
                // Determine header offset (if fixed header exists)
                const headerOffset = 100;
                
                // If Lenis (smooth scroll library) is used on window, use it
                if (window.lenis) {
                    window.lenis.scrollTo(targetSection, { offset: -headerOffset, duration: 1.5 });
                } else {
                    // Fallback to native smooth scroll
                    const top = targetSection.getBoundingClientRect().top + window.scrollY - headerOffset;
                    window.scrollTo({ top, behavior: 'smooth' });
                }
            }
        });
    });

    // Initialize indicator position on load
    setTimeout(() => {
        if (links.length > 0) {
            // Find which one is currently in view or default to first
            let current = links[0];
            sections.forEach(sec => {
                const rect = sec.getBoundingClientRect();
                if(rect.top <= window.innerHeight/2 && rect.bottom >= window.innerHeight/2) {
                    const id = sec.getAttribute('id');
                    const link = document.querySelector(`.floor-nav-link[href="#${id}"]`);
                    if(link) current = link;
                }
            });
            updateIndicator(current);
        }
    }, 100);
});
