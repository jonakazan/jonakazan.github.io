/* AÑOS LUZ INFORMÁTICA */

document.addEventListener('DOMContentLoaded', () => {

    // --- 1. Set Current Year in Footer ---
    const currentYearSpan = document.getElementById('currentYear');
    if (currentYearSpan) {
        currentYearSpan.textContent = new Date().getFullYear();
    }

    // --- 2. Custom Cursor ---
    const cursorDot = document.querySelector('.cursor-dot');
    const cursorOutline = document.querySelector('.cursor-outline');
    const interactiveElements = document.querySelectorAll('a, button, .service-card, .tech-item');

    // Comprobar si es un dispositivo táctil para no ejecutar la lógica del cursor
    const isTouchDevice = 'ontouchstart' in window || navigator.maxTouchPoints > 0;

    if (!isTouchDevice && cursorDot && cursorOutline) {
        window.addEventListener('mousemove', (e) => {
            const posX = e.clientX;
            const posY = e.clientY;

            // Dot sigue exacto
            cursorDot.style.left = `${posX}px`;
            cursorDot.style.top = `${posY}px`;

            // Outline sigue con un poco de retraso (efecto smooth)
            cursorOutline.animate({
                left: `${posX}px`,
                top: `${posY}px`
            }, { duration: 500, fill: "forwards" });
        });

        // Hover effect en elementos interactivos
        interactiveElements.forEach(el => {
            el.addEventListener('mouseenter', () => {
                document.body.classList.add('cursor-hover');
            });
            el.addEventListener('mouseleave', () => {
                document.body.classList.remove('cursor-hover');
            });
        });
    }

    // --- 3. Scroll Progress Bar ---
    const scrollProgress = document.getElementById('scrollProgress');

    window.addEventListener('scroll', () => {
        const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
        const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrollPercentage = (scrollTop / scrollHeight) * 100;

        if (scrollProgress) {
            scrollProgress.style.width = `${scrollPercentage}%`;
        }
    });

    // --- 4. Sticky Header & Back to Top Button ---
    const header = document.querySelector('.header');
    const backToTopBtn = document.getElementById('backToTop');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }

        if (window.scrollY > 500) {
            backToTopBtn.classList.add('visible');
        } else {
            backToTopBtn.classList.remove('visible');
        }
    });

    // Funcionalidad Back to Top
    backToTopBtn.addEventListener('click', (e) => {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    // --- 5. Mobile Menu Toggle ---
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const navList = document.querySelector('.nav-list');
    const navLinks = document.querySelectorAll('.nav-link');

    mobileMenuBtn.addEventListener('click', () => {
        navList.classList.toggle('active');
        const icon = mobileMenuBtn.querySelector('i');
        if (navList.classList.contains('active')) {
            icon.classList.remove('fa-bars');
            icon.classList.add('fa-xmark');
        } else {
            icon.classList.remove('fa-xmark');
            icon.classList.add('fa-bars');
        }
    });

    // Cerrar menú al hacer clic en un enlace
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (window.innerWidth <= 768) {
                navList.classList.remove('active');
                const icon = mobileMenuBtn.querySelector('i');
                icon.classList.remove('fa-xmark');
                icon.classList.add('fa-bars');
            }
        });
    });

    // --- 6. Scroll Reveal Animation (Intersection Observer) ---
    const revealElements = document.querySelectorAll('.reveal');

    const revealObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                // Dejar de observar una vez que se muestra para que no se anime de nuevo al subir
                observer.unobserve(entry.target);
            }
        });
    }, {
        root: null,
        threshold: 0.15, // Se activa cuando el 15% del elemento es visible
        rootMargin: "0px 0px -50px 0px"
    });

    revealElements.forEach(el => {
        revealObserver.observe(el);
    });

    // --- 7. Animated Counters (Intersection Observer) ---
    const statCards = document.querySelectorAll('.stat-card.reveal');
    let countersStarted = false;

    const startCounters = () => {
        const counters = document.querySelectorAll('.stat-number');
        const speed = 200; // Cuanto menor, más rápido

        counters.forEach(counter => {
            const target = +counter.getAttribute('data-target');
            const increment = target / speed;

            const updateCount = () => {
                const count = +counter.innerText;

                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(updateCount, 15);
                } else {
                    counter.innerText = target;
                }
            };

            updateCount();
        });
    };

    const statsObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !countersStarted) {
                startCounters();
                countersStarted = true;
            }
        });
    }, { threshold: 0.5 });

    if (statCards.length > 0) {
        // Observamos la primera tarjeta de estadísticas para lanzar el contador
        statsObserver.observe(statCards[0]);
    }

    // --- 8. Form Submissions (AJAX para evitar redirección a Formspree) ---
    const handleFormSubmit = (formId) => {
        const form = document.getElementById(formId) || document.querySelector(`#${formId} form`) || document.querySelector(`form[action*="formspree"]`);
        if (!form && formId === 'contactForm') return; // Si no existe, salir

        // Buscar ambos formularios
        const contactForm = document.getElementById('contactForm');
        const reviewForm = document.querySelector('#reviewModal form');

        const setupForm = (f) => {
            if (!f) return;
            f.addEventListener('submit', async (e) => {
                e.preventDefault();

                const btn = f.querySelector('button[type="submit"]');
                const originalText = btn.innerHTML;
                btn.innerHTML = 'Enviando... <i class="fa-solid fa-spinner fa-spin"></i>';
                btn.disabled = true;

                const formData = new FormData(f);

                // Si es el formulario de contacto, incluir el asunto dentro del mensaje
                if (f.id === 'contactForm') {
                    const subject = formData.get('subject');
                    const message = formData.get('message');
                    if (subject && message) {
                        formData.set('message', `[ASUNTO: ${subject}]\n\n${message}`);
                    }
                }

                try {
                    const response = await fetch(f.action, {
                        method: f.method,
                        body: formData,
                        headers: {
                            'Accept': 'application/json'
                        }
                    });

                    if (response.ok) {
                        btn.innerHTML = 'Enviado con éxito <i class="fa-solid fa-check"></i>';
                        btn.classList.replace('btn-primary', 'btn-secondary');
                        f.reset();

                        // Si es el modal, cerrarlo después de un momento
                        if (f.closest('.modal')) {
                            setTimeout(() => {
                                f.closest('.modal').classList.remove('active');
                                document.body.style.overflow = 'auto';
                            }, 2000);
                        }

                        setTimeout(() => {
                            btn.innerHTML = originalText;
                            btn.classList.replace('btn-secondary', 'btn-primary');
                            btn.disabled = false;
                        }, 3000);
                    } else {
                        throw new Error('Error al enviar');
                    }
                } catch (error) {
                    btn.innerHTML = 'Error al enviar <i class="fa-solid fa-xmark"></i>';
                    setTimeout(() => {
                        btn.innerHTML = originalText;
                        btn.disabled = false;
                    }, 3000);
                }
            });
        };

        if (contactForm) setupForm(contactForm);
        if (reviewForm) setupForm(reviewForm);
    };

    handleFormSubmit();

    // --- 9. Modal Reseñas ---
    const reviewModal = document.getElementById('reviewModal');
    const btnOpenReview = document.getElementById('btnOpenReview');
    const closeBtn = document.querySelector('.close-modal');

    if (btnOpenReview && reviewModal) {
        btnOpenReview.addEventListener('click', () => {
            reviewModal.classList.add('active');
            document.body.style.overflow = 'hidden'; // Evitar scroll
        });

        closeBtn.addEventListener('click', () => {
            reviewModal.classList.remove('active');
            document.body.style.overflow = 'auto';
        });

        // Cerrar haciendo clic fuera
        window.addEventListener('click', (e) => {
            if (e.target === reviewModal) {
                reviewModal.classList.remove('active');
                document.body.style.overflow = 'auto';
            }
        });
    }
});
