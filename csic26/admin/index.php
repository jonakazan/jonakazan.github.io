<?php
// ============================================================
// PANEL DE ADMINISTRACIÓN — admin/index.php
// ============================================================
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/progreso.php';

session_start();
$error   = '';
$success = '';

// ── LOGIN ADMIN ─────────────────────────────────────────────
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['admin_login'])) {
    $user = $_POST['admin_user'] ?? '';
    $pass = $_POST['admin_pass'] ?? '';

    if ($user === ADMIN_USER && password_verify($pass, ADMIN_PASSWORD_HASH)) {
        session_regenerate_id(true);
        $_SESSION['admin_logged'] = true;
        header('Location: /ciberseguridad/admin/index.php');
        exit;
    } else {
        sleep(1);
        $error = 'Usuario o contraseña de administración incorrectos.';
    }
}

// ── LOGOUT ADMIN ────────────────────────────────────────────
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: /ciberseguridad/admin/index.php');
    exit;
}

// ── AGREGAR USUARIO ──────────────────────────────────────────
if (isset($_SESSION['admin_logged']) && $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['agregar_usuario'])) {
    $nuevoEmail  = strtolower(trim($_POST['nuevo_email'] ?? ''));
    $nuevoClave  = trim($_POST['nuevo_pass'] ?? '');
    $nuevoNombre = trim($_POST['nuevo_nombre'] ?? '');
    $nuevoEstado = ($_POST['nuevo_estado'] ?? 'activo') === 'activo' ? 'activo' : 'inactivo';

    if (!filter_var($nuevoEmail, FILTER_VALIDATE_EMAIL)) {
        $error = 'El correo electrónico no es válido.';
    } elseif (strlen($nuevoClave) < 6) {
        $error = 'La contraseña debe tener al menos 6 caracteres.';
    } elseif (empty($nuevoNombre)) {
        $error = 'El nombre completo es obligatorio.';
    } else {
        // Verificar que el email no exista ya
        $lineas  = file_exists(USUARIOS_FILE) ? file(USUARIOS_FILE, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) : [];
        $existe  = false;
        foreach ($lineas as $linea) {
            if (str_starts_with(trim($linea), '#') || str_starts_with(trim($linea), '//') || str_starts_with(trim($linea), '?')) continue;
            $partes = explode('|', $linea);
            if (count($partes) >= 1 && strtolower(trim($partes[0])) === $nuevoEmail) {
                $existe = true;
                break;
            }
        }

        if ($existe) {
            $error = 'Ya existe un usuario con ese correo electrónico.';
        } else {
            $hash       = password_hash($nuevoClave, PASSWORD_BCRYPT);
            $nuevaLinea = "$nuevoEmail|$hash|$nuevoNombre|$nuevoEstado\n";
            file_put_contents(USUARIOS_FILE, $nuevaLinea, FILE_APPEND | LOCK_EX);
            $success = "Usuario <strong>$nuevoEmail</strong> agregado correctamente. Contraseña: <code>$nuevoClave</code> (guardala antes de cerrar esta ventana).";
        }
    }
}

