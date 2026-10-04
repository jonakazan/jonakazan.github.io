<?php
$pageTitle    = 'Mi Informe Final';
$activeModule = '';
$activePage   = '';
require_once __DIR__ . '/includes/header.php';

if (!cursoCompletado($email)) {
    header('Location: /ciberseguridad/dashboard.php?msg=no_completado');
    exit;
}

$datos = generarDatosInforme($email, $nombre);
$fechaHoy = date('d/m/Y');
?>

<main class="main-content">
<div class="fade-in-up">
    <div class="d-flex align-items-center justify-content-between flex-wrap gap-3 mb-4">
        <div>
            <h1 style="font-size:1.5rem;margin-bottom:.25rem;">🎓 Mi Informe de Finalización</h1>
            <p style="color:var(--text-secondary);margin:0;">Podés descargar este informe e imprimirlo o enviarlo por correo.</p>
        </div>
        <div class="d-flex gap-2">
            <button onclick="window.print()" class="btn-cyber">
                <i class="bi bi-printer"></i> Imprimir / PDF
            </button>
        </div>
    </div>

    <!-- Vista previa del informe (imprimible) -->
    <div id="informe-imprimible" class="informe-container">

        <!-- Encabezado -->
        <div style="text-align:center;border-bottom:3px solid #1a1a2e;padding-bottom:1.5rem;margin-bottom:2rem;">
            <div style="font-size:3rem;margin-bottom:.5rem;">🔐</div>
            <h1 style="font-size:1.7rem;font-weight:900;color:#1a1a2e;margin-bottom:.25rem;">
                <?= htmlspecialchars(CURSO_NOMBRE) ?>
            </h1>
            <p style="color:#666;font-size:.92rem;margin:0 0 .4rem;">
                Constancia Oficial de Finalización del Curso
            </p>
            <span style="font-size:.85rem;color:#1a1a2e;font-weight:600;background:#e2e8f0;padding:4px 12px;border-radius:20px;">
                Docente: <?= htmlspecialchars(CURSO_PROFESOR) ?> &bull; <?= htmlspecialchars(CURSO_EMAIL_INSTRUCTOR) ?>
            </span>
        </div>

        <!-- Datos del alumno -->
        <div style="background:#f8f9fc;border-radius:12px;padding:1.5rem;margin-bottom:1.5rem;border-left:5px solid #1a1a2e;">
            <h2 style="font-size:1rem;color:#1a1a2e;font-weight:700;text-transform:uppercase;letter-spacing:.08em;margin-bottom:1rem;">
                Datos del alumno
            </h2>
            <table style="width:100%;border-collapse:collapse;">
                <tr>
                    <td style="padding:6px 0;font-size:.9rem;color:#666;width:170px;">Nombre completo:</td>
                    <td style="padding:6px 0;font-size:.9rem;font-weight:600;color:#1a1a2e;"><?= htmlspecialchars($datos['nombre']) ?></td>
                </tr>
                <tr>
                    <td style="padding:6px 0;font-size:.9rem;color:#666;">Correo:</td>
                    <td style="padding:6px 0;font-size:.9rem;font-weight:600;color:#1a1a2e;"><?= htmlspecialchars($datos['email']) ?></td>
                </tr>
                <tr>
                    <td style="padding:6px 0;font-size:.9rem;color:#666;">Docente a cargo:</td>
                    <td style="padding:6px 0;font-size:.9rem;font-weight:600;color:#1a1a2e;"><?= htmlspecialchars(CURSO_PROFESOR) ?> (<?= htmlspecialchars(CURSO_EMAIL_INSTRUCTOR) ?>)</td>
                </tr>
                <tr>
                    <td style="padding:6px 0;font-size:.9rem;color:#666;">Fecha de inicio:</td>
                    <td style="padding:6px 0;font-size:.9rem;color:#1a1a2e;"><?= htmlspecialchars(date('d/m/Y H:i', strtotime($datos['fecha_inicio']))) ?></td>
                </tr>
                <tr>
                    <td style="padding:6px 0;font-size:.9rem;color:#666;">Fecha de finalización:</td>
                    <td style="padding:6px 0;font-size:.9rem;color:#1a1a2e;"><?= htmlspecialchars(date('d/m/Y H:i', strtotime($datos['fecha_completado']))) ?></td>
                </tr>
                <tr>
                    <td style="padding:6px 0;font-size:.9rem;color:#666;">Progreso total:</td>
                    <td style="padding:6px 0;font-size:.9rem;font-weight:700;color:green;"><?= $datos['porcentaje'] ?>% completado</td>
                </tr>
            </table>
        </div>

        <!-- Detalle por módulo -->
        <h2 style="font-size:1rem;color:#1a1a2e;font-weight:700;text-transform:uppercase;letter-spacing:.08em;margin-bottom:1rem;">
            Detalle por módulo
        </h2>

        <?php foreach ($datos['modulos'] as $i => $mod): ?>
        <div style="background:#f8f9fc;border-radius:8px;padding:1.25rem;margin-bottom:1rem;border:1px solid #e2e8f0;">
            <div style="display:flex;justify-content:space-between;align-items:flex-start;flex-wrap:wrap;gap:.5rem;margin-bottom:.75rem;">
                <h3 style="font-size:.95rem;font-weight:700;color:#1a1a2e;margin:0;"><?= htmlspecialchars($mod['titulo']) ?></h3>
                <span style="font-size:.82rem;font-weight:600;color:<?= $mod['paginas_vistas'] >= $mod['paginas_total'] ? 'green' : '#e67e22' ?>;">
                    <?= $mod['paginas_vistas'] ?>/<?= $mod['paginas_total'] ?> páginas vistas
                </span>
            </div>

            <?php if ($mod['quiz']): ?>
            <div style="display:flex;align-items:center;gap:1rem;flex-wrap:wrap;">
                <div style="font-size:.88rem;color:#444;">
                    <strong>Evaluación:</strong>
                    <?= $mod['quiz']['puntaje'] ?>/<?= $mod['quiz']['total'] ?> respuestas correctas
                    (<?= $mod['quiz']['porcentaje'] ?>%)
                </div>
                <span style="font-size:.82rem;font-weight:700;color:<?= $mod['quiz']['porcentaje'] >= 60 ? 'green' : '#e67e22' ?>;">
                    <?= $mod['quiz']['porcentaje'] >= 60 ? '✓ Aprobado' : '↻ Para repasar' ?>
                </span>
            </div>
            <?php else: ?>
            <p style="font-size:.88rem;color:#999;margin:0;">Evaluación no realizada.</p>
            <?php endif; ?>
        </div>
        <?php endforeach; ?>


        <!-- Nota y Derechos -->
        <div style="background:#0f172a;color:#fff;border-radius:8px;padding:1.25rem;text-align:center;margin-top:1rem;">
            <p style="margin:0 0 .4rem;font-size:.9rem;opacity:.95;">
                Este informe fue generado automáticamente el <?= $fechaHoy ?> por la plataforma del
                <strong><?= htmlspecialchars(CURSO_NOMBRE) ?></strong>.
            </p>
            <p style="margin:0;font-size:.82rem;opacity:.8;color:#94a3b8;">
                Curso generado por Prof. Kazan Jonathan M. — Año 2026 todos los derechos reservados.
            </p>
        </div>

    </div><!-- fin informe imprimible -->

    <!-- Instrucciones para enviar por mail -->
    <div class="card-cyber p-4 mt-4">
        <h3 style="font-size:1rem;margin-bottom:1rem;"><i class="bi bi-envelope-fill" style="color:var(--primary);"></i> ¿Cómo enviarlo por correo?</h3>
        <ol style="color:var(--text-secondary);font-size:.9rem;padding-left:1.2rem;line-height:2;">
            <li>Hacé clic en el botón <strong style="color:var(--text-primary);">"Imprimir / PDF"</strong> de arriba.</li>
            <li>En el diálogo de impresión, seleccioná <strong style="color:var(--text-primary);">"Guardar como PDF"</strong> como destino.</li>
            <li>Guardá el archivo en tu computadora.</li>
            <li>Adjuntá el PDF en un correo electrónico a tu instructor: <a href="mailto:<?= htmlspecialchars(CURSO_EMAIL_INSTRUCTOR) ?>" style="color:var(--primary);font-weight:600;"><?= htmlspecialchars(CURSO_EMAIL_INSTRUCTOR) ?></a>.</li>
        </ol>
    </div>

</div>
</main>

<style>
@media print {
    .navbar-cyber, .sidebar-cyber, .page-nav, .card-cyber:last-child, .btn-cyber { display: none !important; }
    .main-content { margin-left: 0 !important; padding: 0 !important; }
    .informe-container { box-shadow: none; border-radius: 0; max-width: 100%; }
    body, body::before, body::after { background: #fff; }
}
</style>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
