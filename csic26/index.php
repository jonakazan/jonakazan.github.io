<?php
// ============================================================
// PÁGINA DE LOGIN — index.php
// ============================================================
require_once __DIR__ . '/includes/auth.php';

iniciarSesionSegura();

// Si ya está logueado, ir al dashboard
if (!empty($_SESSION['usuario_email'])) {
    header('Location: /ciberseguridad/dashboard.php');
    exit;
}

$error = '';
$msg   = $_GET['msg'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Protección CSRF básica
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== ($_SESSION['csrf_token'] ?? '')) {
        $error = 'Token de seguridad inválido. Por favor recargá la página.';
    } else {
        $email    = trim($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';

        if (empty($email) || empty($password)) {
            $error = 'Por favor completá todos los campos.';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = 'El formato del correo electrónico no es válido.';
        } else {
            $usuario = autenticarUsuario($email, $password);
            if ($usuario) {
                loginUsuario($usuario);
                header('Location: /ciberseguridad/dashboard.php');
                exit;
            } else {
                // Pequeño delay para evitar ataques de fuerza bruta
                sleep(1);
                $error = 'Correo electrónico o contraseña incorrectos.';
            }
        }
    }
}

// Generar token CSRF
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Plataforma de formación: <?= htmlspecialchars(CURSO_NOMBRE) ?>. Ingresá con tu correo y contraseña asignada.">
    <title>Ingresar — <?= htmlspecialchars(CURSO_NOMBRE) ?></title>
    <link rel="icon" type="image/svg+xml" href="/ciberseguridad/assets/img/favicon.svg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/ciberseguridad/assets/css/style.css">
</head>
<body>
<div class="login-wrapper">
    <div class="login-card fade-in-up">

        <!-- Logo y título -->
        <div class="login-logo">🔐</div>
        <h1 class="login-title" style="font-size:1.6rem;"><?= htmlspecialchars(CURSO_NOMBRE) ?></h1>
        <p class="login-subtitle">Ingresá con tu correo registrado y la contraseña asignada</p>

        <!-- Mensajes del sistema -->
        <?php if ($msg === 'sesion_expirada'): ?>
            <div class="alert-cyber warning">
                <i class="bi bi-clock-history"></i>
                Tu sesión expiró por inactividad. Volvé a ingresar.
            </div>
        <?php endif; ?>

        <?php if ($error): ?>
            <div class="alert-cyber danger">
                <i class="bi bi-exclamation-triangle-fill"></i>
                <?= htmlspecialchars($error) ?>
            </div>
        <?php endif; ?>

        <!-- Formulario -->
        <form method="POST" action="/ciberseguridad/index.php" autocomplete="off">
            <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token']) ?>">

            <div class="form-group-cyber">
                <label class="form-label-cyber" for="email">
                    <i class="bi bi-envelope"></i> Correo Electrónico
                </label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    class="form-input-cyber"
                    placeholder="tucorreo@ejemplo.com"
                    value="<?= htmlspecialchars($_POST['email'] ?? '') ?>"
                    required
                    autocomplete="email"
                >
            </div>

            <div class="form-group-cyber">
                <label class="form-label-cyber" for="password">
                    <i class="bi bi-key"></i> Contraseña
                </label>
                <div style="position:relative;">
                    <input
                        type="password"
                        id="password"
                        name="password"
                        class="form-input-cyber"
                        placeholder="••••••••"
                        required
                        autocomplete="current-password"
                        style="padding-right: 46px;"
                    >
                    <button type="button" id="togglePassword"
                        style="position:absolute;right:12px;top:50%;transform:translateY(-50%);background:none;border:none;color:var(--text-muted);cursor:pointer;font-size:1.1rem;"
                        aria-label="Mostrar/ocultar contraseña">
                        <i class="bi bi-eye" id="eyeIcon"></i>
                    </button>
                </div>
            </div>

            <button type="submit" id="btn-login" class="btn-cyber" style="width:100%;justify-content:center;margin-top:0.5rem;">
                <i class="bi bi-box-arrow-in-right"></i>
                Ingresar al curso
            </button>
        </form>

        <!-- Footer de la card -->
        <p style="text-align:center;margin-top:2rem;font-size:0.8rem;color:var(--text-muted);">
            ¿No tenés contraseña? Contactá a tu instructor.<br>
            <span style="color:var(--text-muted);opacity:.5;">v1.0 — <?= date('Y') ?></span>
        </p>
    </div>
</div>

<script>
// Toggle mostrar/ocultar contraseña
document.getElementById('togglePassword').addEventListener('click', function() {
    const input = document.getElementById('password');
    const icon  = document.getElementById('eyeIcon');
    if (input.type === 'password') {
        input.type = 'text';
        icon.className = 'bi bi-eye-slash';
    } else {
        input.type = 'password';
        icon.className = 'bi bi-eye';
    }
});

// Efecto loading en el botón
document.querySelector('form').addEventListener('submit', function() {
    const btn = document.getElementById('btn-login');
    btn.innerHTML = '<i class="bi bi-hourglass-split"></i> Verificando...';
    btn.disabled = true;
});
</script>
</body>
</html>
