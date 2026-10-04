<?php
$pageTitle    = '2.3 Doble Factor de Autenticación (2FA/MFA)';
$activeModule = 'modulo2';
$activePage   = 'dosfactores';
require_once __DIR__ . '/../../includes/header.php';
?>

<main class="main-content">
<div class="fade-in-up" style="max-width:860px;">

    <div class="module-badge"><i class="bi bi-key-fill"></i> Módulo 2</div>
    <h1>2.3 Doble Factor de Autenticación (2FA / MFA): El segundo cerrojo</h1>
    <p class="lead" style="color:var(--primary);font-weight:500;font-size:1.1rem;">
        Incluso con una buena contraseña, puede ser descubierta o filtrada. El 2FA es tu red de seguridad.
    </p>

    <!-- Concepto central -->
    <div class="content-block">
        <div class="d-flex align-items-start gap-3 mb-4">
            <span style="font-size:2.8rem;line-height:1;">🚪</span>
            <div>
                <p>
                    Funciona como <strong>poner un segundo cerrojo independiente</strong> en la puerta
                    de tu casa. Para ingresar a tu cuenta, el sistema exige combinar dos elementos
                    de categorías distintas:
                </p>
            </div>
        </div>

        <!-- Los dos factores -->
        <div class="row g-3 mb-4">
            <div class="col-md-6">
                <div class="card-cyber p-4 h-100" style="border-color:rgba(0,212,255,.3);">
                    <div style="font-size:2rem;margin-bottom:.7rem;">🧠</div>
                    <div style="font-size:.72rem;font-weight:700;text-transform:uppercase;letter-spacing:.1em;color:var(--primary);margin-bottom:.4rem;">
                        Factor 1 — Algo que SABÉS
                    </div>
                    <h3 style="font-size:.95rem;margin-bottom:.4rem;">Tu contraseña</h3>
                    <p style="font-size:.85rem;color:var(--text-secondary);margin:0;">
                        El usuario y la contraseña que ya usás normalmente.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-cyber p-4 h-100" style="border-color:rgba(0,230,118,.3);">
                    <div style="font-size:2rem;margin-bottom:.7rem;">📱</div>
                    <div style="font-size:.72rem;font-weight:700;text-transform:uppercase;letter-spacing:.1em;color:var(--success);margin-bottom:.4rem;">
                        Factor 2 — Algo que TENÉS o que SOS
                    </div>
                    <h3 style="font-size:.95rem;margin-bottom:.4rem;">Verificación extra</h3>
                    <p style="font-size:.85rem;color:var(--text-secondary);margin:0;">
                        Un código en tu teléfono, un SMS o tu huella dactilar.
                    </p>
                </div>
            </div>
        </div>

        <!-- Por qué funciona -->
        <div class="highlight-box" style="background:linear-gradient(135deg,rgba(0,230,118,.06),rgba(0,212,255,.04));border-color:rgba(0,230,118,.3);">
            <div class="d-flex align-items-start gap-3">
                <span style="font-size:1.5rem;">🛡️</span>
                <p style="margin:0;color:var(--text-secondary);">
                    <strong style="color:var(--text-primary);">¿Por qué esto detiene a los atacantes?</strong><br>
                    Aunque a un delincuente le llegue tu contraseña por un engaño, no podrá ingresar
                    a tu cuenta porque le faltará el código de confirmación que llega <em>únicamente
                    a tu teléfono personal</em>. Sin el segundo factor, la contraseña sola no sirve.
                </p>
            </div>
        </div>
    </div>

    <!-- Métodos de 2FA -->
    <div class="content-block">
        <h2 class="mb-4">Métodos más comunes de segundo factor</h2>

        <div class="row g-3">

            <div class="col-md-6">
                <div class="p-3 h-100" style="background:var(--bg-card);border:1px solid var(--border);border-radius:10px;transition:var(--transition);">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <span style="font-size:1.5rem;">📱</span>
                        <h4 style="font-size:.95rem;margin:0;color:var(--text-primary);">App Autenticadora</h4>
                        <span style="font-size:.7rem;padding:2px 8px;background:rgba(0,230,118,.15);color:var(--success);border-radius:100px;margin-left:auto;">
                            ⭐ Recomendado
                        </span>
                    </div>
                    <p style="font-size:.83rem;color:var(--text-secondary);margin:0;">
                        Google Authenticator, Microsoft Authenticator, Authy. Genera códigos de 6 dígitos
                        que cambian cada 30 segundos. Funciona sin conexión a Internet.
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="p-3 h-100" style="background:var(--bg-card);border:1px solid var(--border);border-radius:10px;">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <span style="font-size:1.5rem;">💬</span>
                        <h4 style="font-size:.95rem;margin:0;color:var(--text-primary);">Código por SMS</h4>
                        <span style="font-size:.7rem;padding:2px 8px;background:rgba(255,215,64,.15);color:var(--warning);border-radius:100px;margin-left:auto;">
                            Básico
                        </span>
                    </div>
                    <p style="font-size:.83rem;color:var(--text-secondary);margin:0;">
                        Te llega un código al teléfono por mensaje de texto. Fácil de usar,
                        aunque es el método menos seguro de los tres (los SMS pueden interceptarse).
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="p-3 h-100" style="background:var(--bg-card);border:1px solid var(--border);border-radius:10px;">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <span style="font-size:1.5rem;">☝️</span>
                        <h4 style="font-size:.95rem;margin:0;color:var(--text-primary);">Biometría</h4>
                    </div>
                    <p style="font-size:.83rem;color:var(--text-secondary);margin:0;">
                        Tu huella dactilar o reconocimiento facial. Ya integrado en la mayoría de
                        teléfonos modernos. Cómodo y difícil de falsificar.
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="p-3 h-100" style="background:var(--bg-card);border:1px solid var(--border);border-radius:10px;">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <span style="font-size:1.5rem;">🔑</span>
                        <h4 style="font-size:.95rem;margin:0;color:var(--text-primary);">Llave física (Hardware Key)</h4>
                    </div>
                    <p style="font-size:.83rem;color:var(--text-secondary);margin:0;">
                        Un dispositivo USB (como YubiKey). El nivel más alto de seguridad.
                        Se usa en entornos profesionales o con datos muy sensibles.
                    </p>
                </div>
            </div>

        </div>
    </div>

    <!-- ¿Dónde activarlo? -->
    <div class="content-block" style="border-color:rgba(0,212,255,.2);">
        <h2 class="mb-3" style="font-size:1.1rem;">¿Dónde activar el 2FA primero?</h2>
        <p style="color:var(--text-secondary);">Prioridad alta para activar el segundo factor:</p>
        <ul class="cyber-list mb-0">
            <li><span class="list-icon">📧</span><span><strong style="color:var(--text-primary);">Correo electrónico</strong> — Es la llave maestra de todas tus cuentas (se usa para recuperar otras).</span></li>
            <li><span class="list-icon">💰</span><span><strong style="color:var(--text-primary);">Banca en línea</strong> — Protegé directamente tu dinero.</span></li>
            <li><span class="list-icon">📱</span><span><strong style="color:var(--text-primary);">Redes sociales</strong> — Evitás que alguien suplante tu identidad.</span></li>
            <li><span class="list-icon">☁️</span><span><strong style="color:var(--text-primary);">Almacenamiento en la nube</strong> — Google Drive, Dropbox, OneDrive.</span></li>
            <li><span class="list-icon">🔐</span><span><strong style="color:var(--text-primary);">Gestor de contraseñas</strong> — Si cae la bóveda, caen todas las claves.</span></li>
        </ul>
    </div>

    <!-- Mensaje clave -->
    <div class="highlight-box" style="background:linear-gradient(135deg,rgba(0,212,255,.06),rgba(123,47,255,.06));border-color:rgba(0,212,255,.3);">
        <p style="margin:0;font-weight:600;font-size:1rem;color:var(--text-primary);">
            🏆 Activar el doble factor en tu correo electrónico es una de las medidas defensivas
            más potentes que existen. Hacelo hoy.
        </p>
    </div>

    <!-- Navegación -->
    <div class="page-nav">
        <a href="/ciberseguridad/modulos/modulo2/gestores.php" class="btn-outline-cyber">
            <i class="bi bi-arrow-left"></i> Anterior
        </a>
        <a href="/ciberseguridad/modulos/modulo2/control.php" class="btn-cyber">
            Siguiente sección <i class="bi bi-arrow-right"></i>
        </a>
    </div>

</div>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
