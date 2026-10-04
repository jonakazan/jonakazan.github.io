<?php
$pageTitle    = '1.4 Los Tres Pilares: La Tríada CIA';
$activeModule = 'modulo1';
$activePage   = 'triada';
require_once __DIR__ . '/../../includes/header.php';
?>

<main class="main-content">
<div class="fade-in-up" style="max-width:860px;">

    <div class="module-badge"><i class="bi bi-shield-check"></i> Módulo 1</div>
    <h1>1.4 Los Tres Pilares Fundamentales: La Tríada CIA</h1>
    <p class="lead" style="color:var(--primary);font-weight:500;font-size:1.1rem;">
        Cuando protegemos información, cuidamos tres cosas concretas conocidas mundialmente como la Tríada CIA.
    </p>

    <div class="content-block">
        <p>
            En español también se conoce como la <strong>Tríada CID</strong>. Cada letra representa un pilar
            fundamental que todo sistema de seguridad debe garantizar al mismo tiempo.
        </p>

        <!-- Tríada CIA - Cards principales -->
        <div class="cia-grid">
            <div class="cia-card confidencialidad">
                <div class="cia-icon">🔏</div>
                <div class="cia-title" style="color:#00d4ff;">C — Confidencialidad</div>
                <div class="cia-desc">
                    La información solo es conocida por las personas <strong style="color:#00d4ff;">debidamente autorizadas.</strong>
                </div>
            </div>
            <div class="cia-card integridad">
                <div class="cia-icon">✅</div>
                <div class="cia-title" style="color:var(--success);">I — Integridad</div>
                <div class="cia-desc">
                    Los datos se mantienen <strong style="color:var(--success);">exactos y libres de modificaciones</strong> no autorizadas.
                </div>
            </div>
            <div class="cia-card disponibilidad">
                <div class="cia-icon">⚡</div>
                <div class="cia-title" style="color:var(--warning);">A — Disponibilidad</div>
                <div class="cia-desc">
                    Los sistemas están <strong style="color:var(--warning);">operativos y accesibles</strong> cuando los necesitamos.
                </div>
            </div>
        </div>
    </div>

    <!-- Ejemplos detallados -->
    <div class="content-block">
        <h2 class="mb-4">Ejemplos prácticos de cada pilar</h2>

        <div class="mb-4">
            <div class="d-flex align-items-center gap-2 mb-2">
                <span style="font-size:1.4rem;">🔏</span>
                <h3 style="font-size:1.05rem;margin:0;color:#00d4ff;">Confidencialidad</h3>
            </div>
            <div class="highlight-box" style="border-color:rgba(0,212,255,0.2);">
                <p style="margin:0;color:var(--text-secondary);">
                    <strong style="color:var(--text-primary);">Ejemplo cotidiano:</strong>
                    Que nadie pueda leer tus correos privados, ver tus fotos ni revisar tu saldo bancario
                    sin tu permiso. Cuando usás WhatsApp y tus mensajes tienen el candadito de cifrado,
                    estás usando confidencialidad.
                </p>
            </div>
            <div class="highlight-box mt-2" style="border-color:rgba(255,71,87,0.2);background:rgba(255,71,87,0.04);">
                <p style="margin:0;color:var(--text-secondary);">
                    <strong style="color:var(--danger);">Cuando se rompe:</strong>
                    Un ciberdelincuente accede a tu correo y lee tus mensajes privados o roba tus fotos.
                </p>
            </div>
        </div>

        <div class="mb-4">
            <div class="d-flex align-items-center gap-2 mb-2">
                <span style="font-size:1.4rem;">✅</span>
                <h3 style="font-size:1.05rem;margin:0;color:var(--success);">Integridad</h3>
            </div>
            <div class="highlight-box" style="border-color:rgba(0,230,118,0.2);background:rgba(0,230,118,0.04);">
                <p style="margin:0;color:var(--text-secondary);">
                    <strong style="color:var(--text-primary);">Ejemplo cotidiano:</strong>
                    Que nadie pueda alterar los montos de una transferencia bancaria, ni modificar las notas
                    de un examen. Lo que se guardó debe ser exactamente lo que se consulta.
                </p>
            </div>
            <div class="highlight-box mt-2" style="border-color:rgba(255,71,87,0.2);background:rgba(255,71,87,0.04);">
                <p style="margin:0;color:var(--text-secondary);">
                    <strong style="color:var(--danger);">Cuando se rompe:</strong>
                    Un atacante modifica el importe de un pedido en una tienda online, o altera el historial médico de un paciente.
                </p>
            </div>
        </div>

        <div class="mb-2">
            <div class="d-flex align-items-center gap-2 mb-2">
                <span style="font-size:1.4rem;">⚡</span>
                <h3 style="font-size:1.05rem;margin:0;color:var(--warning);">Disponibilidad</h3>
            </div>
            <div class="highlight-box" style="border-color:rgba(255,215,64,0.2);background:rgba(255,215,64,0.04);">
                <p style="margin:0;color:var(--text-secondary);">
                    <strong style="color:var(--text-primary);">Ejemplo cotidiano:</strong>
                    Que la plataforma bancaria o el correo electrónico funcionen cuando necesitás realizar
                    un trámite urgente. El servicio debe estar disponible cuando lo necesitás.
                </p>
            </div>
            <div class="highlight-box mt-2" style="border-color:rgba(255,71,87,0.2);background:rgba(255,71,87,0.04);">
                <p style="margin:0;color:var(--text-secondary);">
                    <strong style="color:var(--danger);">Cuando se rompe:</strong>
                    Un ataque de denegación de servicio (DDoS) deja sin funcionar el sitio web de un hospital
                    o un servicio de emergencias.
                </p>
            </div>
        </div>
    </div>

    <!-- Mensaje final -->
    <div class="highlight-box" style="background:linear-gradient(135deg,rgba(0,212,255,0.06),rgba(123,47,255,0.06));border-color:rgba(0,212,255,0.25);">
        <p style="margin:0;font-weight:500;color:var(--text-primary);">
            🛡️ <strong>Principio fundamental:</strong>
            Un buen sistema de seguridad cuida los tres pilares al mismo tiempo.
            Sacrificar uno de ellos por los otros crea vulnerabilidades.
        </p>
    </div>

    <!-- Navegación -->
    <div class="page-nav">
        <a href="/ciberseguridad/modulos/modulo1/activos.php" class="btn-outline-cyber">
            <i class="bi bi-arrow-left"></i> Anterior
        </a>
        <a href="/ciberseguridad/modulos/modulo1/riesgos.php" class="btn-cyber">
            Siguiente sección <i class="bi bi-arrow-right"></i>
        </a>
    </div>

</div>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
