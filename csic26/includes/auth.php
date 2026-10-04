<?php
// ============================================================
// FUNCIONES DE AUTENTICACIÓN Y SESIÓN
// ============================================================
require_once __DIR__ . '/config.php';

// Iniciar sesión de forma segura
function iniciarSesionSegura(): void {
    if (session_status() === PHP_SESSION_NONE) {
        session_set_cookie_params([
            'lifetime' => SESSION_TIMEOUT,
            'path'     => '/',
            'secure'   => false, // Cambiar a true si usás HTTPS
            'httponly' => true,
            'samesite' => 'Strict',
        ]);
        session_start();
    }
}

// Verificar si el usuario está logueado, sino redirigir al login
function requireLogin(): void {
    iniciarSesionSegura();
    if (empty($_SESSION['usuario_email'])) {
        header('Location: /ciberseguridad/index.php?msg=sesion_expirada');
        exit;
    }
    // Verificar timeout de sesión
    if (isset($_SESSION['ultimo_acceso']) && (time() - $_SESSION['ultimo_acceso']) > SESSION_TIMEOUT) {
        session_destroy();
        header('Location: /ciberseguridad/index.php?msg=sesion_expirada');
        exit;
    }
    $_SESSION['ultimo_acceso'] = time();
}

// Autenticar usuario contra el archivo txt
function autenticarUsuario(string $email, string $password): array|false {
    if (!file_exists(USUARIOS_FILE)) {
        return false;
    }

    $email = strtolower(trim($email));
    $lineas = file(USUARIOS_FILE, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lineas as $linea) {
        // Ignorar comentarios
        if (str_starts_with(trim($linea), '#') || str_starts_with(trim($linea), '//') || str_starts_with(trim($linea), '?')) {
            continue;
        }
        $partes = explode('|', $linea);
        if (count($partes) < 4) continue;

        [$emailArchivo, $hashArchivo, $nombre, $estado] = $partes;

        if (strtolower(trim($emailArchivo)) === $email && trim($estado) === 'activo') {
            if (password_verify($password, trim($hashArchivo))) {
                return [
                    'email'  => trim($emailArchivo),
                    'nombre' => trim($nombre),
                ];
            }
        }
    }
    return false;
}

// Login: crear sesión para el usuario
function loginUsuario(array $usuario): void {
    iniciarSesionSegura();
    session_regenerate_id(true);
    $_SESSION['usuario_email']  = $usuario['email'];
    $_SESSION['usuario_nombre'] = $usuario['nombre'];
    $_SESSION['ultimo_acceso']  = time();
}

// Logout: destruir sesión
function logoutUsuario(): void {
    iniciarSesionSegura();
    session_unset();
    session_destroy();
}

// Obtener el nombre del usuario en sesión
function getNombreUsuario(): string {
    return $_SESSION['usuario_nombre'] ?? 'Alumno';
}

// Obtener el email del usuario en sesión
function getEmailUsuario(): string {
    return $_SESSION['usuario_email'] ?? '';
}
