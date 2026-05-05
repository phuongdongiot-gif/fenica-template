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
                // Determine header offset (account for mobile top sticky nav)
                const headerOffset = 130;
                
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

    // --- Custom Pan/Zoom Modal Logic ---
    let currentScale = 1;
    let minScale = 0.2;
    let maxScale = 5;
    let translateX = 0;
    let translateY = 0;
    let isDragging = false;
    let startX, startY;
    let initialDistance = null;
    let initialScale = 1;

    const panZoomModal = document.getElementById('pan-zoom-modal');
    const panZoomImg = document.getElementById('pan-zoom-image');
    const panZoomContainer = document.getElementById('pan-zoom-container');
    const zoomLevelText = document.getElementById('zoom-level');
    const panZoomTitle = document.getElementById('pan-zoom-title');

    window.openPanZoomModal = function(src, title) {
        if (!panZoomModal || !panZoomImg) return;
        panZoomImg.src = src;
        if (title && panZoomTitle) panZoomTitle.innerText = title;
        
        panZoomModal.classList.remove('hidden');
        // Trigger reflow
        void panZoomModal.offsetWidth;
        panZoomModal.classList.remove('opacity-0');
        document.body.style.overflow = 'hidden';
        
        // Setup initial dimensions properly based on screen ratio
        window.resetZoom();
    }

    window.closePanZoomModal = function() {
        if (!panZoomModal) return;
        panZoomModal.classList.add('opacity-0');
        setTimeout(() => {
            panZoomModal.classList.add('hidden');
            document.body.style.overflow = '';
            panZoomImg.src = '';
        }, 300);
    }

    window.updateTransform = function() {
        if (!panZoomImg) return;
        panZoomImg.style.transform = `translate(${translateX}px, ${translateY}px) scale(${currentScale})`;
        if (zoomLevelText) zoomLevelText.innerText = Math.round(currentScale * 100) + '%';
    }

    window.zoomIn = function() {
        currentScale = Math.min(maxScale, currentScale + 0.25);
        updateTransform();
    }

    window.zoomOut = function() {
        currentScale = Math.max(minScale, currentScale - 0.25);
        updateTransform();
    }

    window.resetZoom = function() {
        // Adjust default scale for mobile so it fits the width perfectly
        if (window.innerWidth < 768) {
            currentScale = 1; // Start perfectly fitted on mobile
        } else {
            currentScale = 1;
        }
        translateX = 0;
        translateY = 0;
        updateTransform();
    }

    // Mouse events for pan and zoom
    if (panZoomContainer) {
        panZoomContainer.addEventListener('wheel', (e) => {
            e.preventDefault();
            const zoomDelta = e.deltaY > 0 ? -0.1 : 0.1;
            currentScale = Math.min(Math.max(minScale, currentScale + zoomDelta), maxScale);
            updateTransform();
        }, { passive: false });

        panZoomContainer.addEventListener('mousedown', (e) => {
            isDragging = true;
            startX = e.clientX - translateX;
            startY = e.clientY - translateY;
            panZoomContainer.style.cursor = 'grabbing';
        });

        window.addEventListener('mousemove', (e) => {
            if (!isDragging) return;
            translateX = e.clientX - startX;
            translateY = e.clientY - startY;
            updateTransform();
        });

        window.addEventListener('mouseup', () => {
            if (isDragging && panZoomContainer) {
                isDragging = false;
                panZoomContainer.style.cursor = 'grab';
            }
        });

        // Touch events for pinch to zoom and pan
        panZoomContainer.addEventListener('touchstart', (e) => {
            if (e.touches.length === 1) {
                isDragging = true;
                startX = e.touches[0].clientX - translateX;
                startY = e.touches[0].clientY - translateY;
            } else if (e.touches.length === 2) {
                isDragging = false;
                initialDistance = Math.hypot(
                    e.touches[0].clientX - e.touches[1].clientX,
                    e.touches[0].clientY - e.touches[1].clientY
                );
                initialScale = currentScale;
            }
        }, { passive: false });

        panZoomContainer.addEventListener('touchmove', (e) => {
            e.preventDefault(); // Prevent scrolling
            if (isDragging && e.touches.length === 1) {
                translateX = e.touches[0].clientX - startX;
                translateY = e.touches[0].clientY - startY;
                updateTransform();
            } else if (e.touches.length === 2 && initialDistance) {
                const currentDistance = Math.hypot(
                    e.touches[0].clientX - e.touches[1].clientX,
                    e.touches[0].clientY - e.touches[1].clientY
                );
                const scaleChange = currentDistance / initialDistance;
                currentScale = Math.min(Math.max(minScale, initialScale * scaleChange), maxScale);
                updateTransform();
            }
        }, { passive: false });

        panZoomContainer.addEventListener('touchend', (e) => {
            if (e.touches.length < 2) {
                initialDistance = null;
            }
            if (e.touches.length === 0) {
                isDragging = false;
            } else if (e.touches.length === 1) {
                // Restore dragging state for remaining finger
                isDragging = true;
                startX = e.touches[0].clientX - translateX;
                startY = e.touches[0].clientY - translateY;
            }
        });
    }
});
