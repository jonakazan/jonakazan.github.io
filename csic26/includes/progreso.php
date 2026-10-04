<?php
// ============================================================
// FUNCIONES DE PROGRESO DEL ALUMNO
// ============================================================
require_once __DIR__ . '/config.php';

// Obtener ruta del archivo de progreso del usuario
function getProgresoFile(string $email): string {
    // Sanitizar email para usarlo como nombre de archivo
    $safe = preg_replace('/[^a-zA-Z0-9_\-]/', '_', $email);
    return PROGRESO_DIR . $safe . '.json';
}

// Cargar progreso del usuario
function cargarProgreso(string $email): array {
    $file = getProgresoFile($email);
    if (!file_exists($file)) {
        return ['paginas_vistas' => [], 'quiz_resultados' => [], 'completado' => false, 'fecha_inicio' => date('Y-m-d H:i:s')];
    }
    $data = json_decode(file_get_contents($file), true);
    return $data ?? ['paginas_vistas' => [], 'quiz_resultados' => [], 'completado' => false];
}

// Guardar progreso del usuario
function guardarProgreso(string $email, array $progreso): void {
    if (!is_dir(PROGRESO_DIR)) {
        mkdir(PROGRESO_DIR, 0750, true);
        // Proteger el directorio de progreso también
        file_put_contents(PROGRESO_DIR . '.htaccess', "Order Deny,Allow\nDeny from all\n");
    }
    $file = getProgresoFile($email);
    file_put_contents($file, json_encode($progreso, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}

// Marcar una página como vista
function marcarPaginaVista(string $email, string $moduloId, string $paginaId): void {
    $progreso = cargarProgreso($email);
    $key = $moduloId . '/' . $paginaId;
    if (!in_array($key, $progreso['paginas_vistas'])) {
        $progreso['paginas_vistas'][] = $key;
        $progreso['ultima_pagina']    = $key;
        $progreso['ultima_actividad'] = date('Y-m-d H:i:s');
    }
    // Verificar si completó todo el curso
    $totalPaginas = getTotalPaginas();
    if (count($progreso['paginas_vistas']) >= $totalPaginas && !$progreso['completado']) {
        $progreso['completado']      = true;
        $progreso['fecha_completado'] = date('Y-m-d H:i:s');
    }
    guardarProgreso($email, $progreso);
}

// Guardar resultados del quiz
function guardarQuizResultado(string $email, string $moduloId, array $respuestas, int $puntaje, int $total): void {
    $progreso = cargarProgreso($email);
    $progreso['quiz_resultados'][$moduloId] = [
        'respuestas' => $respuestas,
        'puntaje'    => $puntaje,
        'total'      => $total,
        'porcentaje' => round(($puntaje / $total) * 100),
        'fecha'      => date('Y-m-d H:i:s'),
    ];
    guardarProgreso($email, $progreso);
}

// Verificar si una página ya fue vista
function paginaFueVista(string $email, string $moduloId, string $paginaId): bool {
    $progreso = cargarProgreso($email);
    return in_array($moduloId . '/' . $paginaId, $progreso['paginas_vistas']);
}

// Calcular porcentaje de progreso
function getPorcentajeProgreso(string $email): int {
    $progreso = cargarProgreso($email);
    $total    = getTotalPaginas();
    if ($total === 0) return 0;
    return (int) min(100, round((count($progreso['paginas_vistas']) / $total) * 100));
}

// Verificar si el curso está completado
function cursoCompletado(string $email): bool {
    $progreso = cargarProgreso($email);
    return $progreso['completado'] ?? false;
}

// Generar datos del informe para el alumno
function generarDatosInforme(string $email, string $nombre): array {
    $progreso = cargarProgreso($email);
    $modulos  = MODULOS;
    $detalles = [];

    foreach ($modulos as $modId => $mod) {
        $quiz = $progreso['quiz_resultados'][$modId] ?? null;
        $paginasVistas = 0;
        foreach ($mod['paginas'] as $pagId => $pagTitulo) {
            if (in_array($modId . '/' . $pagId, $progreso['paginas_vistas'])) {
                $paginasVistas++;
            }
        }
        $detalles[] = [
            'titulo'        => $mod['titulo'],
            'paginas_total' => count($mod['paginas']),
            'paginas_vistas'=> $paginasVistas,
            'quiz'          => $quiz,
        ];
    }

    return [
        'nombre'          => $nombre,
        'email'           => $email,
        'fecha_inicio'    => $progreso['fecha_inicio'] ?? 'N/D',
        'fecha_completado'=> $progreso['fecha_completado'] ?? date('Y-m-d H:i:s'),
        'porcentaje'      => getPorcentajeProgreso($email),
        'modulos'         => $detalles,
        'completado'      => $progreso['completado'] ?? false,
    ];
}
