<?php
// Genera un hash bcrypt de una contraseña (usado por el panel admin)
// Solo accesible desde el panel admin en sesión
session_start();
if (!isset($_SESSION['admin_logged'])) {
    http_response_code(403);
    echo 'Acceso denegado';
    exit;
}
$pass = $_GET['p'] ?? '';
if (empty($pass) || strlen($pass) > 100) {
    echo 'Parámetro inválido';
    exit;
}
echo password_hash($pass, PASSWORD_BCRYPT);
