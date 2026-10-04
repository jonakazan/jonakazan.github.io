<?php
$pageTitle    = '4.3 Perfiles de Actores de Amenaza';
$activeModule = 'modulo4';
$activePage   = 'actores';
require_once __DIR__ . '/../../includes/header.php';

$actores = [
    [
        'tipo'      => 'Hacker Ético',
        'alias'     => 'Sombrero Blanco (White Hat)',
        'icono'     => 'bi-shield-fill-check',
        'color'     => '#2ed573',
        'bg'        => 'rgba(46,213,115,.08)',
        'borde'     => 'rgba(46,213,115,.3)',
        'intencion' => 'Defensiva, legal y autorizada',
        'descripcion'=> 'Es un profesional de la seguridad informática que utiliza sus conocimientos técnicos avanzados para buscar fallas y vulnerabilidades en sistemas, siempre con autorización previa y formal de los dueños, para corregirlas antes de que sean aprovechadas por criminales.'
    ],
    [
        'tipo'      => 'Cracker / Ciberdelincuente',
        'alias'     => 'Sombrero Negro (Black Hat)',
        'icono'     => 'bi-incognito',
        'color'     => '#ff4757',
        'bg'        => 'rgba(255,71,87,.08)',
        'borde'     => 'rgba(255,71,87,.3)',
        'intencion' => 'Ilícita, lucrativa o destructiva',
        'descripcion'=> 'Es la persona que irrumpe en sistemas ajenos o engaña a usuarios con intenciones maliciosas: robar dinero, secuestrar información mediante ransomware, comerciar bases de datos privadas en la Dark Web, extorsionar o provocar daños severos.'
    ],
    [
        'tipo'      => 'Hacktivista',
        'alias'     => 'Hacking con causa política o social',
        'icono'     => 'bi-megaphone-fill',
        'color'     => '#ffa502',
        'bg'        => 'rgba(255,165,2,.08)',
        'borde'     => 'rgba(255,165,2,.3)',
        'intencion' => 'Ideológica, política o de protesta',
        'descripcion'=> 'Atacante o colectivo que utiliza técnicas informáticas (como saturar sitios web gubernamentales con ataques DDoS o alterar páginas institucionales con mensajes de protesta) para visibilizar reclamos políticos, ambientales o sociales.'
    ],
    [
        'tipo'      => 'Ciberterroristas y Actores Estatales',
        'alias'     => 'Amenazas Persistentes Avanzadas (APT / Nation-State)',
        'icono'     => 'bi-radioactive',
        'color'     => '#a55eea',
        'bg'        => 'rgba(165,94,234,.08)',
        'borde'     => 'rgba(165,94,234,.3)',
        'intencion' => 'Ciberguerra, sabotaje y espionaje internacional',
        'descripcion'=> 'Equipos multidisciplinarios con presupuestos millonarios respaldados por gobiernos u organizaciones criminales transnacionales. Se enfocan en el espionaje de secretos de estado y el sabotaje de infraestructuras críticas (redes eléctricas, plantas de agua potable o sistemas de transporte).'
    ]
];
?>

