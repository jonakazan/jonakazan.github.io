<?php
require_once __DIR__ . '/includes/auth.php';
iniciarSesionSegura();
logoutUsuario();
header('Location: /ciberseguridad/index.php');
exit;
