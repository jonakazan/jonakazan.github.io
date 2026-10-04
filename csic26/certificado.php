<?php
// ============================================================
// CERTIFICADO DE FINALIZACIÓN — certificado.php
// ============================================================
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/auth.php';
require_once __DIR__ . '/includes/progreso.php';

requireLogin();

$email  = getEmailUsuario();
$nombre = getNombreUsuario();

// Verificar que el certificado fue habilitado por el admin
$certDir  = __DIR__ . '/data/certificados/';
$certFile = $certDir . preg_replace('/[^a-zA-Z0-9_\-]/', '_', $email) . '.json';

if (!file_exists($certFile)) {
    header('Location: /ciberseguridad/dashboard.php?msg=cert_no_disponible');
    exit;
}

$certData = json_decode(file_get_contents($certFile), true);

if (!($certData['habilitado'] ?? false)) {
    header('Location: /ciberseguridad/dashboard.php?msg=cert_no_disponible');
    exit;
}

// Datos del certificado
$progreso        = cargarProgreso($email);
$fechaEmision    = $certData['fecha_emision'] ?? date('Y-m-d');
$nroCertificado  = $certData['numero'] ?? 'CERT-0001';

// Formatear fecha en español
$meses = ['enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre'];
$fParts = explode('-', $fechaEmision);
$fechaEmisionFmt = intval($fParts[2]) . ' de ' . ($meses[intval($fParts[1]) - 1] ?? '') . ' de ' . $fParts[0];