<main class="main-content">
<div class="fade-in-up" style="max-width:860px;">

    <div class="module-badge"><i class="bi bi-person-bounding-box"></i> Módulo 4</div>
    <h1>4.3 Perfiles de Actores de Amenaza y Ciberdelincuentes</h1>
    <p class="lead" style="color:var(--primary);font-weight:500;font-size:1.1rem;">
        En el mundo digital, no todos los que conocen a fondo la tecnología tienen los mismos objetivos ni los mismos límites éticos.
    </p>

    <div class="content-block">
        <p>
            Popularmente se suele llamar "hacker" a cualquier persona que comete un delito informático.
            Sin embargo, en el ámbito profesional de la ciberseguridad es fundamental <strong>diferenciar los distintos perfiles</strong>
            según su ética, intenciones y legalidad:
        </p>
    </div>

    <!-- Tarjetas de Actores -->
    <div class="row g-3 mb-4">
        <?php foreach ($actores as $act): ?>
        <div class="col-md-6">
            <div class="p-3 h-100" style="background:var(--bg-card);border:1px solid <?= $act['borde'] ?>;border-radius:12px;display:flex;flex-direction:column;justify-content:space-between;">
                <div>
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div style="width:44px;height:44px;border-radius:10px;background:<?= $act['bg'] ?>;border:1px solid <?= $act['borde'] ?>;display:flex;align-items:center;justify-content:center;font-size:1.3rem;color:<?= $act['color'] ?>;flex-shrink:0;">
                            <i class="bi <?= $act['icono'] ?>"></i>
                        </div>
                        <div>
                            <h3 style="font-size:1.05rem;margin:0;color:var(--text-primary);"><?= $act['tipo'] ?></h3>
                            <span style="font-size:.8rem;color:<?= $act['color'] ?>;font-weight:600;"><?= $act['alias'] ?></span>
                        </div>
                    </div>
                    <p style="font-size:.88rem;color:var(--text-secondary);line-height:1.55;margin-bottom:1rem;">
                        <?= $act['descripcion'] ?>
                    </p>
                </div>
                <div style="padding:6px 10px;background:<?= $act['bg'] ?>;border-radius:6px;font-size:.78rem;color:<?= $act['color'] ?>;font-weight:600;">
                    🎯 Motivación: <?= $act['intencion'] ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- Comparativa Ética: Hacker vs Cracker -->
    <div class="content-block">
        <h3 class="mb-3" style="font-size:1.15rem;">Diferencia clave: ¿Hacker Ético o Cracker?</h3>
        <div class="row g-3">
            <div class="col-md-6">
                <div class="p-3" style="background:rgba(46,213,115,.06);border:1px solid rgba(46,213,115,.25);border-radius:10px;">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <i class="bi bi-patch-check-fill" style="color:var(--success);font-size:1.2rem;"></i>
                        <strong style="color:var(--success);">Hacker Ético (White Hat)</strong>
                    </div>
                    <ul style="font-size:.85rem;color:var(--text-secondary);margin:0;padding-left:1.2rem;line-height:1.6;">
                        <li>Tiene <strong>autorización explícita</strong> del propietario del sistema.</li>
                        <li>Reporta las vulnerabilidades de manera confidencial para que sean corregidas.</li>
                        <li>Su objetivo es proteger la confidencialidad, integridad y disponibilidad.</li>
                        <li>Trabaja dentro del marco de la ley.</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-3" style="background:rgba(255,71,87,.06);border:1px solid rgba(255,71,87,.25);border-radius:10px;">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <i class="bi bi-x-octagon-fill" style="color:var(--danger);font-size:1.2rem;"></i>
                        <strong style="color:var(--danger);">Cracker / Delincuente (Black Hat)</strong>
                    </div>
                    <ul style="font-size:.85rem;color:var(--text-secondary);margin:0;padding-left:1.2rem;line-height:1.6;">
                        <li><strong>No tiene autorización</strong> para ingresar a los sistemas.</li>
                        <li>Explota las fallas para beneficio económico propio o venta ilegal de datos.</li>
                        <li>Su accionar genera pérdidas financieras, robo de identidad y extorsión.</li>
                        <li>Constituye un delito penal en todas las legislaciones modernas.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Regla de Oro: Ruptura de Canal -->
    <div class="highlight-box" style="background:linear-gradient(135deg,rgba(0,210,211,.08),rgba(46,213,115,.06));border-color:rgba(0,210,211,.3);">
        <div class="d-flex align-items-start gap-3">
            <span style="font-size:2rem;line-height:1;">🗝️</span>
            <div>
                <h4 style="color:var(--primary);margin-bottom:.4rem;font-size:1.1rem;">
                    La Regla de Oro frente a engaños: "Ruptura de Canal"
                </h4>
                <p style="font-size:.9rem;color:var(--text-secondary);margin-bottom:.5rem;">
                    Ante cualquier duda sobre la autenticidad de un mensaje, correo o llamada bancaria:
                </p>
                <div style="background:var(--bg-main);border:1px solid var(--border-color);border-radius:8px;padding:12px;font-size:.88rem;color:var(--text-primary);">
                    <strong>1. Corta o cierra el mensaje de inmediato.</strong> No contestes ni sigas enlaces del mismo mensaje.<br>
                    <strong>2. Haz una pausa y busca una vía independiente:</strong> Comunicate tú mismo utilizando exclusivamente el número de atención oficial impreso al dorso de tu tarjeta bancaria o en el portal oficial que tú mismo escribas en la barra de direcciones del navegador.
                </div>
            </div>
        </div>
    </div>

    <!-- Navegación -->
    <div class="page-nav">
        <a href="/ciberseguridad/modulos/modulo4/variantes.php" class="btn-outline-cyber">
            <i class="bi bi-arrow-left"></i> Sección anterior
        </a>
        <a href="/ciberseguridad/modulos/modulo4/quiz.php" class="btn-quiz-nav">
            Ir al Cuestionario <i class="bi bi-pencil-square"></i>
        </a>
    </div>

</div>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
