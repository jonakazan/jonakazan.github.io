<?php
$pageTitle    = '8.2 Zero Trust y Defensa en Profundidad';
$activeModule = 'modulo8';
$activePage   = 'zerotrust';
require_once __DIR__ . '/../../includes/header.php';

$capas = [
    [
        'num'   => '1',
        'titulo'=> 'PIN o Biometría de Pantalla',
        'icono' => 'bi-phone-fill',
        'color' => '#00d2d3',
        'desc'  => 'Impide que cualquier persona que tome físicamente tu teléfono pueda encenderlo y acceder a tus aplicaciones.'
    ],
    [
        'num'   => '2',
        'titulo'=> 'Cifrado Interno del Almacenamiento',
        'icono' => 'bi-hdd-network-fill',
        'color' => '#2ed573',
        'desc'  => 'Si conectan el teléfono apagado a una computadora para extraer la memoria, los datos son ilegibles.'
    ],
    [
        'num'   => '3',
        'titulo'=> 'Contraseña Única en App Bancaria',
        'icono' => 'bi-key-fill',
        'color' => '#ffa502',
        'desc'  => 'Aunque alguien tuviese el teléfono desbloqueado en la mano, no puede abrir el homebanking sin su clave.'
    ],
    [
        'num'   => '4',
        'titulo'=> 'Segundo Factor / Huella para Transferir',
        'icono' => 'bi-fingerprint',
        'color' => '#ff4757',
        'desc'  => 'Para mover dinero o autorizar pagos se exige confirmación biométrica o token de seguridad.'
    ],
    [
        'num'   => '5',
        'titulo'=> 'Copia de Seguridad en la Nube',
        'icono' => 'bi-cloud-check-fill',
        'color' => '#a55eea',
        'desc'  => 'Si te roban el equipo o cae al agua, tus fotos y contactos están a salvo y listos para restaurar.'
    ]
];
?>

<main class="main-content">
<div class="fade-in-up" style="max-width:860px;">

    <div class="module-badge"><i class="bi bi-layers-fill"></i> Módulo 8</div>
    <h1>8.2 Modelo Zero Trust (Confianza Cero) y Defensa en Profundidad</h1>
    <p class="lead" style="color:var(--primary);font-weight:500;font-size:1.1rem;">
        Dos principios estratégicos de la ciberseguridad moderna aplicables a tu vida cotidiana.
    </p>

    <!-- Parte A: Zero Trust -->
    <div class="content-block">
        <div class="d-flex align-items-center gap-2 mb-3">
            <span class="badge" style="background:rgba(0,210,211,.15);color:var(--primary);border:1px solid rgba(0,210,211,.3);font-size:.9rem;padding:6px 12px;">Parte A</span>
            <h2 style="margin:0;font-size:1.3rem;">Modelo Zero Trust ("Nunca confiar, siempre verificar")</h2>
        </div>
        <p>
            En los comienzos de la informática, la seguridad se pensaba como un <strong>castillo medieval con muralla</strong>:
            se creía que todo lo que estaba afuera era peligroso y todo lo que lograba entrar al castillo era seguro.
            Hoy en día sabemos que ese modelo es obsoleto y peligroso.
        </p>

        <div class="p-4 my-3" style="background:var(--bg-card);border:1px solid rgba(0,210,211,.3);border-radius:12px;">
            <div class="d-flex align-items-start gap-3">
                <span style="font-size:2.5rem;line-height:1;">✈️ 🛂</span>
                <div>
                    <h3 style="font-size:1.15rem;color:var(--primary);margin-bottom:.4rem;">
                        La analogía del Aeropuerto Internacional
                    </h3>
                    <p style="font-size:.9rem;color:var(--text-secondary);line-height:1.55;margin-bottom:.5rem;">
                        El paradigma <strong>Zero Trust (Confianza Cero)</strong> funciona como el control de un aeropuerto:
                        no importa quién seas ni si ya mostraste tu pasaporte en la entrada; para pasar a la zona de embarque,
                        para subir al avión o para ingresar a una sala VIP, <strong>te pedirán nuevamente verificar tu identidad y tu tarjeta de embarque</strong>.
                    </p>
                    <div style="background:var(--bg-main);padding:10px 14px;border-radius:8px;font-size:.85rem;color:var(--text-primary);">
                        🎯 <strong>En tu vida diaria:</strong> Nunca asumas que un correo, archivo adjunto o mensaje es legítimo solo porque viene del perfil de un amigo o colega. Si el mensaje es inusual, verifica antes de interactuar.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Parte B: Defensa en Profundidad -->
    <div class="content-block">
        <div class="d-flex align-items-center gap-2 mb-3">
            <span class="badge" style="background:rgba(46,213,115,.15);color:var(--success);border:1px solid rgba(46,213,115,.3);font-size:.9rem;padding:6px 12px;">Parte B</span>
            <h2 style="margin:0;font-size:1.3rem;">Defensa en Profundidad (Las capas de la cebolla)</h2>
        </div>
        <p>
            Consiste en proteger tus activos mediante <strong>capas de seguridad superpuestas</strong>.
            Si un atacante logra quebrar una barrera (por ejemplo, adivinar tu contraseña), no ganará acceso total:
            se topará de inmediato con la siguiente capa (el código 2FA o el bloqueo biométrico), frustrando el ataque.
        </p>

        <h3 style="font-size:1.05rem;color:var(--text-primary);margin-top:1.2rem;margin-bottom:.8rem;">
            🧅 Ejemplo: Las 5 capas de protección en tu teléfono móvil
        </h3>

        <div class="d-flex flex-column gap-2">
            <?php foreach ($capas as $c): ?>
            <div class="p-3" style="background:var(--bg-card);border:1px solid rgba(255,255,255,.07);border-left:4px solid <?= $c['color'] ?>;border-radius:8px;">
                <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-1">
                    <div class="d-flex align-items-center gap-2">
                        <span class="badge" style="background:rgba(255,255,255,.1);color:<?= $c['color'] ?>;font-family:var(--font-code);">Capa <?= $c['num'] ?></span>
                        <strong style="color:var(--text-primary);font-size:.95rem;"><?= $c['titulo'] ?></strong>
                    </div>
                    <i class="bi <?= $c['icono'] ?>" style="color:<?= $c['color'] ?>;font-size:1.1rem;"></i>
                </div>
                <p style="font-size:.84rem;color:var(--text-secondary);margin:0;line-height:1.5;">
                    <?= $c['desc'] ?>
                </p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Navegación -->
    <div class="page-nav">
        <a href="/ciberseguridad/modulos/modulo8/vacunas.php" class="btn-outline-cyber">
            <i class="bi bi-arrow-left"></i> Sección anterior
        </a>
        <a href="/ciberseguridad/modulos/modulo8/plan.php" class="btn-cyber">
            Siguiente sección <i class="bi bi-arrow-right"></i>
        </a>
    </div>

</div>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
