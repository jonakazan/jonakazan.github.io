// ============================================================
// main.js — Scripts globales del curso
// ============================================================

document.addEventListener('DOMContentLoaded', function () {

    // ── Auto-ocultar alertas después de 5 segundos ─────────
    const alertas = document.querySelectorAll('.alert-cyber');
    alertas.forEach(alerta => {
        setTimeout(() => {
            alerta.style.transition = 'opacity .5s';
            alerta.style.opacity = '0';
            setTimeout(() => alerta.remove(), 500);
        }, 6000);
    });

    // ── Animación de aparición de elementos ─────────────────
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.anim-delay-1, .anim-delay-2, .anim-delay-3').forEach(el => {
        el.style.transition = 'opacity .5s ease, transform .5s ease';
        el.style.transform  = 'translateY(16px)';
        observer.observe(el);
    });

    // ── Efecto hover en cards del quiz ──────────────────────
    document.querySelectorAll('.option-label:not([class*="correcta"]):not([class*="incorrecta"])').forEach(label => {
        label.addEventListener('change', function () {
            // Desactivar selección visual de otras opciones del mismo grupo
            const name = label.querySelector('input')?.name;
            if (name) {
                document.querySelectorAll(`input[name="${name}"]`).forEach(inp => {
                    inp.closest('.option-label')?.style?.setProperty('background', '');
                });
                if (label.querySelector('input')?.checked) {
                    label.style.background = 'rgba(0,212,255,0.1)';
                    label.style.borderColor = 'rgba(0,212,255,0.4)';
                }
            }
        });
    });

    // ── Confirmación al salir de un quiz sin enviar ─────────
    const quizForm = document.getElementById('quiz-form');
    if (quizForm && !document.querySelector('input[type="radio"][disabled]')) {
        let quizModificado = false;
        quizForm.querySelectorAll('input[type="radio"]').forEach(inp => {
            inp.addEventListener('change', () => quizModificado = true);
        });
        window.addEventListener('beforeunload', function (e) {
            if (quizModificado && !quizForm.dataset.enviado) {
                e.preventDefault();
                e.returnValue = '';
            }
        });
        quizForm.addEventListener('submit', function () {
            quizForm.dataset.enviado = 'true';
        });
    }

    // ── Smooth scroll para anchors internos ─────────────────
    document.querySelectorAll('a[href^="#"]').forEach(link => {
        link.addEventListener('click', function (e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });

});
