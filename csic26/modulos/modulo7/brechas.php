<?php
$pageTitle    = '7.2 Brechas de Datos y Robo de Identidad';
$activeModule = 'modulo7';
$activePage   = 'brechas';
require_once __DIR__ . '/../../includes/header.php';
?>

<main class="main-content">
<div class="fade-in-up" style="max-width:860px;">

    <div class="module-badge"><i class="bi bi-shield-slash-fill"></i> Módulo 7</div>
    <h1>7.2 Brechas de Datos y Robo de Identidad (Cuando el agua se desborda)</h1>
    <p class="lead" style="color:var(--primary);font-weight:500;font-size:1.1rem;">
        Aunque seas muy cuidadoso, las empresas donde guardas tu información pueden sufrir ciberataques masivos.
    </p>

    <!-- Concepto Brecha de Datos -->
    <div class="content-block">
        <div class="d-flex align-items-start gap-4 flex-wrap">
            <div style="font-size:3.5rem;line-height:1;flex-shrink:0;">🌊</div>
            <div>
                <h2 style="font-size:1.3rem;margin-bottom:.6rem;color:var(--text-primary);">
                    ¿Qué es una Brecha de Datos (Data Breach)?
                </h2>
                <p>
                    Ocurre cuando un grupo de ciberdelincuentes logra quebrar las defensas informáticas de una entidad
                    (un banco, una red social, un servicio médico, una tienda online o una aerolínea) y <strong>exfiltra
                    una base de datos masiva</strong> que contiene nombres, correos, teléfonos, fechas de nacimiento,
                    números de tarjeta e historiales de millones de usuarios.
                </p>
                <p style="margin-bottom:0;color:var(--text-secondary);">
                    Estas bases de datos robadas suelen publicarse o venderse al mejor postor en la <em>Dark Web</em>,
                    sirviendo de combustible para múltiples delitos en cadena.
                </p>
            </div>
        </div>
    </div>

    <!-- Robo de Identidad -->
    <div class="content-block" style="border-left:4px solid var(--danger);padding:22px;">
        <div class="d-flex align-items-center gap-3 mb-3">
            <div style="width:44px;height:44px;border-radius:10px;background:rgba(255,71,87,.1);border:1px solid rgba(255,71,87,.3);display:flex;align-items:center;justify-content:center;color:var(--danger);font-size:1.4rem;">
                <i class="bi bi-person-x-fill"></i>
            </div>
            <div>
                <h3 style="font-size:1.2rem;margin:0;color:var(--text-primary);">El Robo de Identidad</h3>
                <span style="font-size:.82rem;color:var(--danger);font-weight:600;">Consecuencia directa de las filtraciones</span>
            </div>
        </div>

        <p style="font-size:.9rem;color:var(--text-secondary);line-height:1.6;">
            Con los datos personales filtrados, los delincuentes intentan <strong>suplantar tu identidad</strong> para:
        </p>

        <div class="row g-2 mb-3">
            <div class="col-sm-6">
                <div class="p-2" style="background:var(--bg-main);border-radius:8px;font-size:.83rem;color:var(--text-primary);">
                    💳 Solicitar préstamos o créditos online a tu nombre.
                </div>
            </div>
            <div class="col-sm-6">
                <div class="p-2" style="background:var(--bg-main);border-radius:8px;font-size:.83rem;color:var(--text-primary);">
                    🏦 Abrir cuentas bancarias truchas para lavar dinero de estafas.
                </div>
            </div>
            <div class="col-sm-6">
                <div class="p-2" style="background:var(--bg-main);border-radius:8px;font-size:.83rem;color:var(--text-primary);">
                    🛍️ Realizar compras fraudulentas con tus datos de tarjeta.
                </div>
            </div>
            <div class="col-sm-6">
                <div class="p-2" style="background:var(--bg-main);border-radius:8px;font-size:.83rem;color:var(--text-primary);">
                    🎭 Cometer fraudes a terceros haciéndose pasar por ti.
                </div>
            </div>
        </div>
    </div>

    <!-- Plan de Acción ante una Brecha -->
    <div class="content-block">
        <h3 class="mb-3" style="font-size:1.2rem;">¿Qué hacer si te enteras de una filtración en un servicio que usas?</h3>
        <p style="font-size:.9rem;color:var(--text-secondary);">
            Si las noticias o un aviso oficial informan que una empresa donde tienes cuenta sufrió una brecha de datos,
            debes activar este protocolo de emergencia inmediato:
        </p>

        <div class="d-flex flex-column gap-3">
            <div class="p-3" style="background:rgba(255,71,87,.06);border:1px solid rgba(255,71,87,.25);border-radius:10px;">
                <div class="d-flex align-items-center gap-2 mb-1">
                    <strong style="color:var(--danger);font-size:.95rem;">1. Cambia inmediatamente la contraseña de ese servicio</strong>
                </div>
                <p style="font-size:.84rem;color:var(--text-secondary);margin:0;">
                    Genera una contraseña nueva, única y robusta utilizando tu gestor de claves.
                </p>
            </div>

            <div class="p-3" style="background:rgba(255,165,2,.06);border:1px solid rgba(255,165,2,.25);border-radius:10px;">
                <div class="d-flex align-items-center gap-2 mb-1">
                    <strong style="color:var(--warning);font-size:.95rem;">2. Cambia la clave en TODAS las cuentas donde hayas repetido la misma</strong>
                </div>
                <p style="font-size:.84rem;color:var(--text-secondary);margin:0;">
                    Los atacantes aplican la técnica de <strong>Credential Stuffing</strong>: toman las contraseñas filtradas de esa empresa y prueban automáticamente si abren tu Gmail, Netflix, MercadoPago o redes sociales.
                </p>
            </div>

            <div class="p-3" style="background:rgba(46,213,115,.06);border:1px solid rgba(46,213,115,.25);border-radius:10px;">
                <div class="d-flex align-items-center gap-2 mb-1">
                    <strong style="color:var(--success);font-size:.95rem;">3. Activa Doble Factor de Autenticación (2FA)</strong>
                </div>
                <p style="font-size:.84rem;color:var(--text-secondary);margin:0;">
                    Incluso si los delincuentes tienen tu contraseña filtrada, el 2FA bloqueará su acceso al exigir un código de tu aplicación autenticadora.
                </p>
            </div>

            <div class="p-3" style="background:rgba(0,210,211,.06);border:1px solid rgba(0,210,211,.25);border-radius:10px;">
                <div class="d-flex align-items-center gap-2 mb-1">
                    <strong style="color:var(--primary);font-size:.95rem;">4. Monitorea tus movimientos financieros</strong>
                </div>
                <p style="font-size:.84rem;color:var(--text-secondary);margin:0;">
                    Revisa con atención los resúmenes bancarios para detectar cargos pequeños o consumos sospechosos no reconocidos.
                </p>
            </div>
        </div>
    </div>

    <!-- Navegación -->
    <div class="page-nav">
        <a href="/ciberseguridad/modulos/modulo7/huella.php" class="btn-outline-cyber">
            <i class="bi bi-arrow-left"></i> Sección anterior
        </a>
        <a href="/ciberseguridad/modulos/modulo7/criptografia.php" class="btn-cyber">
            Siguiente sección <i class="bi bi-arrow-right"></i>
        </a>
    </div>

</div>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
