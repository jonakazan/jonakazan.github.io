<?php
$pageTitle    = '8.3 Marco NIST CSF 2.0 y Plan Personal';
$activeModule = 'modulo8';
$activePage   = 'plan';
require_once __DIR__ . '/../../includes/header.php';

$funcionesNist = [
    [
        'funcion' => 'Gobernar e Identificar',
        'sub'     => 'Conocer tus activos digitales',
        'icono'   => 'bi-search',
        'color'   => '#00d2d3',
        'bg'      => 'rgba(0,210,211,.08)',
        'borde'   => 'rgba(0,210,211,.25)',
        'acciones'=> [
            'Hacer un inventario mental de tus cuentas críticas (correo principal, banco, redes).',
            'Saber exactamente qué dispositivos contienen fotos y documentos importantes.'
        ]
    ],
    [
        'funcion' => 'Proteger',
        'sub'     => 'Poner los cerrojos preventivos',
        'icono'   => 'bi-shield-shaded',
        'color'   => '#2ed573',
        'bg'      => 'rgba(46,213,115,.08)',
        'borde'   => 'rgba(46,213,115,.25)',
        'acciones'=> [
            'Aplicar las 5 Vacunas Digitales en todos tus dispositivos.',
            'Activar 2FA obligatorio en servicios clave y aplicar la Regla 3-2-1 de backups.'
        ]
    ],
    [
        'funcion' => 'Detectar',
        'sub'     => 'Estar atento a señales tempranas',
        'icono'   => 'bi-radar',
        'color'   => '#ffa502',
        'bg'      => 'rgba(255,165,2,.08)',
        'borde'   => 'rgba(255,165,2,.25)',
        'acciones'=> [
            'Revisar mensualmente los movimientos y resúmenes de tarjetas bancarias.',
            'Prestar atención a avisos de "Nuevo inicio de sesión detectado" en tu correo.'
        ]
    ],
    [
        'funcion' => 'Responder',
        'sub'     => 'Saber cómo actuar ante un incidente',
        'icono'   => 'bi-lightning-charge-fill',
        'color'   => '#ff4757',
        'bg'      => 'rgba(255,71,87,.08)',
        'borde'   => 'rgba(255,71,87,.25)',
        'acciones'=> [
            'Desconectar el equipo de Internet (apagar Wi-Fi) para aislar el contagio.',
            'Cambiar contraseñas desde otro dispositivo no comprometido.',
            'Avisar al banco para frenar débitos o transferencias sospechosas.',
            'Efectuar la denuncia formal ante la fiscalía o división de cibercrimen.'
        ]
    ],
    [
        'funcion' => 'Recuperar',
        'sub'     => 'Restaurar la normalidad',
        'icono'   => 'bi-arrow-clockwise',
        'color'   => '#a55eea',
        'bg'      => 'rgba(165,94,234,.08)',
        'borde'   => 'rgba(165,94,234,.25)',
        'acciones'=> [
            'Restaurar la información desde tus copias de seguridad limpias.',
            'Aprender de lo ocurrido para reforzar la defensa que falló.'
        ]
    ]
];
?>

<main class="main-content">
<div class="fade-in-up" style="max-width:860px;">

    <div class="module-badge"><i class="bi bi-clipboard2-check-fill"></i> Módulo 8</div>
    <h1>8.3 El Marco NIST CSF 2.0 y tu Plan de Ciberseguridad Personal</h1>
    <p class="lead" style="color:var(--primary);font-weight:500;font-size:1.1rem;">
        Un método profesional adaptado para gestionar tu seguridad digital personal sin complicaciones.
    </p>

    <!-- Introducción NIST CSF -->
    <div class="content-block">
        <div class="d-flex align-items-start gap-4 flex-wrap">
            <div style="font-size:3.5rem;line-height:1;flex-shrink:0;">🧭</div>
            <div>
                <h2 style="font-size:1.3rem;margin-bottom:.6rem;color:var(--text-primary);">
                    El estándar internacional aplicado a tu vida
                </h2>
                <p>
                    El <strong>NIST Cybersecurity Framework (CSF 2.0)</strong> es el marco de referencia más respetado
                    en el mundo para estructurar planes de ciberseguridad.
                </p>
                <p style="margin-bottom:0;color:var(--text-secondary);">
                    No hace falta ser una corporación multinacional para beneficiarse de este modelo: sus <strong>5 funciones continuas</strong>
                    te brindan una brújula clara para saber qué proteger, cómo vigilar y exactamente qué hacer si ocurre un problema:
                </p>
            </div>
        </div>
    </div>

    <!-- Las 5 Funciones Continuas -->
    <div class="d-flex flex-column gap-3 mb-4">
        <?php foreach ($funcionesNist as $f): ?>
        <div class="content-block" style="border-left:4px solid <?= $f['color'] ?>;padding:22px;margin:0;">
            <div class="d-flex align-items-center gap-3 mb-2">
                <div style="width:40px;height:40px;border-radius:10px;background:<?= $f['bg'] ?>;border:1px solid <?= $f['borde'] ?>;display:flex;align-items:center;justify-content:center;color:<?= $f['color'] ?>;font-size:1.2rem;flex-shrink:0;">
                    <i class="bi <?= $f['icono'] ?>"></i>
                </div>
                <div>
                    <h3 style="font-size:1.15rem;margin:0;color:var(--text-primary);"><?= $f['funcion'] ?></h3>
                    <span style="font-size:.8rem;color:<?= $f['color'] ?>;font-weight:600;"><?= $f['sub'] ?></span>
                </div>
            </div>
            <ul style="font-size:.88rem;color:var(--text-secondary);padding-left:1.3rem;margin:0;line-height:1.6;">
                <?php foreach ($f['acciones'] as $a): ?>
                <li><?= $a ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- Cierre del Curso -->
    <div class="highlight-box" style="background:linear-gradient(135deg,rgba(0,210,211,.1),rgba(46,213,115,.08));border-color:rgba(0,210,211,.35);padding:24px;">
        <div class="d-flex align-items-start gap-3">
            <span style="font-size:2.5rem;line-height:1;">🎓 ✨</span>
            <div>
                <h4 style="color:var(--primary);margin-bottom:.4rem;font-size:1.15rem;">
                    Conclusión: La ciberseguridad es tranquilidad, no miedo
                </h4>
                <p style="margin:0;color:var(--text-secondary);font-size:.92rem;line-height:1.65;">
                    El objetivo de este curso no ha sido infundir desconfianza ni paranoia, sino entregarte
                    <strong>criterio, herramientas y buenos hábitos</strong>. Al transitar el mundo digital con conciencia,
                    reemplazas la incertidumbre por seguridad y disfrutas de la tecnología con total libertad.
                </p>
            </div>
        </div>
    </div>

    <!-- Navegación -->
    <div class="page-nav">
        <a href="/ciberseguridad/modulos/modulo8/zerotrust.php" class="btn-outline-cyber">
            <i class="bi bi-arrow-left"></i> Sección anterior
        </a>
        <a href="/ciberseguridad/modulos/modulo8/quiz.php" class="btn-quiz-nav">
            Ir al Cuestionario Final <i class="bi bi-pencil-square"></i>
        </a>
    </div>

</div>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
