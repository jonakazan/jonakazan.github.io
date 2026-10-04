<?php
// ============================================================
// SCRIPT DE CONFIGURACIÓN INICIAL — setup.php
// ¡ELIMINAR ESTE ARCHIVO DESPUÉS DE USARLO!
// ============================================================

// Generar hash para la clave del admin
$claveAdmin = 'admin123'; // CAMBIÁ ESTO ANTES DE EJECUTAR

echo '<pre>';
echo "Hash para la clave '$claveAdmin':\n";
echo password_hash($claveAdmin, PASSWORD_BCRYPT);
echo "\n\n";
echo "Copiá ese hash en includes/config.php en ADMIN_PASSWORD_HASH\n";
echo "\nEjemplo de usuario de prueba:\n";

$emailPrueba = 'alumno@ejemplo.com';
$clavePrueba = 'Cyber2024!';
$hash = password_hash($clavePrueba, PASSWORD_BCRYPT);
echo "Email: $emailPrueba | Clave: $clavePrueba\n";
echo "Línea para data/usuarios.txt:\n";
echo "$emailPrueba|$hash|Alumno de Prueba|activo\n";

echo '</pre>';
echo '<p style="color:red;font-weight:bold;">⚠️ ELIMINÁ ESTE ARCHIVO DESPUÉS DE USARLO</p>';
