<?php
$pageTitle    = 'Inicio del Curso';
$activeModule = '';
$activePage   = 'dashboard';
require_once __DIR__ . '/includes/header.php';
// header.php ya requirió auth y progreso
$progreso = cargarProgreso($email);
?>

<main class="main-content">
    <div class="fade-in-up">

        <!-- Bienvenida -->
        <div class="content-block" style="background:linear-gradient(135deg,rgba(0,212,255,0.08),rgba(123,47,255,0.08));border-color:rgba(0,212,255,0.2);">
            <div class="d-flex align-items-center gap-3 flex-wrap">
                <div style="font-size:3rem;">👋</div>
                <div>
                    <h1 style="margin:0 0 .25rem;font-size:1.6rem;">
                        Bienvenido/a, <?= htmlspecialchars(explode(' ', $nombre)[0]) ?>
                    </h1>
                    <p style="margin:0;color:var(--text-secondary);">
                        Estás en el <strong style="color:var(--primary);"><?= htmlspecialchars(CURSO_NOMBRE) ?></strong>.
                        Avanzá a tu propio ritmo y completá todos los módulos para obtener tu informe.
                    </p>
                </div>
            </div>

            <?php if ($completado): ?>
            <div class="alert-cyber success mt-3 mb-0">
                <i class="bi bi-trophy-fill"></i>
                <strong>¡Felicitaciones! Completaste el curso.</strong>
                <a href="/ciberseguridad/informe.php" class="btn-cyber ms-auto" style="padding:6px 16px;font-size:.82rem;">
                    Ver mi informe <i class="bi bi-arrow-right"></i>
                </a>
            </div>
            <?php endif; ?>
        </div>

        <!-- Estadísticas -->
        <div class="row g-3 mb-4 anim-delay-1 fade-in-up">
            <div class="col-6 col-md-3">
                <div class="stat-card">
                    <div class="stat-number"><?= $porcentaje ?>%</div>
                    <div class="stat-label">Progreso total</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-card">
                    <div class="stat-number"><?= count($progreso['paginas_vistas']) ?></div>
                    <div class="stat-label">Páginas vistas</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-card">
                    <div class="stat-number"><?= count(MODULOS) ?></div>
                    <div class="stat-label">Módulos totales</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-card">
                    <div class="stat-number"><?= count($progreso['quiz_resultados']) ?></div>
                    <div class="stat-label">Quizzes hechos</div>
                </div>
            </div>
        </div>

        <!-- Módulos -->
        <h2 class="anim-delay-2 fade-in-up" style="font-size:1.2rem;margin-bottom:1rem;color:var(--text-secondary);font-weight:600;letter-spacing:.05em;text-transform:uppercase;">
            Contenido del curso
        </h2>

        <?php foreach (MODULOS as $modId => $modulo):
            $paginasModulo = count($modulo['paginas']);
            $vistas = 0;
            foreach ($modulo['paginas'] as $pagId => $pagTitulo) {
                if (in_array($modId . '/' . $pagId, $progreso['paginas_vistas'])) $vistas++;
            }
            $pct = $paginasModulo > 0 ? round(($vistas / $paginasModulo) * 100) : 0;
            $quiz = $progreso['quiz_resultados'][$modId] ?? null;
            // Primera página del módulo
            reset($modulo['paginas']);
            $firstPage = key($modulo['paginas']);
        ?>
        <div class="card-cyber p-4 mb-3 anim-delay-2 fade-in-up">
            <div class="d-flex align-items-start justify-content-between flex-wrap gap-3">
                <div class="flex-grow-1">
                    <div class="module-badge">
                        <i class="bi bi-shield-check"></i>
                        <?= $pct ?>% completado
                    </div>
                    <h3 style="font-size:1.1rem;margin-bottom:.5rem;"><?= htmlspecialchars($modulo['titulo']) ?></h3>

                    <!-- Mini progreso del módulo -->
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="progress-cyber flex-grow-1" style="max-width:200px;">
                            <div class="progress-bar-cyber" style="width:<?= $pct ?>%"></div>
                        </div>
                        <small style="color:var(--text-muted);"><?= $vistas ?>/<?= $paginasModulo ?> páginas</small>
                    </div>

                    <!-- Páginas del módulo -->
                    <div class="d-flex flex-wrap gap-2">
                        <?php foreach ($modulo['paginas'] as $pagId => $pagTitulo):
                            $visto = in_array($modId . '/' . $pagId, $progreso['paginas_vistas']);
                        ?>
                        <a href="/ciberseguridad/modulos/<?= $modId ?>/<?= $pagId ?>.php"
                            style="font-size:.8rem;padding:4px 10px;border-radius:100px;text-decoration:none;border:1px solid;
                            <?= $visto
                                ? 'background:rgba(0,230,118,.1);color:var(--success);border-color:rgba(0,230,118,.3);'
                                : 'background:rgba(255,255,255,.04);color:var(--text-muted);border-color:rgba(255,255,255,.08);' ?>">
                            <?= $visto ? '✓ ' : '' ?><?= htmlspecialchars($pagTitulo) ?>
                        </a>
                        <?php endforeach; ?>
                    </div>

                    <?php if ($quiz): ?>
                    <div class="mt-3">
                        <span class="result-badge <?= $quiz['porcentaje'] >= 60 ? 'aprobado' : 'repaso' ?>">
                            <i class="bi bi-<?= $quiz['porcentaje'] >= 60 ? 'check-circle' : 'arrow-repeat' ?>"></i>
                            Quiz: <?= $quiz['puntaje'] ?>/<?= $quiz['total'] ?> (<?= $quiz['porcentaje'] ?>%)
                        </span>
                    </div>
                    <?php endif; ?>
                </div>

                <a href="/ciberseguridad/modulos/<?= $modId ?>/<?= $firstPage ?>.php"
                    class="<?= $pct >= 100 ? 'btn-outline-cyber' : 'btn-cyber' ?> align-self-start">
                    <?php if ($pct === 0): ?>
                        <i class="bi bi-play-fill"></i> Comenzar
                    <?php elseif ($pct >= 100): ?>
                        <i class="bi bi-eye"></i> Repasar
                    <?php else: ?>
                        <i class="bi bi-arrow-right-circle"></i> Continuar
                    <?php endif; ?>
                </a>
            </div>
        </div>
        <?php endforeach; ?>

    </div>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
