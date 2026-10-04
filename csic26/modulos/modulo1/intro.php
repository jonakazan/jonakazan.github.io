<?php
$pageTitle    = '1.1 ¿Qué es la Seguridad Informática?';
$activeModule = 'modulo1';
$activePage   = 'intro';
require_once __DIR__ . '/../../includes/header.php';
?>

<main class="main-content">
<div class="fade-in-up" style="max-width:860px;">

    <div class="module-badge"><i class="bi bi-shield-check"></i> Módulo 1</div>

    <h1>1.1 ¿Qué es la Seguridad Informática y por qué nos afecta a todos?</h1>
    <p class="lead" style="color:var(--primary);font-weight:500;font-size:1.1rem;">
        La seguridad informática no es exclusiva de expertos ni de grandes empresas.
    </p>

    <div class="content-block">
        <p>
            La seguridad informática es el <strong>conjunto de medidas, hábitos y decisiones cotidianas</strong>
            que tomamos para proteger nuestros equipos, nuestra información y nuestra propia tranquilidad.
        </p>
        <p>
            Cuando salimos de casa y cerramos la puerta con llave, estamos protegiendo lo que hay dentro de manera
            natural y sin darle demasiadas vueltas. Con la <strong>computadora, la tablet y el teléfono celular</strong>
            ocurre exactamente lo mismo: necesitamos incorporar pequeñas rutinas diarias que impidan que personas
            malintencionadas accedan a nuestras cosas o nos causen un disgusto.
        </p>

        <div class="highlight-box">
            <div class="d-flex align-items-start gap-3">
                <span class="icon-accent">🏠</span>
                <p style="margin:0;color:var(--text-secondary);">
                    <strong style="color:var(--text-primary);">Analogía de la llave:</strong>
                    Así como cerrás tu casa al salir, necesitás cerrar tus dispositivos con contraseñas seguras,
                    actualizaciones y buenas prácticas. Es un hábito, no una tarea técnica complicada.
                </p>
            </div>
        </div>

        <p>
            Hoy en día guardamos en nuestros dispositivos cosas sumamente valiosas: fotografías familiares,
            conversaciones privadas, documentos de trabajo, trámites y los datos de nuestras tarjetas para
            comprar por internet. Si alguien lograra entrar en nuestro equipo sin permiso, podría leer esas
            cosas, borrarlas o usarlas para hacernos daño.
        </p>
    </div>

    <div class="content-block">
        <h2 class="mb-4">¿Qué elementos busca proteger la ciberseguridad?</h2>

        <ul class="cyber-list">
            <li>
                <span class="list-icon">👤</span>
                <div>
                    <strong style="color:var(--text-primary);">Personas:</strong>
                    <span> Protege nuestra identidad, privacidad, reputación y tranquilidad digital.</span>
                </div>
            </li>
            <li>
                <span class="list-icon">💻</span>
                <div>
                    <strong style="color:var(--text-primary);">Dispositivos:</strong>
                    <span> Computadoras de escritorio, notebooks, teléfonos móviles, tablets y memorias USB.</span>
                </div>
            </li>
            <li>
                <span class="list-icon">🔑</span>
                <div>
                    <strong style="color:var(--text-primary);">Cuentas y Credenciales:</strong>
                    <span> Usuarios, contraseñas, PINs y accesos a plataformas.</span>
                </div>
            </li>
            <li>
                <span class="list-icon">📡</span>
                <div>
                    <strong style="color:var(--text-primary);">Redes y Conexiones:</strong>
                    <span> Redes Wi-Fi del hogar, routers y conexiones de datos.</span>
                </div>
            </li>
            <li>
                <span class="list-icon">📁</span>
                <div>
                    <strong style="color:var(--text-primary);">Datos e Información:</strong>
                    <span> Archivos personales, fotos, documentos de trabajo y datos bancarios.</span>
                </div>
            </li>
            <li>
                <span class="list-icon">☁️</span>
                <div>
                    <strong style="color:var(--text-primary);">Servicios Digitales:</strong>
                    <span> Correo electrónico, plataformas educativas, banca en línea y almacenamiento en la nube.</span>
                </div>
            </li>
        </ul>
    </div>

    <div class="highlight-box" style="background:linear-gradient(135deg,rgba(0,212,255,0.08),rgba(123,47,255,0.08));border-color:rgba(123,47,255,0.3);">
        <p style="margin:0;font-size:1rem;color:var(--text-primary);font-weight:500;">
            💡 <strong>Idea clave:</strong> Por eso, cuidar nuestros dispositivos es tan normal y necesario como
            poner la traba a la puerta al entrar o salir de casa.
        </p>
    </div>

    <!-- Navegación entre páginas -->
    <div class="page-nav">
        <a href="/ciberseguridad/dashboard.php" class="btn-outline-cyber">
            <i class="bi bi-arrow-left"></i> Volver al inicio
        </a>
        <a href="/ciberseguridad/modulos/modulo1/pilares.php" class="btn-cyber">
            Siguiente sección <i class="bi bi-arrow-right"></i>
        </a>
    </div>

</div>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
