<?php
$pageTitle    = '5.1 Redes Wi-Fi: Router y Redes Públicas';
$activeModule = 'modulo5';
$activePage   = 'wifi';
require_once __DIR__ . '/../../includes/header.php';
?>

<main class="main-content">
<div class="fade-in-up" style="max-width:860px;">

    <div class="module-badge"><i class="bi bi-wifi"></i> Módulo 5</div>
    <h1>5.1 Redes Wi-Fi: Del Router de Casa a las Redes Públicas</h1>
    <p class="lead" style="color:var(--primary);font-weight:500;font-size:1.1rem;">
        Si Internet es la gran autopista digital, la red Wi-Fi es la calle de entrada que conecta tus dispositivos con esa autopista.
    </p>

    <!-- Concepto Central -->
    <div class="content-block">
        <div class="d-flex align-items-start gap-4 flex-wrap">
            <div style="font-size:3.5rem;line-height:1;flex-shrink:0;">📡</div>
            <div>
                <h2 style="font-size:1.3rem;margin-bottom:.6rem;color:var(--text-primary);">
                    Ondas invisibles que viajan por el aire
                </h2>
                <p>
                    Para conectarnos a Internet en el hogar, en el trabajo o en un café, usamos ondas de radio llamadas <strong>Wi-Fi</strong>.
                    A diferencia de un cable de red físico que solo conecta dos puntos cerrados, las señales de Wi-Fi viajan abiertas por el aire,
                    atravesando paredes e incluso llegando a la vereda o a las casas vecinas.
                </p>
                <p style="margin-bottom:0;">
                    Si no cuidamos esa puerta de entrada, cualquier persona con una antena o computadora cercana podría intentar
                    <strong>"escuchar"</strong> lo que transmites o infiltrarse en tus equipos.
                </p>
            </div>
        </div>
    </div>

    <!-- Parte A: Router de Casa -->
    <div class="content-block">
        <div class="d-flex align-items-center gap-2 mb-3">
            <span class="badge" style="background:rgba(0,210,211,.15);color:var(--primary);border:1px solid rgba(0,210,211,.3);font-size:.9rem;padding:6px 12px;">Parte A</span>
            <h2 style="margin:0;font-size:1.3rem;">Protegiendo la puerta de casa: El Router Wi-Fi</h2>
        </div>
        <p>
            El router es ese dispositivo con luces y antenas que instala el proveedor de Internet.
            Es, literalmente, la <strong>frontera defensiva</strong> de tu hogar digital.
            Para asegurarlo, es clave aplicar cuatro medidas fundamentales:
        </p>

        <div class="row g-3 mt-1">
            <!-- 1. Clave admin fábrica -->
            <div class="col-md-6">
                <div class="p-3 h-100" style="background:var(--bg-card);border:1px solid rgba(255,71,87,.25);border-left:4px solid var(--danger);border-radius:10px;">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <span style="font-size:1.3rem;">🔑</span>
                        <strong style="color:var(--danger);font-size:.95rem;">1. Cambiar la clave de admin de fábrica</strong>
                    </div>
                    <p style="font-size:.85rem;color:var(--text-secondary);margin:0;">
                        Los routers vienen con usuarios y contraseñas estándar (<code style="color:var(--text-primary);">admin/admin</code>, <code style="color:var(--text-primary);">user/1234</code>).
                        Los delincuentes conocen esos listados de memoria. Cambiar esta clave impide que cualquiera que se conecte tome el control del router.
                    </p>
                </div>
            </div>

            <!-- 2. Cifrado WPA2 / WPA3 -->
            <div class="col-md-6">
                <div class="p-3 h-100" style="background:var(--bg-card);border:1px solid rgba(46,213,115,.25);border-left:4px solid var(--success);border-radius:10px;">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <span style="font-size:1.3rem;">🛡️</span>
                        <strong style="color:var(--success);font-size:.95rem;">2. Cifrado moderno: WPA2 o WPA3</strong>
                    </div>
                    <p style="font-size:.85rem;color:var(--text-secondary);margin:0;">
                        Es el algoritmo que codifica las ondas de radio. Configura siempre <strong>WPA2-AES</strong> o el moderno <strong>WPA3</strong>.
                        Evita rotundamente sistemas viejos como <strong style="color:var(--danger);">WEP</strong> o WPA inicial, que se quiebran en minutos con herramientas gratuitas.
                    </p>
                </div>
            </div>

            <!-- 3. Desactivar WPS -->
            <div class="col-md-6">
                <div class="p-3 h-100" style="background:var(--bg-card);border:1px solid rgba(255,165,2,.25);border-left:4px solid var(--warning);border-radius:10px;">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <span style="font-size:1.3rem;">⚠️</span>
                        <strong style="color:var(--warning);font-size:.95rem;">3. Desactivar la función WPS</strong>
                    </div>
                    <p style="font-size:.85rem;color:var(--text-secondary);margin:0;">
                        El botón <em>Wi-Fi Protected Setup</em> promete conectar aparatos fácilmente sin escribir contraseñas.
                        Sin embargo, utiliza un <strong>PIN corto de 8 dígitos con fallas estructurales</strong> que permite a intrusos adivinar la clave por fuerza bruta en poco tiempo.
                    </p>
                </div>
            </div>

            <!-- 4. Red de Invitados -->
            <div class="col-md-6">
                <div class="p-3 h-100" style="background:var(--bg-card);border:1px solid rgba(0,210,211,.25);border-left:4px solid var(--primary);border-radius:10px;">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <span style="font-size:1.3rem;">🏡</span>
                        <strong style="color:var(--primary);font-size:.95rem;">4. Crear una "Red de Invitados" (Guest)</strong>
                    </div>
                    <p style="font-size:.85rem;color:var(--text-secondary);margin:0;">
                        Es como tener una casita para visitas en el jardín: permite que familiares, amigos o aparatos inteligentes
                        (Smart TVs, cámaras IoT, aspiradoras) naveguen por Internet <strong>aislados</strong> de las computadoras familiares donde guardas tus documentos sensibles.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Parte B: Wi-Fi Públicas -->
    <div class="content-block">
        <div class="d-flex align-items-center gap-2 mb-3">
            <span class="badge" style="background:rgba(255,71,87,.15);color:var(--danger);border:1px solid rgba(255,71,87,.3);font-size:.9rem;padding:6px 12px;">Parte B</span>
            <h2 style="margin:0;font-size:1.3rem;">El peligro de las Redes Wi-Fi Públicas y Abiertas</h2>
        </div>
        <p>
            Conectarse a la Wi-Fi gratuita de un aeropuerto, plaza o café parece cómodo, pero equivale a
            <strong>mantener una conversación confidencial a los gritos en medio de un colectivo lleno de desconocidos</strong>.
            Cualquiera cerca puede capturar lo que viaja por el aire:
        </p>

        <div class="row g-3 mb-4">
            <!-- Interceptación -->
            <div class="col-md-6">
                <div class="p-3 h-100" style="background:rgba(255,71,87,.05);border:1px solid rgba(255,71,87,.2);border-radius:10px;">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <i class="bi bi-ear-fill" style="color:var(--danger);font-size:1.3rem;"></i>
                        <strong style="color:var(--danger);">El "Chismoso" de la red (Sniffing)</strong>
                    </div>
                    <p style="font-size:.86rem;color:var(--text-secondary);margin:0;">
                        En una red abierta sin cifrado individual, cualquier atacante conectado a la misma red puede usar analizadores
                        de paquetes gratuitos para espiar el tráfico y capturar cookies de sesión, contraseñas no protegidas o chats.
                    </p>
                </div>
            </div>

            <!-- Gemelo Malvado -->
            <div class="col-md-6">
                <div class="p-3 h-100" style="background:rgba(255,165,2,.05);border:1px solid rgba(255,165,2,.2);border-radius:10px;">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <i class="bi bi-people-fill" style="color:var(--warning);font-size:1.3rem;"></i>
                        <strong style="color:var(--warning);">El Gemelo Malvado (Evil Twin)</strong>
                    </div>
                    <p style="font-size:.86rem;color:var(--text-secondary);margin:0;">
                        El atacante enciende su propio punto de acceso Wi-Fi portátil y le da un nombre idéntico al local:
                        <code style="color:var(--text-primary);">"Wi-Fi_Gratis_Cafeteria"</code>. Al conectarte engañado,
                        todo tu tráfico de datos atraviesa la máquina del estafador (Ataque <em>Man-in-the-Middle</em>).
                    </p>
                </div>
            </div>
        </div>

        <!-- Escudo VPN -->
        <div style="background:linear-gradient(135deg,rgba(46,213,115,.08),rgba(0,210,211,.08));border:1px solid rgba(46,213,115,.3);border-radius:12px;padding:20px;">
            <div class="d-flex align-items-start gap-3">
                <div style="font-size:2.4rem;line-height:1;">🛡️</div>
                <div>
                    <h3 style="font-size:1.15rem;color:var(--success);margin-bottom:.4rem;">
                        El escudo de la VPN (Red Privada Virtual)
                    </h3>
                    <p style="font-size:.88rem;color:var(--text-secondary);margin-bottom:.6rem;">
                        Si no tienes otra alternativa y debes usar una Wi-Fi pública para trabajar, una <strong>VPN</strong> es tu salvavidas:
                        crea un <strong>túnel privado e invisible</strong> alrededor de tu conexión.
                    </p>
                    <p style="font-size:.85rem;color:var(--text-primary);margin:0;">
                        📦 Todo lo que envías o recibes viaja empaquetado y fuertemente cifrado hasta el servidor seguro de la VPN.
                        Para el "chismoso" o el "gemelo malvado", tus datos serán solo ruido incomprensible e indescifrable.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Regla de oro para Wi-Fi Públicas -->
    <div class="highlight-box" style="background:linear-gradient(135deg,rgba(255,71,87,.08),rgba(255,165,2,.06));border-color:rgba(255,71,87,.3);">
        <div class="d-flex align-items-start gap-3">
            <span style="font-size:1.8rem;line-height:1;">🚫</span>
            <div>
                <h4 style="color:var(--danger);margin-bottom:.3rem;font-size:1.05rem;">Regla preventiva fundamental:</h4>
                <p style="margin:0;color:var(--text-secondary);font-size:.9rem;">
                    <strong>Nunca ingreses a tu banco, homebanking ni ingreses datos de tarjetas de crédito o credenciales críticas</strong>
                    mientras estés conectado a una red Wi-Fi pública abierta. Si necesitas hacer una operación bancaria urgente en la calle,
                    desactiva el Wi-Fi y utiliza los <strong>datos móviles (4G/5G)</strong> de tu línea celular, que son muchísimo más seguros.
                </p>
            </div>
        </div>
    </div>

    <!-- Navegación -->
    <div class="page-nav">
        <a href="/ciberseguridad/modulos/modulo4/quiz.php" class="btn-outline-cyber">
            <i class="bi bi-arrow-left"></i> Módulo anterior
        </a>
        <a href="/ciberseguridad/modulos/modulo5/navegacion.php" class="btn-cyber">
            Siguiente sección <i class="bi bi-arrow-right"></i>
        </a>
    </div>

</div>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