// Contar evaluaciones aprobadas
$aprobados = 0;
$totalMods = count(MODULOS);
foreach (MODULOS as $modKey => $_) {
    $q = $progreso['quiz_resultados'][$modKey] ?? null;
    if ($q && ($q['porcentaje'] ?? 0) >= 60) $aprobados++;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificado — <?= htmlspecialchars(CURSO_NOMBRE) ?></title>
    <link rel="icon" type="image/svg+xml" href="/ciberseguridad/assets/img/favicon.svg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/ciberseguridad/assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Pinyon+Script&display=swap" rel="stylesheet">
    <style>
    .cert-actions {
        display: flex;
        gap: 1rem;
        justify-content: center;
        padding: 1.5rem 1rem;
        background: var(--bg-dark);
        border-bottom: 1px solid var(--border);
    }
    .cert-wrapper {
        background: #e8e0d0;
        min-height: 100vh;
        padding: 3rem 1rem 4rem;
    }
    /* ── CERTIFICADO ── */
    .certificate {
        width: 980px;
        max-width: 98vw;
        margin: 0 auto;
        background: #fff;
        position: relative;
        overflow: hidden;
        box-shadow: 0 24px 80px rgba(0,0,0,0.5), 0 0 0 1px rgba(201,162,39,0.3);
    }
    .cert-outer-border {
        padding: 16px;
        background: linear-gradient(135deg, #100620 0%, #0d1117 50%, #100620 100%);
    }
    .cert-inner-border {
        padding: 4px;
        background: linear-gradient(135deg, #c9a227 0%, #f0d070 25%, #c9a227 50%, #f0d070 75%, #c9a227 100%);
    }
    .cert-body {
        background: #fffdf6;
        padding: 56px 72px 48px;
        position: relative;
        overflow: hidden;
    }
    /* Fondo ornamental */
    .cert-bg-pattern {
        position: absolute;
        inset: 0;
        background-image:
            radial-gradient(circle at 10% 10%, rgba(201,162,39,0.06) 0%, transparent 40%),
            radial-gradient(circle at 90% 90%, rgba(201,162,39,0.06) 0%, transparent 40%),
            radial-gradient(circle at 50% 50%, rgba(26,10,46,0.04) 0%, transparent 70%);
        pointer-events: none;
    }
    .cert-watermark {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 200px;
        opacity: 0.03;
        pointer-events: none;
        z-index: 0;
        line-height: 1;
    }
    /* Esquinas */
    .cert-corner {
        position: absolute;
        width: 80px;
        height: 80px;
    }
    .cert-corner.tl { top: 16px; left: 16px; border-top: 2.5px solid #c9a227; border-left: 2.5px solid #c9a227; }
    .cert-corner.tr { top: 16px; right: 16px; border-top: 2.5px solid #c9a227; border-right: 2.5px solid #c9a227; }
    .cert-corner.bl { bottom: 16px; left: 16px; border-bottom: 2.5px solid #c9a227; border-left: 2.5px solid #c9a227; }
    .cert-corner.br { bottom: 16px; right: 16px; border-bottom: 2.5px solid #c9a227; border-right: 2.5px solid #c9a227; }
    /* Contenido */
    .cert-content { position: relative; z-index: 1; text-align: center; }
    .cert-header-row {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 16px;
        margin-bottom: 8px;
    }
    .cert-logo-icon { font-size: 52px; line-height: 1; }
    .cert-institution {
        text-align: left;
        font-family: 'Playfair Display', serif;
        font-size: 0.95rem;
        font-weight: 700;
        color: #1a0a2e;
        letter-spacing: 0.14em;
        text-transform: uppercase;
        line-height: 1.35;
    }
    .cert-institution small {
        display: block;
        font-size: 0.65rem;
        font-weight: 400;
        letter-spacing: 0.1em;
        color: #7a6040;
        font-family: 'Inter', sans-serif;
    }
    .cert-divider {
        height: 2px;
        background: linear-gradient(to right, transparent, #c9a227, #f0d070, #c9a227, transparent);
        margin: 14px auto;
        width: 65%;
        border: none;
    }
    .cert-label {
        font-family: 'Inter', sans-serif;
        font-size: 0.7rem;
        letter-spacing: 0.35em;
        text-transform: uppercase;
        color: #9a8060;
        margin-bottom: 4px;
    }
    .cert-main-title {
        font-family: 'Playfair Display', serif;
        font-size: 2.8rem;
        font-weight: 700;
        color: #1a0a2e;
        letter-spacing: 0.04em;
        line-height: 1;
        margin-bottom: 20px;
    }
    .cert-presented {
        font-family: 'Inter', sans-serif;
        font-size: 0.78rem;
        letter-spacing: 0.2em;
        text-transform: uppercase;
        color: #9a8060;
        margin-bottom: 6px;
    }
    .cert-name {
        font-family: 'Pinyon Script', cursive;
        font-size: 4.2rem;
        color: #1a0a2e;
        line-height: 1.1;
        margin-bottom: 0;
    }
    .cert-name-line {
        height: 1px;
        background: linear-gradient(to right, transparent, rgba(201,162,39,0.7), transparent);
        width: 55%;
        margin: 4px auto 20px;
    }
    .cert-description {
        font-family: 'Inter', sans-serif;
        font-size: 0.88rem;
        color: #4a3a20;
        line-height: 1.75;
        max-width: 660px;
        margin: 0 auto 18px;
    }
    .cert-badge-row {
        display: flex;
        justify-content: center;
        gap: 12px;
        margin-bottom: 28px;
        flex-wrap: wrap;
    }
    .cert-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: linear-gradient(135deg, #1a0a2e, #2a1050);
        color: #f0d070;
        padding: 5px 16px;
        border-radius: 50px;
        font-size: 0.72rem;
        font-weight: 600;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        border: 1px solid rgba(201,162,39,0.35);
        font-family: 'Inter', sans-serif;
    }
    /* Footer del certificado */
    .cert-footer {
        display: grid;
        grid-template-columns: 1fr 130px 1fr;
        align-items: end;
        gap: 16px;
        margin-top: 12px;
    }
    .cert-sig-block { text-align: center; }
    .cert-sig-cursive {
        font-family: 'Pinyon Script', cursive;
        font-size: 2rem;
        color: #1a0a2e;
        line-height: 1.1;
        margin-bottom: 4px;
    }
    .cert-sig-line {
        border-top: 1.5px solid rgba(26,10,46,0.6);
        padding-top: 5px;
        font-family: 'Inter', sans-serif;
        font-size: 0.68rem;
        color: #3a2e1e;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.07em;
    }
    .cert-sig-role {
        font-family: 'Inter', sans-serif;
        font-size: 0.6rem;
        color: #9a8060;
        letter-spacing: 0.06em;
        margin-top: 2px;
    }
    /* Sello */
    .cert-seal-wrap { text-align: center; }
    .cert-seal-circle {
        width: 118px;
        height: 118px;
        border-radius: 50%;
        border: 3px solid #c9a227;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
        background: radial-gradient(circle, #fffdf6 40%, #f5e9c0 100%);
        box-shadow: 0 0 0 5px rgba(201,162,39,0.12), inset 0 0 10px rgba(201,162,39,0.1);
        position: relative;
    }
    .cert-seal-circle::before {
        content: '';
        position: absolute;
        inset: 7px;
        border-radius: 50%;
        border: 1px dashed rgba(201,162,39,0.5);
    }
    .cert-seal-icon { font-size: 34px; line-height: 1; }
    .cert-seal-text {
        font-size: 0.46rem;
        font-weight: 700;
        letter-spacing: 0.06em;
        text-transform: uppercase;
        color: #8a6f2e;
        text-align: center;
        line-height: 1.4;
        font-family: 'Inter', sans-serif;
    }
    /* Número */
    .cert-meta-row {
        display: flex;
        justify-content: space-between;
        margin-top: 16px;
        padding-top: 12px;
        border-top: 1px dashed rgba(201,162,39,0.4);
        font-family: 'Inter', sans-serif;
        font-size: 0.6rem;
        color: #9a8060;
        letter-spacing: 0.07em;
    }
    .cert-meta-row strong { color: #5a4a2e; }
    /* Impresión */
    @media print {
        body, html { background: #fff !important; }
        body::before, body::after { display: none !important; }
        .cert-actions { display: none !important; }
        .cert-wrapper { background: #e8e0d0 !important; padding: 0 !important; }
        .certificate { box-shadow: none !important; width: 100% !important; max-width: 100% !important; }
        @page { size: A4 landscape; margin: 8mm; }
    }
    </style>
</head>
<body style="background:var(--bg-deep);">

<!-- Acciones -->
<div class="cert-actions no-print">
    <a href="/ciberseguridad/dashboard.php" class="btn-outline-cyber" style="padding:9px 18px;font-size:.86rem;">
        <i class="bi bi-arrow-left"></i> Volver al curso
    </a>
    <button onclick="window.print()" class="btn-cyber" style="padding:9px 22px;font-size:.86rem;">
        <i class="bi bi-printer-fill"></i> Imprimir / Guardar PDF
    </button>
    <a href="/ciberseguridad/informe.php" class="btn-outline-cyber" style="padding:9px 18px;font-size:.86rem;">
        <i class="bi bi-file-earmark-text"></i> Mi informe
    </a>
</div>

<div class="cert-wrapper">
<div class="certificate">
<div class="cert-outer-border">
<div class="cert-inner-border">
<div class="cert-body">

    <div class="cert-bg-pattern"></div>
    <div class="cert-watermark">🔐</div>
    <div class="cert-corner tl"></div>
    <div class="cert-corner tr"></div>
    <div class="cert-corner bl"></div>
    <div class="cert-corner br"></div>

    <div class="cert-content">

        <!-- Institución -->
        <div class="cert-header-row">
            <div class="cert-institution">
                <?= htmlspecialchars(CURSO_NOMBRE) ?>
                <small><?= htmlspecialchars(CURSO_PROFESOR) ?> &bull; Año <?= date('Y') ?></small>
            </div>
        </div>

        <hr class="cert-divider">

        <p class="cert-label">Constancia Oficial</p>
        <h1 class="cert-main-title">Certificado de Finalización</h1>

        <p class="cert-presented">Se otorga el presente certificado a</p>
        <div class="cert-name"><?= htmlspecialchars($nombre) ?></div>
        <div class="cert-name-line"></div>

        <p class="cert-description">
            Por haber completado satisfactoriamente el programa de
            <strong>Introducción a la Seguridad Informática y Ciberseguridad</strong>,<br>
            demostrando comprensión de los fundamentos de la seguridad informática,
            protección de datos personales, identificación de amenazas digitales,<br>
            buenas prácticas en el entorno digital y concientización en ciberseguridad.
        </p>

        <div class="cert-badge-row">
            <span class="cert-badge"><i class="bi bi-collection-fill"></i> <?= $totalMods ?> Módulos completados</span>
            <span class="cert-badge"><i class="bi bi-patch-check-fill"></i> <?= $aprobados ?>/<?= $totalMods ?> Evaluaciones aprobadas</span>
        </div>

        <!-- Firmas y sello -->
        <div class="cert-footer">

            <div class="cert-sig-block">
                <div class="cert-sig-cursive"><?= htmlspecialchars($nombre) ?></div>
                <div class="cert-sig-line"><?= htmlspecialchars($nombre) ?></div>
                <div class="cert-sig-role">Participante</div>
            </div>

            <div class="cert-seal-wrap">
                <div class="cert-seal-circle">
                    <div class="cert-seal-icon">🏅</div>
                    <div class="cert-seal-text">Curso<br>Completado<br><?= date('Y', strtotime($fechaEmision)) ?></div>
                </div>
            </div>

            <div class="cert-sig-block">
                <div class="cert-sig-cursive">Jonathan Kazan</div>
                <div class="cert-sig-line"><?= htmlspecialchars(CURSO_PROFESOR) ?></div>
                <div class="cert-sig-role">Docente &amp; Analista Programador</div>
            </div>

        </div><!-- cert-footer -->

        <!-- Número y verificación -->
        <div class="cert-meta-row">
            <span>Certificado N°: <strong><?= htmlspecialchars($nroCertificado) ?></strong></span>
            <span>Emitido el <strong><?= $fechaEmisionFmt ?></strong></span>
            <span>Consultas: <strong><?= htmlspecialchars(CURSO_EMAIL_INSTRUCTOR) ?></strong></span>
        </div>

    </div><!-- cert-content -->
</div><!-- cert-body -->
</div>
</div>
</div><!-- certificate -->

<p style="text-align:center;color:#9a8060;font-size:.68rem;margin-top:1.2rem;font-family:'Inter',sans-serif;letter-spacing:.05em;">
    <?= htmlspecialchars(CURSO_COPYRIGHT) ?>
</p>
</div><!-- cert-wrapper -->
</body>
</html>