// ── CAMBIAR ESTADO USUARIO ───────────────────────────────────
if (isset($_SESSION['admin_logged']) && isset($_GET['toggle'])) {
    $emailToggle = base64_decode($_GET['toggle']);
    $lineas = file(USUARIOS_FILE, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $nuevasLineas = [];
    foreach ($lineas as $linea) {
        if (str_starts_with(trim($linea), '#') || str_starts_with(trim($linea), '//') || str_starts_with(trim($linea), '?')) {
            $nuevasLineas[] = $linea;
            continue;
        }
        $partes = explode('|', $linea);
        if (count($partes) >= 4 && strtolower(trim($partes[0])) === strtolower($emailToggle)) {
            $partes[3] = trim($partes[3]) === 'activo' ? 'inactivo' : 'activo';
            $nuevasLineas[] = implode('|', $partes);
        } else {
            $nuevasLineas[] = $linea;
        }
    }
    file_put_contents(USUARIOS_FILE, implode("\n", $nuevasLineas) . "\n");
    header('Location: /ciberseguridad/admin/index.php?ok=1');
    exit;
}

// ── EMITIR / REVOCAR CERTIFICADO ─────────────────────────────
if (isset($_SESSION['admin_logged']) && isset($_GET['cert'])) {
    $certEmailB64 = $_GET['cert'];
    $certEmail    = base64_decode($certEmailB64);
    $certDir      = __DIR__ . '/../data/certificados/';
    if (!is_dir($certDir)) {
        mkdir($certDir, 0750, true);
        file_put_contents($certDir . '.htaccess', "Order Deny,Allow\nDeny from all\n");
    }
    $certFile = $certDir . preg_replace('/[^a-zA-Z0-9_\-]/', '_', $certEmail) . '.json';
    $action   = $_GET['action'] ?? 'emitir';

    if ($action === 'revocar') {
        if (file_exists($certFile)) {
            $d = json_decode(file_get_contents($certFile), true);
            $d['habilitado'] = false;
            file_put_contents($certFile, json_encode($d, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
        }
        header('Location: /ciberseguridad/admin/index.php?ok=cert_revocado');
    } else {
        // Emitir nuevo certificado
        $existe = file_exists($certFile) ? json_decode(file_get_contents($certFile), true) : [];
        // Generar número correlativo
        $numero = $existe['numero'] ?? null;
        if (!$numero) {
            // Contar certificados existentes para auto-numerar
            $count  = count(glob($certDir . '*.json'));
            $numero = 'CERT-' . str_pad($count + 1, 4, '0', STR_PAD_LEFT) . '-' . date('Y');
        }
        $certData = [
            'habilitado'   => true,
            'email'        => $certEmail,
            'fecha_emision'=> date('Y-m-d'),
            'numero'       => $numero,
            'emitido_por'  => ADMIN_USER,
        ];
        file_put_contents($certFile, json_encode($certData, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
        header('Location: /ciberseguridad/admin/index.php?ok=cert_emitido');
    }
    exit;
}

// ── CARGAR USUARIOS PARA MOSTRAR ────────────────────────────
function cargarUsuarios(): array {
    if (!file_exists(USUARIOS_FILE)) return [];
    $lineas = file(USUARIOS_FILE, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $usuarios = [];
    foreach ($lineas as $linea) {
        if (str_starts_with(trim($linea), '#') || str_starts_with(trim($linea), '//') || str_starts_with(trim($linea), '?')) continue;
        $partes = explode('|', $linea);
        if (count($partes) >= 4) {
            $usuarios[] = [
                'email'  => trim($partes[0]),
                'nombre' => trim($partes[2]),
                'estado' => trim($partes[3]),
            ];
        }
    }
    return $usuarios;
}

// ── CARGAR PROGRESO DE TODOS LOS USUARIOS ───────────────────
function getProgresoUsuario(string $email): array {
    require_once __DIR__ . '/../includes/progreso.php';
    return cargarProgreso($email);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración — <?= htmlspecialchars(CURSO_NOMBRE) ?></title>
    <link rel="icon" type="image/svg+xml" href="/ciberseguridad/assets/img/favicon.svg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/ciberseguridad/assets/css/style.css">
</head>
<body>

<?php if (!isset($_SESSION['admin_logged'])): ?>
<!-- ── PANTALLA DE LOGIN ADMIN ────────────────────────────── -->
<div class="login-wrapper">
    <div class="login-card fade-in-up">
        <div class="login-logo">⚙️</div>
        <h1 class="login-title">Panel Admin</h1>
        <p class="login-subtitle">Acceso restringido para administradores del curso</p>

        <?php if ($error): ?>
        <div class="alert-cyber danger">
            <i class="bi bi-shield-x"></i> <?= htmlspecialchars($error) ?>
        </div>
        <?php endif; ?>

        <form method="POST">
            <div class="form-group-cyber">
                <label class="form-label-cyber" for="admin_user">Usuario Admin</label>
                <input type="text" id="admin_user" name="admin_user" class="form-input-cyber" placeholder="admin" required>
            </div>
            <div class="form-group-cyber">
                <label class="form-label-cyber" for="admin_pass">Contraseña</label>
                <input type="password" id="admin_pass" name="admin_pass" class="form-input-cyber" placeholder="••••••••" required>
            </div>
            <input type="hidden" name="admin_login" value="1">
            <button type="submit" class="btn-cyber" style="width:100%;justify-content:center;">
                <i class="bi bi-shield-lock"></i> Ingresar
            </button>
        </form>
        <p style="text-align:center;margin-top:1.5rem;">
            <a href="/ciberseguridad/index.php" style="color:var(--text-muted);font-size:.82rem;">
                ← Volver al curso
            </a>
        </p>
    </div>
</div>

<?php else: ?>
<!-- ── PANEL ADMIN ─────────────────────────────────────────── -->
<nav class="navbar-cyber">
    <div class="container-fluid px-4 d-flex align-items-center justify-content-between">
        <span class="navbar-brand-cyber">⚙️ Admin — <?= htmlspecialchars(CURSO_NOMBRE) ?></span>
        <div class="d-flex gap-2">
            <a href="/ciberseguridad/index.php" class="btn-outline-cyber" style="padding:6px 14px;font-size:.85rem;">
                <i class="bi bi-arrow-left"></i> Ir al curso
            </a>
            <a href="?logout=1" class="btn-outline-cyber" style="padding:6px 14px;font-size:.85rem;color:var(--danger);border-color:var(--danger);">
                <i class="bi bi-box-arrow-right"></i> Salir
            </a>
        </div>
    </div>
</nav>

<div class="container-fluid px-4 py-4" style="max-width:1100px;margin:0 auto;position:relative;z-index:1;">

    <?php if ($error): ?>
    <div class="alert-cyber danger mb-3"><i class="bi bi-exclamation-triangle"></i> <?= $error ?></div>
    <?php endif; ?>
    <?php if ($success): ?>
    <div class="alert-cyber success mb-3"><i class="bi bi-check-circle"></i> <?= $success ?></div>
    <?php endif; ?>
    <?php if (isset($_GET['ok'])): 
        $okMsg = match($_GET['ok']) {
            'cert_emitido'  => '<i class="bi bi-award-fill"></i> Certificado emitido correctamente. El alumno ya puede descargarlo.',
            'cert_revocado' => '<i class="bi bi-x-circle"></i> Certificado revocado. El alumno ya no puede acceder a él.',
            default         => '<i class="bi bi-check-circle"></i> Estado actualizado correctamente.',
        };
    ?>
    <div class="alert-cyber success mb-3"><?= $okMsg ?></div>
    <?php endif; ?>

    <div class="row g-4">

        <!-- Columna izquierda: Agregar usuario -->
        <div class="col-lg-4">
            <div class="card-cyber p-4">
                <h2 style="font-size:1.1rem;margin-bottom:1.5rem;"><i class="bi bi-person-plus-fill" style="color:var(--primary);"></i> Agregar Usuario</h2>

                <form method="POST">
                    <div class="form-group-cyber">
                        <label class="form-label-cyber">Nombre completo</label>
                        <input type="text" name="nuevo_nombre" class="form-input-cyber" placeholder="Juan Pérez" required>
                    </div>
                    <div class="form-group-cyber">
                        <label class="form-label-cyber">Correo electrónico</label>
                        <input type="email" name="nuevo_email" class="form-input-cyber" placeholder="alumno@ejemplo.com" required>
                    </div>
                    <div class="form-group-cyber">
                        <label class="form-label-cyber">Contraseña asignada</label>
                        <div style="display:flex;gap:8px;">
                            <input type="text" name="nuevo_pass" id="new_pass_field" class="form-input-cyber" placeholder="Mínimo 6 caracteres" required minlength="6">
                            <button type="button" onclick="generarClave()" class="btn-outline-cyber" style="padding:8px 12px;white-space:nowrap;" title="Generar clave aleatoria">
                                <i class="bi bi-shuffle"></i>
                            </button>
                        </div>
                    </div>
                    <div class="form-group-cyber">
                        <label class="form-label-cyber">Estado</label>
                        <select name="nuevo_estado" class="form-input-cyber">
                            <option value="activo">Activo</option>
                            <option value="inactivo">Inactivo</option>
                        </select>
                    </div>
                    <input type="hidden" name="agregar_usuario" value="1">
                    <button type="submit" class="btn-cyber" style="width:100%;justify-content:center;">
                        <i class="bi bi-plus-circle"></i> Agregar usuario
                    </button>
                </form>

                <div class="mt-4 p-3" style="background:rgba(255,215,64,.06);border:1px solid rgba(255,215,64,.2);border-radius:8px;">
                    <small style="color:var(--warning);font-size:.8rem;">
                        <i class="bi bi-info-circle"></i>
                        <strong>Importante:</strong> Anotá la contraseña antes de agregar al usuario. No se puede recuperar después (solo se guarda el hash cifrado).
                    </small>
                </div>
            </div>

            <!-- Generador de hash manual -->
            <div class="card-cyber p-4 mt-3">
                <h3 style="font-size:.95rem;margin-bottom:1rem;"><i class="bi bi-key-fill" style="color:var(--secondary);"></i> Generar Hash de Contraseña</h3>
                <p style="font-size:.82rem;color:var(--text-muted);">Útil para editar el archivo usuarios.txt manualmente.</p>
                <div style="display:flex;gap:8px;flex-direction:column;">
                    <input type="text" id="plain_pass" class="form-input-cyber" placeholder="Escribí la contraseña">
                    <button onclick="generarHash()" class="btn-outline-cyber" style="width:100%;justify-content:center;">
                        <i class="bi bi-hash"></i> Generar hash
                    </button>
                    <div id="hash_result" style="display:none;">
                        <small style="color:var(--text-muted);">Hash (copiá en el txt):</small>
                        <code id="hash_output" style="display:block;font-size:.75rem;word-break:break-all;color:var(--primary);margin-top:4px;"></code>
                    </div>
                </div>
            </div>
        </div>

        <!-- Columna derecha: Lista de usuarios -->
        <div class="col-lg-8">
            <div class="card-cyber p-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h2 style="font-size:1.1rem;margin:0;"><i class="bi bi-people-fill" style="color:var(--primary);"></i> Usuarios registrados</h2>
                    <span style="font-size:.82rem;color:var(--text-muted);">
                        <?= count(cargarUsuarios()) ?> usuario(s)
                    </span>
                </div>

                <?php $usuarios = cargarUsuarios(); ?>
                <?php if (empty($usuarios)): ?>
                <p style="color:var(--text-muted);text-align:center;padding:2rem;">No hay usuarios registrados todavía.</p>
                <?php else: ?>
                <div style="overflow-x:auto;">
                    <table class="admin-table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Estado</th>
                                <th>Progreso</th>
                                <th>Evaluaciones</th>
                                <th>Certificado</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $certDir = __DIR__ . '/../data/certificados/';
                            foreach ($usuarios as $u):
                                $progreso       = cargarProgreso($u['email']);
                                $pct            = getTotalPaginas() > 0 ? round(count($progreso['paginas_vistas']) / getTotalPaginas() * 100) : 0;
                                $totalQuizzes   = count(MODULOS);
                                $aprobadosCount = 0;
                                $detalleQuizzes = [];
                                $modIndex       = 1;
                                foreach (MODULOS as $modKey => $modData) {
                                    if (isset($progreso['quiz_resultados'][$modKey])) {
                                        $q = $progreso['quiz_resultados'][$modKey];
                                        $detalleQuizzes[] = "M$modIndex: {$q['puntaje']}/{$q['total']} ({$q['porcentaje']}%)";
                                        if (($q['porcentaje'] ?? 0) >= 60) {
                                            $aprobadosCount++;
                                        }
                                    } else {
                                        $detalleQuizzes[] = "M$modIndex: pendiente";
                                    }
                                    $modIndex++;
                                }
                                $tooltip = implode(" | ", $detalleQuizzes);
                                // Estado del certificado
                                $certFile = $certDir . preg_replace('/[^a-zA-Z0-9_\-]/', '_', $u['email']) . '.json';
                                $certData = file_exists($certFile) ? json_decode(file_get_contents($certFile), true) : null;
                                $certHabilitado = $certData['habilitado'] ?? false;
                                $certNumero     = $certData['numero'] ?? '—';
                                $certFecha      = $certData['fecha_emision'] ?? null;
                            ?>
                            <tr>
                                <td><?= htmlspecialchars($u['nombre']) ?></td>
                                <td style="font-size:.82rem;"><?= htmlspecialchars($u['email']) ?></td>
                                <td>
                                    <span class="badge-<?= $u['estado'] ?>">
                                        <?= $u['estado'] === 'activo' ? '● Activo' : '○ Inactivo' ?>
                                    </span>
                                </td>
                                <td>
                                    <div style="display:flex;align-items:center;gap:6px;">
                                        <div class="progress-cyber" style="width:60px;">
                                            <div class="progress-bar-cyber" style="width:<?= $pct ?>%"></div>
                                        </div>
                                        <small><?= $pct ?>%</small>
                                    </div>
                                </td>
                                <td>
                                    <span title="<?= htmlspecialchars($tooltip) ?>" style="cursor:help;font-size:.82rem;font-weight:600;color:<?= $aprobadosCount === $totalQuizzes ? 'var(--success)' : ($aprobadosCount > 0 ? 'var(--primary)' : 'var(--text-muted)') ?>;">
                                        <?= $aprobadosCount ?>/<?= $totalQuizzes ?> aprobadas
                                    </span>
                                </td>
                                <td style="min-width:130px;">
                                    <?php if ($certHabilitado): ?>
                                        <div style="display:flex;flex-direction:column;gap:4px;">
                                            <span style="font-size:.72rem;color:var(--success);font-weight:700;">
                                                <i class="bi bi-award-fill"></i> Emitido
                                            </span>
                                            <span style="font-size:.65rem;color:var(--text-muted);"><?= htmlspecialchars($certNumero) ?></span>
                                            <?php if ($certFecha): ?>
                                            <span style="font-size:.62rem;color:var(--text-muted);"><?= date('d/m/Y', strtotime($certFecha)) ?></span>
                                            <?php endif; ?>
                                            <a href="?cert=<?= base64_encode($u['email']) ?>&action=revocar"
                                               style="font-size:.68rem;color:var(--danger);text-decoration:none;"
                                               onclick="return confirm('¿Revocar el certificado de <?= htmlspecialchars(addslashes($u['nombre'])) ?>?')">
                                                <i class="bi bi-x-circle"></i> Revocar
                                            </a>
                                        </div>
                                    <?php else: ?>
                                        <a href="?cert=<?= base64_encode($u['email']) ?>&action=emitir"
                                           class="btn-cyber"
                                           style="padding:5px 10px;font-size:.72rem;gap:4px;"
                                           onclick="return confirm('¿Emitir certificado para <?= htmlspecialchars(addslashes($u['nombre'])) ?>?')">
                                            <i class="bi bi-award"></i> Emitir
                                        </a>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a href="?toggle=<?= base64_encode($u['email']) ?>"
                                        class="btn-outline-cyber"
                                        style="padding:4px 10px;font-size:.78rem;color:<?= $u['estado']==='activo'?'var(--danger)':'var(--success)' ?>;border-color:<?= $u['estado']==='activo'?'var(--danger)':'var(--success)' ?>;"
                                        onclick="return confirm('¿Cambiar estado del usuario?')">
                                        <?= $u['estado'] === 'activo' ? 'Desactivar' : 'Activar' ?>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <?php endif; ?>
            </div>

            <!-- Info sobre el archivo txt -->
            <div class="card-cyber p-4 mt-3">
                <h3 style="font-size:.95rem;margin-bottom:.75rem;"><i class="bi bi-file-text" style="color:var(--text-muted);"></i> Edición manual del archivo</h3>
                <p style="font-size:.85rem;color:var(--text-secondary);margin-bottom:.5rem;">
                    Podés editar directamente el archivo <code>data/usuarios.txt</code>.
                    Cada línea debe seguir este formato:
                </p>
                <code style="display:block;font-size:.8rem;padding:10px;background:rgba(0,0,0,.3);border-radius:6px;word-break:break-all;">
                    correo@ejemplo.com|$2y$10$HASH_BCRYPT|Nombre Apellido|activo
                </code>
                <small style="color:var(--text-muted);margin-top:.5rem;display:block;">
                    Las líneas que empiecen con # o // se ignoran (son comentarios).
                </small>
            </div>
        </div>

    </div>
</div>

<?php endif; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
// Generar clave aleatoria
function generarClave() {
    const chars = 'abcdefghjkmnpqrstuvwxyzABCDEFGHJKMNPQRSTUVWXYZ23456789@#!';
    let clave = '';
    for (let i = 0; i < 10; i++) {
        clave += chars[Math.floor(Math.random() * chars.length)];
    }
    document.getElementById('new_pass_field').value = clave;
    document.getElementById('new_pass_field').type = 'text';
}

// Simulación de hash (nota: en producción real, el hash se hace en servidor)
function generarHash() {
    const pass = document.getElementById('plain_pass').value;
    if (!pass) { alert('Escribí una contraseña primero.'); return; }
    // Llamada al servidor para generar el hash real
    fetch('/ciberseguridad/admin/hash_gen.php?p=' + encodeURIComponent(pass))
        .then(r => r.text())
        .then(hash => {
            document.getElementById('hash_result').style.display = 'block';
            document.getElementById('hash_output').textContent = hash.trim();
        })
        .catch(() => alert('Error al generar el hash. Verificá la conexión.'));
}
</script>
</body>
</html>
