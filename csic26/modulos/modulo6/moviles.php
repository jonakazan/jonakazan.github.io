<?php
$pageTitle    = '6.1 Seguridad en Dispositivos Móviles';
$activeModule = 'modulo6';
$activePage   = 'moviles';
require_once __DIR__ . '/../../includes/header.php';

$habitos = [
    [
        'num'    => '01',
        'titulo' => 'Pantalla de Bloqueo Segura',
        'icono'  => 'bi-shield-lock-fill',
        'color'  => '#00d2d3',
        'desc'   => 'Utiliza un <strong>PIN complejo</strong> (de 6 dígitos o más), biometría moderna (huella digital o reconocimiento facial) o un patrón difícil. Evita patrones predecibles que dibujan letras evidentes como la "L" o la "Z".',
        'alerta' => 'Un celular sin bloqueo es una puerta abierta total a tus fotos, chats, cuentas bancarias y correos de recuperación.'
    ],
    [
        'num'    => '02',
        'titulo' => 'Ocultar Vista Previa de Notificaciones',
        'icono'  => 'bi-eye-slash-fill',
        'color'  => '#ff4757',
        'desc'   => 'Configura tu teléfono para que <strong>oculte el contenido de los mensajes entrantes</strong> mientras la pantalla esté bloqueada. Si el texto completo es visible, cualquiera que tome tu equipo puede leer tus <strong>códigos de verificación SMS (2FA)</strong> del banco o de WhatsApp sin desbloquear el celular.',
        'alerta' => 'En Ajustes > Notificaciones > Pantalla de bloqueo: selecciona "Ocultar contenido confidencial".'
    ],
    [
        'num'    => '03',
        'titulo' => 'Descargar Solo de Tiendas Oficiales',
        'icono'  => 'bi-shop',
        'color'  => '#2ed573',
        'desc'   => 'Instala aplicaciones exclusivamente desde <strong>Google Play Store</strong> (Android) o <strong>Apple App Store</strong> (iOS). Descargar e instalar archivos externos con extensión <code style="color:var(--danger);">.APK</code> equivale a tomar un medicamento sin etiqueta que te regaló un desconocido en la calle: casi siempre contienen troyanos o spyware.',
        'alerta' => 'Desactiva siempre la opción "Permitir instalar aplicaciones de orígenes desconocidos".'
    ],
    [
        'num'    => '04',
        'titulo' => 'Revisar Permisos con Sentido Común',
        'icono'  => 'bi-ui-checks-grid',
        'color'  => '#ffa502',
        'desc'   => 'Pregúntate siempre: <em>¿Para qué necesita una aplicación de linterna o una simple calculadora acceder a mi lista de contactos, a mi micrófono o a mi ubicación por GPS?</em> Si una app exige permisos desproporcionados para su función, desconfía y no la instales.',
        'alerta' => 'Aplica el principio de mínimo privilegio: concede permisos solo mientras la app esté en uso.'
    ],
    [
        'num'    => '05',
        'titulo' => 'Activar "Buscar mi Dispositivo" y Cifrado',
        'icono'  => 'bi-geo-alt-fill',
        'color'  => '#a55eea',
        'desc'   => 'Tanto Android como iPhone ofrecen servicios de rastreo remoto oficial (<em>Encontrar mi dispositivo</em> o <em>Find My iPhone</em>). En caso de extravío o robo, te permiten ubicar el equipo en un mapa en tiempo real, hacerlo sonar, bloquearlo de inmediato y <strong>borrar remotamente todo su contenido</strong>.',
        'alerta' => 'Asegúrate de recordar o tener a buen recaudo la clave de tu cuenta de Google o Apple ID vinculada.'
    ]
];
?>

