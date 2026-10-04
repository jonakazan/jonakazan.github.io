<?php
$pageTitle    = '2.2 Gestores de Contraseñas y Passkeys';
$activeModule = 'modulo2';
$activePage   = 'gestores';
require_once __DIR__ . '/../../includes/header.php';
?>

<main class="main-content">
<div class="fade-in-up" style="max-width:860px;">

    <div class="module-badge"><i class="bi bi-key-fill"></i> Módulo 2</div>
    <h1>2.2 Gestores de Contraseñas y la nueva era de las Passkeys</h1>
    <p class="lead" style="color:var(--primary);font-weight:500;font-size:1.1rem;">
        No hace falta memorizar decenas de claves complejas. Existen herramientas diseñadas para eso.
    </p>

    <!-- Gestores de contraseñas -->
    <div class="content-block">
        <div class="d-flex align-items-center gap-3 mb-3">
            <span style="font-size:2.5rem;">🔐</span>
            <h2 style="margin:0;font-size:1.3rem;">A. Gestores de Contraseñas — Tu cofre digital</h2>
        </div>

        <p>
            Un <strong>gestor de contraseñas</strong> es una aplicación segura que funciona como
            una <strong style="color:var(--primary);">bóveda digital cifrada</strong>. En lugar de
            recordar 30 contraseñas distintas, solo necesitás recordar
            <strong>una única Contraseña Maestra</strong> que abre la bóveda.
        </p>

        <h3 style="font-size:1rem;color:var(--text-secondary);margin-bottom:1rem;">El gestor se encarga del resto:</h3>
        <ul class="cyber-list mb-4">
            <li>
                <span class="list-icon">🎲</span>
                <span><strong style="color:var(--text-primary);">Genera</strong> contraseñas largas, aleatorias e imposibles de adivinar para cada sitio.</span>
            </li>
            <li>
                <span class="list-icon">⚡</span>
                <span><strong style="color:var(--text-primary);">Rellena automáticamente</strong> el usuario y la clave cuando entrás a tus páginas habituales.</span>
            </li>
            <li>
                <span class="list-icon">🔄</span>
                <span><strong style="color:var(--text-primary);">Sincroniza</strong> tus claves de forma segura entre tu teléfono y tu computadora.</span>
            </li>
        </ul>

        <!-- Ejemplos de gestores populares -->
        <div class="highlight-box">
            <h4 style="font-size:.85rem;color:var(--primary);text-transform:uppercase;letter-spacing:.08em;margin-bottom:.75rem;">
                Gestores populares y confiables
            </h4>
            <div class="d-flex flex-wrap gap-2">
                <?php $gestores = ['Bitwarden (gratuito)', 'KeePassXC (gratuito)', '1Password', 'NordPass', 'Dashlane']; ?>
                <?php foreach ($gestores as $g): ?>
                <span style="padding:5px 12px;background:rgba(0,212,255,.08);border:1px solid rgba(0,212,255,.2);
                    border-radius:100px;font-size:.82rem;color:var(--primary);"><?= $g ?></span>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- Malos hábitos -->
    <div class="content-block">
        <div class="d-flex align-items-center gap-3 mb-3">
            <span style="font-size:2.5rem;">🚫</span>
            <h2 style="margin:0;font-size:1.3rem;">B. Malos hábitos que debemos desterrar</h2>
        </div>

        <div class="row g-3">
            <div class="col-sm-6">
                <div class="p-3 h-100" style="background:rgba(255,71,87,.06);border:1px solid rgba(255,71,87,.2);border-radius:10px;">
                    <div style="font-size:1.6rem;margin-bottom:.5rem;">📝</div>
                    <h4 style="font-size:.9rem;color:var(--danger);margin-bottom:.3rem;">Contraseñas en papel</h4>
                    <p style="font-size:.83rem;color:var(--text-secondary);margin:0;">
                        No anotes claves en papeles pegados al monitor ni en cuadernos a la vista de visitas.
                    </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="p-3 h-100" style="background:rgba(255,71,87,.06);border:1px solid rgba(255,71,87,.2);border-radius:10px;">
                    <div style="font-size:1.6rem;margin-bottom:.5rem;">💬</div>
                    <h4 style="font-size:.9rem;color:var(--danger);margin-bottom:.3rem;">Por WhatsApp o correo</h4>
                    <p style="font-size:.83rem;color:var(--text-secondary);margin:0;">
                        Nunca enviés contraseñas por mensajería ni correo electrónico, son canales inseguros.
                    </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="p-3 h-100" style="background:rgba(255,71,87,.06);border:1px solid rgba(255,71,87,.2);border-radius:10px;">
                    <div style="font-size:1.6rem;margin-bottom:.5rem;">👥</div>
                    <h4 style="font-size:.9rem;color:var(--danger);margin-bottom:.3rem;">Compartir cuentas</h4>
                    <p style="font-size:.83rem;color:var(--text-secondary);margin:0;">
                        No compartás cuentas personales. Cada persona debe tener su propio usuario y contraseña.
                    </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="p-3 h-100" style="background:rgba(0,230,118,.06);border:1px solid rgba(0,230,118,.2);border-radius:10px;">
                    <div style="font-size:1.6rem;margin-bottom:.5rem;">🔄</div>
                    <h4 style="font-size:.9rem;color:var(--success);margin-bottom:.3rem;">SÍ: Cambiar si sospechás</h4>
                    <p style="font-size:.83rem;color:var(--text-secondary);margin:0;">
                        Si sospechás que alguien descubrió tu clave, <strong style="color:var(--success);">cambiala inmediatamente</strong>.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Passkeys -->
    <div class="content-block" style="border-color:rgba(123,47,255,.3);background:rgba(123,47,255,.03);">
        <div class="d-flex align-items-center gap-3 mb-3">
            <span style="font-size:2.5rem;">🔮</span>
            <h2 style="margin:0;font-size:1.3rem;">C. Las nuevas Passkeys — El futuro sin contraseñas</h2>
        </div>

        <p>
            Las <strong style="color:var(--secondary);">Passkeys</strong> son una tecnología moderna
            pensada para <strong>reemplazar progresivamente</strong> a las contraseñas tradicionales.
        </p>

        <div class="row g-3 mb-3">
            <div class="col-md-6">
                <div class="highlight-box h-100" style="border-color:rgba(123,47,255,.3);">
                    <h4 style="font-size:.88rem;color:var(--secondary);margin-bottom:.6rem;">¿Cómo funciona?</h4>
                    <p style="font-size:.85rem;color:var(--text-secondary);margin:0;">
                        Asocia tu cuenta a tu <strong style="color:var(--text-primary);">dispositivo físico</strong>
                        usando tu <strong style="color:var(--text-primary);">biometría</strong>
                        (huella dactilar, reconocimiento facial) o el PIN de desbloqueo de tu equipo.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="highlight-box h-100" style="border-color:rgba(0,230,118,.3);background:rgba(0,230,118,.04);">
                    <h4 style="font-size:.88rem;color:var(--success);margin-bottom:.6rem;">Su gran ventaja</h4>
                    <p style="font-size:.85rem;color:var(--text-secondary);margin:0;">
                        <strong style="color:var(--text-primary);">No existen palabras ni claves</strong>
                        que puedan ser robadas mediante correos engañosos o páginas de estafa
                        (phishing). El atacante no tiene nada para robar.
                    </p>
                </div>
            </div>
        </div>

        <p style="font-size:.88rem;color:var(--text-muted);">
            💡 Ya están disponibles en Google, Microsoft, Apple, GitHub y muchos sitios más.
            Si ves la opción "Iniciar sesión con passkey", ¡es la opción más segura!
        </p>
    </div>

    <!-- Navegación -->
    <div class="page-nav">
        <a href="/ciberseguridad/modulos/modulo2/contrasenas.php" class="btn-outline-cyber">
            <i class="bi bi-arrow-left"></i> Anterior
        </a>
        <a href="/ciberseguridad/modulos/modulo2/dosfactores.php" class="btn-cyber">
            Siguiente sección <i class="bi bi-arrow-right"></i>
        </a>
    </div>

</div>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
