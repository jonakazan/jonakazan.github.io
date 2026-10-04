<?php
$pageTitle    = '1.5 Gestión de Riesgos y Delincuentes';
$activeModule = 'modulo1';
$activePage   = 'riesgos';
require_once __DIR__ . '/../../includes/header.php';
?>

<main class="main-content">
<div class="fade-in-up" style="max-width:860px;">

    <div class="module-badge"><i class="bi bi-shield-check"></i> Módulo 1</div>
    <h1>1.5 ¿A quiénes nos enfrentamos? Gestión de Riesgos</h1>
    <p class="lead" style="color:var(--primary);font-weight:500;font-size:1.1rem;">
        Para protegernos bien, conviene saber a quién nos enfrentamos y cómo piensan.
    </p>

    <div class="content-block">
        <h2 class="mb-3">¿Cómo actúan los delincuentes informáticos?</h2>
        <p>
            Una de sus armas favoritas es el <strong>engaño</strong>. En lugar de forzar las puertas tecnológicas
            (lo cual es muy difícil), prefieren <strong style="color:var(--danger);">engañarnos a nosotros</strong>
            para que seamos nosotros mismos quienes les abramos la puerta.
        </p>

        <div class="highlight-box" style="border-color:rgba(255,71,87,0.3);background:rgba(255,71,87,0.05);">
            <div class="d-flex align-items-start gap-3">
                <span style="font-size:1.8rem;">⚠️</span>
                <div>
                    <h3 style="font-size:1rem;color:var(--danger);margin-bottom:.4rem;">El truco favorito: provocar emociones</h3>
                    <p style="margin:0;color:var(--text-secondary);">
                        Casi todos sus ataques se basan en el mismo truco: provocar
                        <strong style="color:var(--text-primary);">prisa, curiosidad o miedo</strong>
                        para que actuemos sin pensar. Si aprendemos a ir con calma, a desconfiar de lo inesperado
                        y a aplicar un par de clics de sentido común, les cerramos la puerta en la cara.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- 4 conceptos de gestión de riesgos -->
    <div class="content-block">
        <h2 class="mb-4">Cuatro conceptos clave de la Gestión de Riesgos</h2>

        <div class="row g-3">

            <div class="col-md-6">
                <div class="card-cyber p-3 h-100" style="border-color:rgba(255,71,87,0.3);">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <span style="font-size:1.5rem;">⚡</span>
                        <h3 style="font-size:1rem;color:var(--danger);margin:0;">Amenaza</h3>
                    </div>
                    <p style="font-size:.88rem;color:var(--text-secondary);margin:0;">
                        Cualquier factor, evento o persona que puede causar daño a nuestros activos.
                        Un ciberdelincuente, un fallo eléctrico o una tormenta son amenazas.
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card-cyber p-3 h-100" style="border-color:rgba(255,215,64,0.3);">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <span style="font-size:1.5rem;">🚪</span>
                        <h3 style="font-size:1rem;color:var(--warning);margin:0;">Vulnerabilidad</h3>
                    </div>
                    <p style="font-size:.88rem;color:var(--text-secondary);margin:0;">
                        Una debilidad o "puerta sin llave" en un sistema, programa o hábito que puede
                        ser aprovechada. Usar un sistema desactualizado o una clave fácil son vulnerabilidades.
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card-cyber p-3 h-100" style="border-color:rgba(123,47,255,0.3);">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <span style="font-size:1.5rem;">📊</span>
                        <h3 style="font-size:1rem;color:var(--secondary);margin:0;">Riesgo</h3>
                    </div>
                    <p style="font-size:.88rem;color:var(--text-secondary);margin:0;">
                        La probabilidad de que una amenaza aproveche una vulnerabilidad y genere un daño.
                    </p>
                    <div class="mt-2 p-2" style="background:rgba(123,47,255,0.1);border-radius:8px;font-size:.82rem;">
                        <code style="color:var(--secondary);">Riesgo = Probabilidad × Impacto</code>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card-cyber p-3 h-100" style="border-color:rgba(255,71,87,0.5);">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <span style="font-size:1.5rem;">🚨</span>
                        <h3 style="font-size:1rem;color:var(--danger);margin:0;">Incidente de Seguridad</h3>
                    </div>
                    <p style="font-size:.88rem;color:var(--text-secondary);margin:0;">
                        El evento real que efectivamente ocurre y compromete la información.
                        Un virus que bloquea la computadora o el robo confirmado de una cuenta.
                    </p>
                </div>
            </div>

        </div>
    </div>

    <!-- Relación entre conceptos -->
    <div class="content-block">
        <h3 class="mb-3" style="font-size:1.1rem;">¿Cómo se relacionan estos conceptos?</h3>

        <div style="display:flex;align-items:center;gap:8px;flex-wrap:wrap;justify-content:center;padding:1rem 0;">
            <div style="padding:10px 18px;background:rgba(255,71,87,.1);border:1px solid rgba(255,71,87,.3);border-radius:8px;font-size:.88rem;font-weight:600;color:var(--danger);">
                ⚡ Amenaza
            </div>
            <div style="color:var(--text-muted);font-size:1.2rem;">+</div>
            <div style="padding:10px 18px;background:rgba(255,215,64,.1);border:1px solid rgba(255,215,64,.3);border-radius:8px;font-size:.88rem;font-weight:600;color:var(--warning);">
                🚪 Vulnerabilidad
            </div>
            <div style="color:var(--text-muted);font-size:1.2rem;">=</div>
            <div style="padding:10px 18px;background:rgba(123,47,255,.1);border:1px solid rgba(123,47,255,.3);border-radius:8px;font-size:.88rem;font-weight:600;color:var(--secondary);">
                📊 Riesgo
            </div>
            <div style="color:var(--text-muted);font-size:1.2rem;">→</div>
            <div style="padding:10px 18px;background:rgba(255,71,87,.15);border:1px solid rgba(255,71,87,.5);border-radius:8px;font-size:.88rem;font-weight:600;color:var(--danger);">
                🚨 Incidente
            </div>
        </div>

        <div class="highlight-box">
            <p style="margin:0;color:var(--text-secondary);">
                <strong style="color:var(--text-primary);">Ejemplo integrador:</strong>
                Un phishing (amenaza) llega a tu correo. Si usás una contraseña débil (vulnerabilidad),
                hay un riesgo alto de que el atacante acceda a tu cuenta. Si hacés clic y entregás tu clave,
                se produce el incidente de seguridad.
            </p>
        </div>
    </div>

    <!-- Navegación -->
    <div class="page-nav">
        <a href="/ciberseguridad/modulos/modulo1/triada.php" class="btn-outline-cyber">
            <i class="bi bi-arrow-left"></i> Anterior
        </a>
        <a href="/ciberseguridad/modulos/modulo1/quiz.php" class="btn-quiz-nav">
            <i class="bi bi-pencil-square"></i> Ir al Cuestionario
        </a>
    </div>

</div>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
