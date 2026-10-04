<?php
// Header reutilizable para páginas del curso
// Parámetros esperados: $pageTitle, $activeModule, $activePage
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/auth.php';
require_once __DIR__ . '/progreso.php';
requireLogin();

$email       = getEmailUsuario();
$nombre      = getNombreUsuario();
$porcentaje  = getPorcentajeProgreso($email);
$completado  = cursoCompletado($email);
$pageTitle   = $pageTitle ?? 'Curso';
$activeModule= $activeModule ?? '';
$activePage  = $activePage ?? '';

// Marcar página como vista automáticamente
if (!empty($activeModule) && !empty($activePage)) {
    marcarPaginaVista($email, $activeModule, $activePage);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?> — <?= htmlspecialchars(CURSO_NOMBRE) ?></title>
    <link rel="icon" type="image/svg+xml" href="/ciberseguridad/assets/img/favicon.svg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/ciberseguridad/assets/css/style.css">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar-cyber">
    <div class="container-fluid px-4 d-flex align-items-center justify-content-between">
        <a href="/ciberseguridad/dashboard.php" class="navbar-brand-cyber">
            🔐 <?= htmlspecialchars(CURSO_NOMBRE) ?>
        </a>

        <div class="d-flex align-items-center gap-3">
            <!-- Progreso global -->
            <div class="d-none d-md-flex align-items-center gap-2" style="min-width:180px;">
                <small style="color:var(--text-muted);white-space:nowrap;font-size:.8rem;">Progreso: <?= $porcentaje ?>%</small>
                <div class="progress-cyber flex-grow-1">
                    <div class="progress-bar-cyber" style="width:<?= $porcentaje ?>%"></div>
                </div>
            </div>

            <!-- Usuario -->
            <div class="dropdown">
                <button class="btn-outline-cyber btn" type="button" id="userMenu" data-bs-toggle="dropdown" aria-expanded="false"
                    style="padding:6px 14px;font-size:.85rem;">
                    <i class="bi bi-person-circle"></i>
                    <span class="d-none d-md-inline"><?= htmlspecialchars($nombre) ?></span>
                    <i class="bi bi-chevron-down" style="font-size:.7rem;"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" style="background:var(--bg-card);border-color:var(--border);">
                    <li>
                        <span class="dropdown-item" style="color:var(--text-muted);font-size:.82rem;cursor:default;">
                            <?= htmlspecialchars($email) ?>
                        </span>
                    </li>
                    <li><hr class="dropdown-divider" style="border-color:var(--border);"></li>
                    <?php if ($completado): ?>
                    <li>
                        <a class="dropdown-item" href="/ciberseguridad/informe.php"
                            style="color:var(--success);">
                            <i class="bi bi-file-earmark-text"></i> Ver mi informe
                        </a>
                    </li>
                    <?php endif; ?>
                    <li>
                        <a class="dropdown-item" href="/ciberseguridad/logout.php"
                            style="color:var(--danger);">
                            <i class="bi bi-box-arrow-right"></i> Cerrar sesión
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<div class="d-flex">
<!-- SIDEBAR -->
<aside class="sidebar-cyber d-none d-lg-block">
    <div class="px-3 mb-3">
        <div class="progress-cyber">
            <div class="progress-bar-cyber" style="width:<?= $porcentaje ?>%"></div>
        </div>
        <small style="color:var(--text-muted);font-size:.78rem;margin-top:6px;display:block;">
            <?= $porcentaje ?>% completado
        </small>
    </div>

    <a href="/ciberseguridad/dashboard.php"
        class="sidebar-item <?= ($activePage === 'dashboard') ? 'active' : '' ?>">
        <i class="bi bi-house"></i> Inicio
    </a>

    <?php foreach (MODULOS as $modId => $modulo): 
        $modNum        = substr($modId, 6);
        $isActiveMod   = ($activeModule === $modId);
        $isOpen        = $isActiveMod; // Solo el módulo actual arranca abierto
        
        $totalModPags  = count($modulo['paginas']);
        $vistasModPags = 0;
        foreach ($modulo['paginas'] as $pid => $ptit) {
            if (paginaFueVista($email, $modId, $pid)) $vistasModPags++;
        }
        $modCompleto = ($totalModPags > 0 && $vistasModPags === $totalModPags);
    ?>
    <div class="sidebar-module-group" id="grp-<?= $modId ?>">
        <button type="button" 
                class="sidebar-module-header <?= $isActiveMod ? 'active-module' : '' ?> <?= $isOpen ? 'expanded' : '' ?>"
                onclick="toggleSidebarModule('<?= $modId ?>')"
                title="<?= htmlspecialchars($modulo['titulo']) ?>">
            <div class="module-header-title">
                <i class="bi <?= $modCompleto ? 'bi-check-circle-fill text-success' : 'bi-folder2-open' ?>" style="font-size:.9rem;"></i>
                <span style="font-size:.84rem;"><?= htmlspecialchars(substr($modulo['titulo'], 0, 24)) ?>...</span>
            </div>
            <div class="d-flex align-items-center gap-1">
                <?php if ($modCompleto): ?>
                    <span class="badge bg-success" style="font-size:.62rem;padding:2px 5px;">✓</span>
                <?php endif; ?>
                <i class="bi bi-chevron-down chevron-icon"></i>
            </div>
        </button>

        <div class="sidebar-module-body <?= $isOpen ? 'show' : '' ?>" id="body-<?= $modId ?>">
            <?php foreach ($modulo['paginas'] as $pagId => $pagTitulo): 
                $visto = paginaFueVista($email, $modId, $pagId);
                $isQuiz = ($pagId === 'quiz');
            ?>
            <a href="/ciberseguridad/modulos/<?= $modId ?>/<?= $pagId ?>.php"
                class="sidebar-item <?= ($activeModule===$modId && $activePage===$pagId) ? 'active' : '' ?> <?= $visto ? 'completado' : '' ?>"
                style="<?= $isQuiz ? 'font-weight:600;' : '' ?>">
                <span class="sidebar-check">
                    <?php if ($visto): ?>
                        <i class="bi bi-check-circle-fill" style="color:var(--success);"></i>
                    <?php elseif ($isQuiz): ?>
                        <i class="bi bi-pencil-square" style="color:var(--secondary);font-size:.8rem;"></i>
                    <?php else: ?>
                        <i class="bi bi-circle" style="color:var(--text-muted);"></i>
                    <?php endif; ?>
                </span>
                <span style="font-size:.82rem;"><?= htmlspecialchars($pagTitulo) ?></span>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
    <?php endforeach; ?>

    <?php if ($completado): ?>
    <div class="p-3 mt-2" style="display:flex;flex-direction:column;gap:8px;">
        <a href="/ciberseguridad/informe.php" class="btn-cyber w-100" style="padding:8px 12px;font-size:.82rem;justify-content:center;">
            <i class="bi bi-file-earmark-text-fill"></i> Mi Informe Final
        </a>
        <?php
        // Verificar si el certificado está disponible para este usuario
        $certDir      = __DIR__ . '/../data/certificados/';
        $certFilePath = $certDir . preg_replace('/[^a-zA-Z0-9_\-]/', '_', $email) . '.json';
        $certDisp     = false;
        if (file_exists($certFilePath)) {
            $cd = json_decode(file_get_contents($certFilePath), true);
            $certDisp = $cd['habilitado'] ?? false;
        }
        if ($certDisp): ?>
        <a href="/ciberseguridad/certificado.php"
           class="btn-cyber w-100"
           style="padding:8px 12px;font-size:.82rem;justify-content:center;background:linear-gradient(135deg,#c9a227,#f0d070);color:#1a0a2e;border-color:#c9a227;">
            <i class="bi bi-award-fill"></i> Mi Certificado
        </a>
        <?php endif; ?>
    </div>
    <?php endif; ?>
</aside>

<script>
function toggleSidebarModule(modId) {
    const body = document.getElementById('body-' + modId);
    const grp = document.getElementById('grp-' + modId);
    if (!body || !grp) return;
    const btn = grp.querySelector('.sidebar-module-header');
    const isShowing = body.classList.contains('show');
    
    // Si queremos cerrar los demás cuando abrimos uno:
    if (!isShowing) {
        document.querySelectorAll('.sidebar-module-body.show').forEach(b => {
            if (b.id !== 'body-' + modId) {
                b.classList.remove('show');
                const otherGrp = b.closest('.sidebar-module-group');
                if (otherGrp) otherGrp.querySelector('.sidebar-module-header')?.classList.remove('expanded');
            }
        });
        body.classList.add('show');
        btn?.classList.add('expanded');
    } else {
        body.classList.remove('show');
        btn?.classList.remove('expanded');
    }
}
</script>

<!-- MAIN CONTENT se incluye en cada página -->
