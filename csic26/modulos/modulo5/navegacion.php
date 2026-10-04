<?php
$pageTitle    = '5.2 Navegación Web Segura y HTTPS';
$activeModule = 'modulo5';
$activePage   = 'navegacion';
require_once __DIR__ . '/../../includes/header.php';
?>

<main class="main-content">
<div class="fade-in-up" style="max-width:860px;">

    <div class="module-badge"><i class="bi bi-shield-lock-fill"></i> Módulo 5</div>
    <h1>5.2 Navegación Web Segura, HTTPS y Certificados Digitales</h1>
    <p class="lead" style="color:var(--primary);font-weight:500;font-size:1.1rem;">
        La barra de direcciones de tu navegador ofrece pistas vitales sobre la seguridad del sitio que estás visitando.
    </p>

    <!-- Parte A: HTTP vs HTTPS -->
    <div class="content-block">
        <div class="d-flex align-items-center gap-2 mb-3">
            <span class="badge" style="background:rgba(0,210,211,.15);color:var(--primary);border:1px solid rgba(0,210,211,.3);font-size:.9rem;padding:6px 12px;">Parte A</span>
            <h2 style="margin:0;font-size:1.3rem;">¿Qué significa exactamente HTTPS?</h2>
        </div>
        <p>
            Cuando visitas una página web, tu computadora se comunica continuamente con un servidor remoto.
            El protocolo utilizado define si esa conversación es secreta o pública:
        </p>

        <div class="row g-3 my-2">
            <!-- HTTP -->
            <div class="col-md-6">
                <div class="p-3 h-100" style="background:rgba(255,71,87,.06);border:1px solid rgba(255,71,87,.3);border-radius:10px;">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <span class="badge bg-danger" style="font-family:var(--font-code);font-size:.9rem;">HTTP</span>
                        <strong style="color:var(--danger);">Sin la "S" (Inseguro)</strong>
                    </div>
                    <p style="font-size:.86rem;color:var(--text-secondary);margin-bottom:.5rem;">
                        La información viaja en <strong>texto claro</strong> (como una postal escrita a mano).
                    </p>
                    <div style="background:rgba(255,71,87,.1);padding:10px;border-radius:8px;font-size:.8rem;color:var(--text-primary);font-family:var(--font-code);">
                        ⚠️ Peligro: Si un intermediario intercepta los datos, podrá leer tal cual tus contraseñas, números de tarjeta o mensajes personales.
                    </div>
                </div>
            </div>

            <!-- HTTPS -->
            <div class="col-md-6">
                <div class="p-3 h-100" style="background:rgba(46,213,115,.06);border:1px solid rgba(46,213,115,.3);border-radius:10px;">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <span class="badge bg-success" style="font-family:var(--font-code);font-size:.9rem;">HTTPS</span>
                        <strong style="color:var(--success);">Con la "S" de Seguro</strong>
                    </div>
                    <p style="font-size:.86rem;color:var(--text-secondary);margin-bottom:.5rem;">
                        La comunicación viaja <strong>cifrada</strong> mediante protocolos criptográficos modernos (SSL/TLS).
                    </p>
                    <div style="background:rgba(46,213,115,.1);padding:10px;border-radius:8px;font-size:.8rem;color:var(--text-primary);font-family:var(--font-code);">
                        🔒 Protección: Los datos viajan en una "caja fuerte blindada" que solo el servidor legítimo de destino puede abrir y descifrar.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Parte B: El Candado y los Certificados -->
    <div class="content-block">
        <div class="d-flex align-items-center gap-2 mb-3">
            <span class="badge" style="background:rgba(255,165,2,.15);color:var(--warning);border:1px solid rgba(255,165,2,.3);font-size:.9rem;padding:6px 12px;">Parte B</span>
            <h2 style="margin:0;font-size:1.3rem;">El Candado y los Certificados Digitales</h2>
        </div>
        <p>
            El ícono del candado junto a la dirección web confirma que el sitio web cuenta con un
            <strong>Certificado Digital SSL/TLS</strong> válido expedido por una Autoridad Certificadora reconocida.
        </p>

        <!-- La Trampa del Candado -->
        <div class="p-4 mb-4" style="background:rgba(255,71,87,.08);border:2px solid rgba(255,71,87,.4);border-radius:12px;">
            <div class="d-flex align-items-start gap-3">
                <div style="font-size:2.4rem;line-height:1;color:var(--danger);">⚠️</div>
                <div>
                    <h3 style="font-size:1.15rem;color:var(--danger);margin-bottom:.4rem;">
                        ¡Cuidado con la trampa del candado! (Un mito muy extendido)
                    </h3>
                    <p style="font-size:.9rem;color:var(--text-secondary);margin-bottom:.6rem;">
                        Mucha gente cree erróneamente que <em>"si una página tiene candado HTTPS, entonces es 100% segura, oficial y honesta"</em>.
                        <strong style="color:var(--danger);">Esto es completamente falso.</strong>
                    </p>
                    <div style="background:var(--bg-main);border-radius:8px;padding:12px;font-size:.85rem;color:var(--text-primary);line-height:1.6;">
                        El candado garantiza únicamente que <strong>la conexión viaja cifrada</strong> entre tu dispositivo y el servidor de destino.
                        Pero <strong>no garantiza quién es el dueño</strong> ni sus intenciones morales. Hoy en día, cualquier ciberdelincuente
                        puede obtener un certificado HTTPS gratuito e instalar un candado en su página falsa de phishing en menos de 5 minutos.
                    </div>
                </div>
            </div>
        </div>

        <!-- La Verdadera Verificación: Dominio -->
        <h3 style="font-size:1.15rem;" class="mb-3">La verdadera verificación: Inspeccionar el Nombre de Dominio</h3>
        <p style="font-size:.9rem;color:var(--text-secondary);">
            Para asegurarte de no estar en una trampa, además del candado debes mirar minuciosamente
            el <strong>nombre de dominio</strong> (la dirección exacta antes de la primera barra diagonal):
        </p>

        <div class="row g-3">
            <div class="col-md-6">
                <div class="p-3" style="background:rgba(46,213,115,.05);border:1px solid rgba(46,213,115,.3);border-radius:10px;">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <i class="bi bi-check-circle-fill" style="color:var(--success);font-size:1.2rem;"></i>
                        <strong style="color:var(--success);font-size:.9rem;">Dominio Oficial y Auténtico</strong>
                    </div>
                    <div style="font-family:var(--font-code);font-size:.9rem;color:var(--text-primary);background:var(--bg-main);padding:8px 12px;border-radius:6px;border:1px solid var(--border-color);">
                        https://<strong>www.mibanco.com</strong>/login
                    </div>
                    <small style="color:var(--text-muted);display:block;margin-top:6px;">
                        Pertenece al banco legítimo registrado. Letra por letra verificado.
                    </small>
                </div>
            </div>

            <div class="col-md-6">
                <div class="p-3" style="background:rgba(255,71,87,.05);border:1px solid rgba(255,71,87,.3);border-radius:10px;">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <i class="bi bi-x-circle-fill" style="color:var(--danger);font-size:1.2rem;"></i>
                        <strong style="color:var(--danger);font-size:.9rem;">Dominio Engañoso (Typosquatting)</strong>
                    </div>
                    <div style="font-family:var(--font-code);font-size:.9rem;color:var(--danger);background:var(--bg-main);padding:8px 12px;border-radius:6px;border:1px solid rgba(255,71,87,.3);">
                        https://<strong>www.mi-banco-seguro-login.net</strong>
                    </div>
                    <small style="color:var(--text-muted);display:block;margin-top:6px;">
                        ¡Tiene candado HTTPS! Pero el dominio es falso y está en manos de un estafador.
                    </small>
                </div>
            </div>
        </div>
    </div>

    <!-- Consejos Prácticos -->
    <div class="highlight-box" style="background:linear-gradient(135deg,rgba(0,210,211,.08),rgba(46,213,115,.06));border-color:rgba(0,210,211,.3);">
        <div class="d-flex align-items-start gap-3">
            <span style="font-size:2rem;line-height:1;">🎯</span>
            <div>
                <h4 style="color:var(--primary);margin-bottom:.4rem;font-size:1.05rem;">Buenas prácticas para tu navegación diaria:</h4>
                <ul style="margin:0;padding-left:1.2rem;font-size:.88rem;color:var(--text-secondary);line-height:1.6;">
                    <li><strong>Escribe tú mismo la dirección:</strong> En lugar de hacer clic en enlaces de correos o chats, tipea <code style="color:var(--primary);">www.mibanco.com</code> en tu navegador o guárdalo en marcadores/favoritos.</li>
                    <li><strong>Nunca pongas datos en HTTP:</strong> Si una página te pide usuario y contraseña y no tiene HTTPS, tus datos están expuestos en texto plano para cualquier intermediario.</li>
                    <li><strong>Atento a los caracteres parecidos:</strong> Fíjate bien si cambiaron una letra <code style="color:var(--warning);">o</code> por un cero <code style="color:var(--warning);">0</code>, o una <code style="color:var(--warning);">l</code> por un uno <code style="color:var(--warning);">1</code>.</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Navegación -->
    <div class="page-nav">
        <a href="/ciberseguridad/modulos/modulo5/wifi.php" class="btn-outline-cyber">
            <i class="bi bi-arrow-left"></i> Sección anterior
        </a>
        <a href="/ciberseguridad/modulos/modulo5/quiz.php" class="btn-quiz-nav">
            Ir al Cuestionario <i class="bi bi-pencil-square"></i>
        </a>
    </div>

</div>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
