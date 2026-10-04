<?php
$pageTitle    = '8.1 Las 5 Vacunas Digitales';
$activeModule = 'modulo8';
$activePage   = 'vacunas';
require_once __DIR__ . '/../../includes/header.php';

$vacunas = [
    [
        'num'    => '01',
        'titulo' => 'La Pausa de 5 Segundos (Freno emocional)',
        'icono'  => 'bi-hourglass-split',
        'color'  => '#ff4757',
        'bg'     => 'rgba(255,71,87,.08)',
        'borde'  => 'rgba(255,71,87,.25)',
        'desc'   => 'Ante cualquier mensaje, correo o llamada que te genere <strong>urgencia, miedo, entusiasmo o prisa</strong>, detente de inmediato. Cuenta mentalmente hasta cinco antes de hacer clic, dictar un código o realizar una transferencia. Romper el impulso emocional es desarmar la trampa del estafador.'
    ],
    [
        'num'    => '02',
        'titulo' => 'Verificación Independiente (Cambiar de canal)',
        'icono'  => 'bi-telephone-outbound-fill',
        'color'  => '#ffa502',
        'bg'     => 'rgba(255,165,2,.08)',
        'borde'  => 'rgba(255,165,2,.25)',
        'desc'   => 'Si te contactan diciendo que son de tu banco, una tarjeta, soporte técnico o un familiar pidiendo plata urgente por WhatsApp, <strong>nunca respondas por esa misma vía</strong>. Cierra el mensaje y llama tú mismo al número oficial o comunícate por otro canal independiente para confirmar.'
    ],
    [
        'num'    => '03',
        'titulo' => 'Contraseñas Únicas + Gestor',
        'icono'  => 'bi-key-fill',
        'color'  => '#00d2d3',
        'bg'     => 'rgba(0,210,211,.08)',
        'borde'  => 'rgba(0,210,211,.25)',
        'desc'   => 'Usa frases de contraseña (<em>passphrases</em>) largas, <strong>nunca repitas la misma clave</strong> en servicios distintos y apóyate en un gestor de contraseñas confiable (Bitwarden, 1Password, etc.) para tener combinaciones robustas sin tener que memorizarlas.'
    ],
    [
        'num'    => '04',
        'titulo' => 'Doble Factor de Autenticación (2FA)',
        'icono'  => 'bi-shield-fill-check',
        'color'  => '#2ed573',
        'bg'     => 'rgba(46,213,115,.08)',
        'borde'  => 'rgba(46,213,115,.25)',
        'desc'   => 'Activa siempre el segundo cerrojo en tus cuentas críticas: correo electrónico principal, WhatsApp, redes sociales y aplicaciones bancarias. Aunque un atacante adivine tu contraseña, no podrá entrar sin el código temporal generado en tu teléfono.'
    ],
    [
        'num'    => '05',
        'titulo' => 'Actualizaciones al Día',
        'icono'  => 'bi-arrow-repeat',
        'color'  => '#a55eea',
        'bg'     => 'rgba(165,94,234,.08)',
        'borde'  => 'rgba(165,94,234,.25)',
        'desc'   => 'Mantén el sistema operativo, tus aplicaciones y el navegador web siempre al día. Las actualizaciones no son un capricho estético: <strong>son parches de seguridad críticos</strong> que sellan las fallas por donde los atacantes introducen malware.'
    ]
];
?>

<main class="main-content">
<div class="fade-in-up" style="max-width:860px;">

    <div class="module-badge"><i class="bi bi-shield-check"></i> Módulo 8</div>
    <h1>8.1 Las 5 "Vacunas Digitales" (El factor humano como tu mejor escudo)</h1>
    <p class="lead" style="color:var(--primary);font-weight:500;font-size:1.1rem;">
        La tecnología evoluciona a diario, pero la conciencia y los hábitos de las personas siguen siendo la barrera más sólida.
    </p>

    <!-- Concepto Central -->
    <div class="content-block">
        <div class="d-flex align-items-start gap-4 flex-wrap">
            <div style="font-size:3.5rem;line-height:1;flex-shrink:0;">💉 🛡️</div>
            <div>
                <h2 style="font-size:1.3rem;margin-bottom:.6rem;color:var(--text-primary);">
                    Inmunidad digital en la rutina cotidiana
                </h2>
                <p>
                    No podemos evitar que en Internet existan delincuentes ni que circulen millones de correos engañosos,
                    pero sí podemos <strong>"vacunarnos"</strong> para que esas amenazas reboten sin hacernos daño.
                </p>
                <p style="margin-bottom:0;">
                    La experiencia global demuestra que incorporar estas <strong>5 Vacunas Digitales</strong> en tu vida diaria
                    neutraliza más del <strong>99% de los ciberataques comunes</strong>:
                </p>
            </div>
        </div>
    </div>

    <!-- Lista de Vacunas -->
    <div class="d-flex flex-column gap-3 mb-4">
        <?php foreach ($vacunas as $v): ?>
        <div class="content-block" style="border-left:4px solid <?= $v['color'] ?>;padding:22px;margin:0;">
            <div class="d-flex align-items-center gap-3 mb-2">
                <span style="font-size:1.15rem;font-weight:800;color:<?= $v['color'] ?>;font-family:var(--font-code);">
                    #<?= $v['num'] ?>
                </span>
                <div style="width:40px;height:40px;border-radius:10px;background:<?= $v['bg'] ?>;border:1px solid <?= $v['borde'] ?>;display:flex;align-items:center;justify-content:center;color:<?= $v['color'] ?>;font-size:1.2rem;flex-shrink:0;">
                    <i class="bi <?= $v['icono'] ?>"></i>
                </div>
                <h3 style="font-size:1.15rem;margin:0;color:var(--text-primary);">
                    <?= $v['titulo'] ?>
                </h3>
            </div>
            <p style="font-size:.9rem;color:var(--text-secondary);line-height:1.6;margin:0;">
                <?= $v['desc'] ?>
            </p>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- Navegación -->
    <div class="page-nav">
        <a href="/ciberseguridad/modulos/modulo7/quiz.php" class="btn-outline-cyber">
            <i class="bi bi-arrow-left"></i> Módulo anterior
        </a>
        <a href="/ciberseguridad/modulos/modulo8/zerotrust.php" class="btn-cyber">
            Siguiente sección <i class="bi bi-arrow-right"></i>
        </a>
    </div>

</div>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
