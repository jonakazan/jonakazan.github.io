<?php
$pageTitle    = '1.2 Tres Conceptos que se Complementan';
$activeModule = 'modulo1';
$activePage   = 'pilares';
require_once __DIR__ . '/../../includes/header.php';
?>

<main class="main-content">
<div class="fade-in-up" style="max-width:860px;">

    <div class="module-badge"><i class="bi bi-shield-check"></i> Módulo 1</div>
    <h1>1.2 Tres Conceptos que se Complementan</h1>
    <p class="lead" style="color:var(--primary);font-weight:500;font-size:1.1rem;">
        ¿Qué diferencia hay entre Seguridad de la Información, Seguridad Informática y Ciberseguridad?
    </p>

    <div class="content-block">
        <p>
            A menudo escuchamos hablar de estos tres términos como si fueran lo mismo. Aunque están muy relacionados,
            comprender su pequeña diferencia nos ayuda a saber <strong>qué estamos protegiendo en cada momento.</strong>
        </p>

        <!-- Tres conceptos en cards -->
        <div class="row g-3 mt-2">

            <div class="col-md-4">
                <div class="card-cyber p-3 h-100" style="border-color:rgba(0,212,255,0.3);background:rgba(0,212,255,0.05);">
                    <div style="font-size:2rem;margin-bottom:.8rem;">📋</div>
                    <h3 style="font-size:1rem;color:var(--primary);margin-bottom:.5rem;">
                        Seguridad de la Información
                    </h3>
                    <p style="font-size:.88rem;margin:0;color:var(--text-secondary);">
                        <strong style="color:var(--text-primary);">El concepto más amplio.</strong>
                        Protege la información valiosa en <em>cualquier formato</em>: digital, impresa en papel,
                        o expresada verbalmente en una reunión.
                    </p>
                    <div class="mt-2" style="font-size:.78rem;color:var(--primary);opacity:.7;">
                        ↔ Todos los soportes
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card-cyber p-3 h-100" style="border-color:rgba(123,47,255,0.3);background:rgba(123,47,255,0.05);">
                    <div style="font-size:2rem;margin-bottom:.8rem;">🖥️</div>
                    <h3 style="font-size:1rem;color:var(--secondary);margin-bottom:.5rem;">
                        Seguridad Informática
                    </h3>
                    <p style="font-size:.88rem;margin:0;color:var(--text-secondary);">
                        Se enfoca en la <strong style="color:var(--text-primary);">protección técnica</strong> de la
                        infraestructura: computadoras, servidores, redes, sistemas operativos y programas.
                    </p>
                    <div class="mt-2" style="font-size:.78rem;color:var(--secondary);opacity:.7;">
                        ↔ Infraestructura tecnológica
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card-cyber p-3 h-100" style="border-color:rgba(255,107,53,0.3);background:rgba(255,107,53,0.05);">
                    <div style="font-size:2rem;margin-bottom:.8rem;">🌐</div>
                    <h3 style="font-size:1rem;color:var(--accent);margin-bottom:.5rem;">
                        Ciberseguridad
                    </h3>
                    <p style="font-size:.88rem;margin:0;color:var(--text-secondary);">
                        Se concentra en proteger los <strong style="color:var(--text-primary);">activos digitales</strong>
                        frente a amenazas del ciberespacio: fraudes, virus o accesos no autorizados vía Internet.
                    </p>
                    <div class="mt-2" style="font-size:.78rem;color:var(--accent);opacity:.7;">
                        ↔ Entornos conectados a Internet
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="content-block">
        <h2 class="mb-3">¿Cómo se relacionan entre sí?</h2>
        <p>Pensalos como círculos concéntricos, uno dentro del otro:</p>

        <!-- Visualización de círculos -->
        <div class="text-center my-4">
            <div style="display:inline-block;position:relative;width:280px;height:280px;">
                <!-- Círculo exterior -->
                <div style="position:absolute;inset:0;border-radius:50%;border:2px dashed rgba(0,212,255,0.4);
                    display:flex;align-items:center;justify-content:center;flex-direction:column;
                    background:rgba(0,212,255,0.04);">
                    <span style="position:absolute;top:14px;font-size:.75rem;font-weight:700;color:var(--primary);letter-spacing:.05em;">
                        SEGURIDAD DE LA INFORMACIÓN
                    </span>

                    <!-- Círculo medio -->
                    <div style="width:190px;height:190px;border-radius:50%;border:2px dashed rgba(123,47,255,0.5);
                        display:flex;align-items:center;justify-content:center;flex-direction:column;
                        background:rgba(123,47,255,0.05);">
                        <span style="position:absolute;top:54px;font-size:.72rem;font-weight:700;color:var(--secondary);">
                            SEG. INFORMÁTICA
                        </span>

                        <!-- Círculo interior -->
                        <div style="width:100px;height:100px;border-radius:50%;border:2px solid rgba(255,107,53,0.6);
                            background:rgba(255,107,53,0.1);
                            display:flex;align-items:center;justify-content:center;">
                            <span style="font-size:.68rem;font-weight:700;color:var(--accent);text-align:center;line-height:1.3;">
                                CIBER<br>SEGURIDAD
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="highlight-box">
            <p style="margin:0;color:var(--text-secondary);">
                💡 <strong style="color:var(--text-primary);">Resumen práctico:</strong>
                Si protegés un documento impreso en papel, estás haciendo
                <em style="color:var(--primary);">Seguridad de la Información</em>.
                Si configurás un firewall en tu computadora, hacés
                <em style="color:var(--secondary);">Seguridad Informática</em>.
                Si evitás hacer clic en un link sospechoso de un email, practicás
                <em style="color:var(--accent);">Ciberseguridad</em>.
            </p>
        </div>
    </div>

    <!-- Navegación -->
    <div class="page-nav">
        <a href="/ciberseguridad/modulos/modulo1/intro.php" class="btn-outline-cyber">
            <i class="bi bi-arrow-left"></i> Anterior
        </a>
        <a href="/ciberseguridad/modulos/modulo1/activos.php" class="btn-cyber">
            Siguiente sección <i class="bi bi-arrow-right"></i>
        </a>
    </div>

</div>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
