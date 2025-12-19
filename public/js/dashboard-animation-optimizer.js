/**
 * Dashboard Animation Performance Optimizer
 * เพิ่มประสิทธิภาพของ Animation ในหน้า Dashboard
 */

(function() {
    'use strict';

    // ตรวจสอบว่า browser รองรับ requestAnimationFrame หรือไม่
    const requestAnimationFrame = window.requestAnimationFrame || 
                                  window.webkitRequestAnimationFrame || 
                                  window.mozRequestAnimationFrame || 
                                  function(callback) { setTimeout(callback, 16); };

    // ตัวแปรสำหรับเก็บสถานะ animation
    let isAnimating = false;
    let animationQueue = [];

    /**
     * Performance-optimized animation queue
     */
    function processAnimationQueue() {
        if (animationQueue.length === 0) {
            isAnimating = false;
            return;
        }

        const currentBatch = animationQueue.splice(0, 5); // Process 5 animations at once
        
        currentBatch.forEach(animation => {
            try {
                animation();
            } catch (error) {
                console.warn('Animation error:', error);
            }
        });

        if (animationQueue.length > 0) {
            requestAnimationFrame(processAnimationQueue);
        } else {
            isAnimating = false;
        }
    }

    /**
     * Add animation to queue
     */
    function queueAnimation(animationFn) {
        animationQueue.push(animationFn);
        
        if (!isAnimating) {
            isAnimating = true;
            requestAnimationFrame(processAnimationQueue);
        }
    }

    /**
     * Optimize video elements
     */
    function optimizeVideoElements() {
        const videos = document.querySelectorAll('video');
        videos.forEach(video => {
            // เพิ่ม GPU acceleration
            video.style.transform = 'translate3d(0, 0, 0)';
            video.style.willChange = 'opacity, transform';
            
            // เพิ่ม event listeners สำหรับ performance
            video.addEventListener('loadstart', function() {
                this.style.opacity = '0.5';
            });
            
            video.addEventListener('loadeddata', function() {
                queueAnimation(() => {
                    this.style.opacity = '1';
                });
            });
            
            video.addEventListener('error', function() {
                console.warn('Video loading error:', this.src);
                this.style.opacity = '0.7';
            });
        });
    }

    /**
     * Optimize table rows animation
     */
    function optimizeTableAnimations() {
        const tableRows = document.querySelectorAll('.table tbody tr');
        
        tableRows.forEach(row => {
            let isHovered = false;
            
            row.addEventListener('mouseenter', function() {
                if (!isHovered) {
                    isHovered = true;
                    queueAnimation(() => {
                        this.style.transform = 'translate3d(0, -1px, 0)';
                        this.style.backgroundColor = 'rgba(78, 205, 196, 0.05)';
                    });
                }
            });
            
            row.addEventListener('mouseleave', function() {
                if (isHovered) {
                    isHovered = false;
                    queueAnimation(() => {
                        this.style.transform = 'translate3d(0, 0, 0)';
                        this.style.backgroundColor = '';
                    });
                }
            });
        });
    }

    /**
     * Optimize card hover effects
     */
    function optimizeCardAnimations() {
        const cards = document.querySelectorAll('.card');
        
        cards.forEach(card => {
            let isHovered = false;
            
            card.addEventListener('mouseenter', function() {
                if (!isHovered) {
                    isHovered = true;
                    queueAnimation(() => {
                        this.style.transform = 'translate3d(0, -3px, 0)';
                    });
                }
            });
            
            card.addEventListener('mouseleave', function() {
                if (isHovered) {
                    isHovered = false;
                    queueAnimation(() => {
                        this.style.transform = 'translate3d(0, 0, 0)';
                    });
                }
            });
        });
    }

    /**
     * Optimize small-box animations
     */
    function optimizeSmallBoxAnimations() {
        const smallBoxes = document.querySelectorAll('.small-box');
        
        smallBoxes.forEach(box => {
            let isHovered = false;
            const icon = box.querySelector('.icon');
            
            box.addEventListener('mouseenter', function() {
                if (!isHovered) {
                    isHovered = true;
                    queueAnimation(() => {
                        this.style.transform = 'translate3d(0, -8px, 0) scale(1.01)';
                        if (icon) {
                            icon.style.transform = 'translate3d(0, -50%, 0) scale(1.15) rotate(8deg)';
                            icon.style.opacity = '0.4';
                        }
                    });
                }
            });
            
            box.addEventListener('mouseleave', function() {
                if (isHovered) {
                    isHovered = false;
                    queueAnimation(() => {
                        this.style.transform = 'translate3d(0, 0, 0)';
                        if (icon) {
                            icon.style.transform = 'translate3d(0, -50%, 0)';
                            icon.style.opacity = '0.3';
                        }
                    });
                }
            });
        });
    }

    /**
     * Optimize upload zone drag and drop
     */
    function optimizeUploadZone() {
        const uploadZones = document.querySelectorAll('.upload-zone');
        
        uploadZones.forEach(zone => {
            let isDragging = false;
            let isHovered = false;
            
            // Hover effects
            zone.addEventListener('mouseenter', function() {
                if (!isHovered && !isDragging) {
                    isHovered = true;
                    queueAnimation(() => {
                        this.style.transform = 'translate3d(0, -2px, 0)';
                        this.style.borderColor = 'var(--teal-primary)';
                    });
                }
            });
            
            zone.addEventListener('mouseleave', function() {
                if (isHovered && !isDragging) {
                    isHovered = false;
                    queueAnimation(() => {
                        this.style.transform = 'translate3d(0, 0, 0)';
                        this.style.borderColor = '';
                    });
                }
            });
            
            // Drag effects
            zone.addEventListener('dragenter', function() {
                if (!isDragging) {
                    isDragging = true;
                    queueAnimation(() => {
                        this.style.transform = 'translate3d(0, 0, 0) scale(1.02)';
                        this.classList.add('dragging');
                    });
                }
            });
            
            zone.addEventListener('dragleave', function() {
                if (isDragging) {
                    isDragging = false;
                    queueAnimation(() => {
                        this.style.transform = 'translate3d(0, 0, 0)';
                        this.classList.remove('dragging');
                    });
                }
            });
            
            zone.addEventListener('drop', function() {
                isDragging = false;
                queueAnimation(() => {
                    this.style.transform = 'translate3d(0, 0, 0)';
                    this.classList.remove('dragging');
                });
            });
        });
    }

    /**
     * Optimize modal animations
     */
    function optimizeModalAnimations() {
        const modals = document.querySelectorAll('.offcanvas');
        
        modals.forEach(modal => {
            const observer = new MutationObserver(function(mutations) {
                mutations.forEach(function(mutation) {
                    if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
                        const isShow = modal.classList.contains('show');
                        
                        if (isShow) {
                            queueAnimation(() => {
                                modal.style.transform = 'translate3d(-50%, -50%, 0) scale(1)';
                                modal.style.opacity = '1';
                                modal.style.visibility = 'visible';
                            });
                        } else {
                            queueAnimation(() => {
                                modal.style.transform = 'translate3d(-50%, -50%, 0) scale(0.7)';
                                modal.style.opacity = '0';
                                setTimeout(() => {
                                    modal.style.visibility = 'hidden';
                                }, 300);
                            });
                        }
                    }
                });
            });
            
            observer.observe(modal, { attributes: true });
        });
    }

    /**
     * Reduce motion สำหรับ users ที่เปิด reduce motion
     */
    function handleReducedMotion() {
        const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
        
        if (prefersReducedMotion.matches) {
            // ปิด animations สำหรับผู้ใช้ที่เปิด reduce motion
            document.documentElement.style.setProperty('--animation-duration', '0.01ms');
            document.documentElement.style.setProperty('--transition-duration', '0.01ms');
            
            // ลบ animation classes
            const animatedElements = document.querySelectorAll('[class*="animate"], [class*="fade"], [class*="slide"]');
            animatedElements.forEach(element => {
                element.style.animation = 'none';
                element.style.transition = 'none';
            });
        }
        
        // Listen for changes
        prefersReducedMotion.addEventListener('change', function() {
            location.reload(); // Reload เพื่อใช้งาน setting ใหม่
        });
    }

    /**
     * Performance monitor
     */
    function monitorPerformance() {
        let frameCount = 0;
        let lastTime = performance.now();
        
        function measureFPS() {
            frameCount++;
            const currentTime = performance.now();
            
            if (currentTime >= lastTime + 1000) {
                const fps = Math.round((frameCount * 1000) / (currentTime - lastTime));
                
                // ถ้า FPS ต่ำเกินไป ให้ลด animation
                if (fps < 30) {
                    console.warn('Low FPS detected:', fps, 'Reducing animations...');
                    document.documentElement.classList.add('low-performance');
                }
                
                frameCount = 0;
                lastTime = currentTime;
            }
            
            requestAnimationFrame(measureFPS);
        }
        
        // เริ่ม monitor หลังจาก page load เสร็จ
        window.addEventListener('load', () => {
            setTimeout(measureFPS, 2000);
        });
    }

    /**
     * Initialize all optimizations
     */
    function init() {
        // รอให้ DOM ready
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', init);
            return;
        }

        try {
            // Apply optimizations
            optimizeVideoElements();
            optimizeTableAnimations();
            optimizeCardAnimations();
            optimizeSmallBoxAnimations();
            optimizeUploadZone();
            optimizeModalAnimations();
            handleReducedMotion();
            monitorPerformance();
            
            console.log('Dashboard animation optimizations loaded successfully');
        } catch (error) {
            console.error('Error initializing dashboard optimizations:', error);
        }
    }

    // Auto-initialize
    init();

    // Export สำหรับใช้งานภายนอก
    window.DashboardAnimationOptimizer = {
        queueAnimation: queueAnimation,
        init: init
    };

})();