<main class="main-content">
<div class="fade-in-up" style="max-width:860px;">

    <div class="module-badge"><i class="bi bi-phone-vibrate"></i> Módulo 6</div>
    <h1>6.1 Seguridad en Dispositivos Móviles (El centro de tu vida digital)</h1>
    <p class="lead" style="color:var(--primary);font-weight:500;font-size:1.1rem;">
        Tu teléfono celular ya no es solo para hablar: es tu billetera, tus contactos, tu banco y tu oficina en el bolsillo.
    </p>

    <!-- Contexto inicial -->
    <div class="content-block">
        <div class="d-flex align-items-start gap-4 flex-wrap">
            <div style="font-size:3.5rem;line-height:1;flex-shrink:0;">📱</div>
            <div>
                <h2 style="font-size:1.3rem;margin-bottom:.6rem;color:var(--text-primary);">
                    Toda tu vida en un dispositivo de bolsillo
                </h2>
                <p>
                    Llevamos literalmente todo nuestro mundo personal y profesional dentro del smartphone.
                    Si alguien no autorizado accede a él o lo perdemos en la calle, el impacto va mucho más allá
                    de perder un objeto material: quedan expuestos nuestros chats privados, accesos a billeteras virtuales,
                    claves bancarias y fotografías familiares.
                </p>
                <p style="margin-bottom:0;">
                    Para blindar este dispositivo tan íntimo, conviene incorporar cinco hábitos de seguridad fundamentales:
                </p>
            </div>
        </div>
    </div>

    <!-- Los 5 Hábitos -->
    <div class="d-flex flex-column gap-3 mb-4">
        <?php foreach ($habitos as $h): ?>
        <div class="content-block" style="border-left:4px solid <?= $h['color'] ?>;padding:22px;margin:0;">
            <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-2">
                <div class="d-flex align-items-center gap-3">
                    <span style="font-size:1.1rem;font-weight:800;color:<?= $h['color'] ?>;font-family:var(--font-code);">
                        #<?= $h['num'] ?>
                    </span>
                    <div style="width:38px;height:38px;border-radius:10px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.1);display:flex;align-items:center;justify-content:center;color:<?= $h['color'] ?>;font-size:1.2rem;">
                        <i class="bi <?= $h['icono'] ?>"></i>
                    </div>
                    <h3 style="font-size:1.15rem;margin:0;color:var(--text-primary);">
                        <?= $h['titulo'] ?>
                    </h3>
                </div>
            </div>

            <p style="font-size:.9rem;color:var(--text-secondary);line-height:1.6;margin-bottom:.8rem;">
                <?= $h['desc'] ?>
            </p>

            <div style="padding:10px 14px;background:rgba(255,255,255,.03);border:1px solid rgba(255,255,255,.07);border-radius:8px;font-size:.83rem;color:var(--text-primary);display:flex;align-items:center;gap:8px;">
                <span style="color:<?= $h['color'] ?>;">💡</span>
                <span><?= $h['alerta'] ?></span>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- Tarjeta de Reflexión -->
    <div class="highlight-box" style="background:linear-gradient(135deg,rgba(0,210,211,.08),rgba(123,47,255,.06));border-color:rgba(0,210,211,.3);">
        <div class="d-flex align-items-start gap-3">
            <span style="font-size:2rem;line-height:1;">🛡️</span>
            <div>
                <h4 style="color:var(--primary);margin-bottom:.4rem;font-size:1.05rem;">
                    Regla de oro: El teléfono es una extensión de tu identidad
                </h4>
                <p style="margin:0;color:var(--text-secondary);font-size:.9rem;">
                    Nunca prestes tu teléfono desbloqueado a personas desconocidas en la calle con la excusa de "hacer una llamada de urgencia".
                    En cuestión de segundos podrían acceder a tus aplicaciones bancarias o reenviarse dinero a través de aplicaciones de cobro rápido.
                </p>
            </div>
        </div>
    </div>

    <!-- Navegación -->
    <div class="page-nav">
        <a href="/ciberseguridad/modulos/modulo5/quiz.php" class="btn-outline-cyber">
            <i class="bi bi-arrow-left"></i> Módulo anterior
        </a>
        <a href="/ciberseguridad/modulos/modulo6/almacenamiento.php" class="btn-cyber">
            Siguiente sección <i class="bi bi-arrow-right"></i>
        </a>
    </div>

</div>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
