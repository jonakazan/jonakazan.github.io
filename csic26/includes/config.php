<?php
// ============================================================
// CONFIGURACIÓN GLOBAL DEL SISTEMA
// ============================================================

// Ruta absoluta al archivo de usuarios (fuera del web root idealmente)
// Ajustá esta ruta según tu servidor
define('USUARIOS_FILE', __DIR__ . '/../data/usuarios.txt');
define('PROGRESO_DIR',  __DIR__ . '/../data/progreso/');

// Nombre del curso, docente y versión
define('CURSO_NOMBRE', 'Curso de Seguridad Informática y Ciberseguridad');
define('CURSO_PROFESOR', 'Prof. Kazan Jonathan M.');
define('CURSO_EMAIL_INSTRUCTOR', 'jonakazan@gmail.com');
define('CURSO_COPYRIGHT', 'Curso generado por Prof. Kazan Jonathan M. - Año 2026 todos los derechos reservados');
define('CURSO_VERSION', '1.8');

// Clave del panel de administración (cambiá esto)
// Generá un hash con: echo password_hash('tu_clave', PASSWORD_BCRYPT);
define('ADMIN_PASSWORD_HASH', '$2y$10$pY73/wOmTZDP7qvf018YiOvlVLK6X5wzFgSvF2THkYDv1N/JA1v9.');
define('ADMIN_USER', 'admin');

// Tiempo de sesión en segundos (1 hora)
define('SESSION_TIMEOUT', 3600);

// Módulos del curso y sus páginas (en orden)
define('MODULOS', [
    'modulo1' => [
        'titulo' => 'Módulo 1: Fundamentos de la Ciberseguridad y Gestión de Riesgos',
        'paginas' => [
            'intro'    => '1.1 ¿Qué es la Seguridad Informática?',
            'pilares'  => '1.2 Tres Conceptos que se Complementan',
            'activos'  => '1.3 La Información como Activo Valioso',
            'triada'   => '1.4 Los Tres Pilares: La Tríada CIA',
            'riesgos'  => '1.5 Gestión de Riesgos y Delincuentes',
            'quiz'     => 'Cuestionario de Evaluación',
        ]
    ],
    'modulo2' => [
        'titulo' => 'Módulo 2: Credenciales, Control de Acceso y Gestión de Identidad',
        'paginas' => [
            'contrasenas' => '2.1 Contraseñas Fuertes',
            'gestores'    => '2.2 Gestores de Contraseñas y Passkeys',
            'dosfactores' => '2.3 Doble Factor de Autenticación (2FA)',
            'control'     => '2.4 Control de Acceso y Trazabilidad',
            'quiz'        => 'Cuestionario de Evaluación',
        ]
    ],
    'modulo3' => [
        'titulo' => 'Módulo 3: Software Malicioso y Amenazas Digitales',
        'paginas' => [
            'malware'  => '3.1 ¿Qué es el Malware?',
            'tipos'    => '3.2 Clasificación de Amenazas Maliciosas',
            'botnets'  => '3.3 Botnets, DDoS e IA en Amenazas',
            'quiz'     => 'Cuestionario de Evaluación',
        ]
    ],
    'modulo4' => [
        'titulo' => 'Módulo 4: Ingeniería Social y Fraudes Digitales',
        'paginas' => [
            'ingenieria' => '4.1 ¿Qué es la Ingeniería Social?',
            'variantes'  => '4.2 Variantes de Engaño Digital',
            'actores'    => '4.3 Perfiles de Actores de Amenaza',
            'quiz'       => 'Cuestionario de Evaluación',
        ]
    ],
    'modulo5' => [
        'titulo' => 'Módulo 5: Conexiones Seguras, Redes y Navegación Web',
        'paginas' => [
            'wifi'       => '5.1 Redes Wi-Fi: Router y Redes Públicas',
            'navegacion' => '5.2 Navegación Web Segura y HTTPS',
            'quiz'       => 'Cuestionario de Evaluación',
        ]
    ],
    'modulo6' => [
        'titulo' => 'Módulo 6: Protección de Dispositivos Móviles, Almacenamiento y Respaldos',
        'paginas' => [
            'moviles'        => '6.1 Seguridad en Dispositivos Móviles',
            'almacenamiento' => '6.2 Memorias USB y Dispositivos Extraíbles',
            'respaldos'      => '6.3 La Regla 3-2-1 de Copias de Seguridad',
            'quiz'           => 'Cuestionario de Evaluación',
        ]
    ],
    'modulo7' => [
        'titulo' => 'Módulo 7: Privacidad, Huella Digital y Criptografía',
        'paginas' => [
            'huella'       => '7.1 Datos Personales y Huella Digital',
            'brechas'      => '7.2 Brechas de Datos y Robo de Identidad',
            'criptografia' => '7.3 Criptografía y Firmas Digitales',
            'quiz'         => 'Cuestionario de Evaluación',
        ]
    ],
    'modulo8' => [
        'titulo' => 'Módulo 8: Hábitos, Cultura Digital y Plan de Seguridad Integrador',
        'paginas' => [
            'vacunas'   => '8.1 Las 5 Vacunas Digitales',
            'zerotrust' => '8.2 Zero Trust y Defensa en Profundidad',
            'plan'      => '8.3 Marco NIST CSF 2.0 y Plan Personal',
            'quiz'      => 'Cuestionario de Evaluación',
        ]
    ],
    // Módulos futuros se agregan aquí
]);

// Total de páginas del curso
function getTotalPaginas(): int {
    $total = 0;
    foreach (MODULOS as $modulo) {
        $total += count($modulo['paginas']);
    }
    return $total;
}
