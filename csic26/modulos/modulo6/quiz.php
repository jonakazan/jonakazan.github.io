<?php
$pageTitle    = 'Cuestionario — Módulo 6';
$activeModule = 'modulo6';
$activePage   = 'quiz';
require_once __DIR__ . '/../../includes/header.php';

$preguntas = [
    1 => [
        'texto'    => '¿Por qué se recomienda ocultar la vista previa de las notificaciones en la pantalla de bloqueo del teléfono móvil?',
        'opciones' => [
            'A' => 'Porque el teléfono consume la mitad de la memoria RAM cuando muestra notificaciones.',
            'B' => 'Para evitar que cualquier persona que tome el teléfono pueda leer los códigos de verificación por SMS (2FA) sin necesidad de desbloquear el equipo.',
            'C' => 'Porque las notificaciones con texto distorsionan la cámara de fotos.',
            'D' => 'Porque las empresas telefónicas cobran un recargo por cada notificación recibida.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'Previene la exposición no autorizada de tokens OTP o códigos SMS de seguridad en la pantalla de bloqueo ante miradas indiscretas o robo del celular.',
    ],
    2 => [
        'texto'    => '¿Qué peligro principal conlleva instalar aplicaciones móviles mediante archivos .APK descargados de páginas web desconocidas?',
        'opciones' => [
            'A' => 'Que el volumen del altavoz del teléfono disminuya de forma permanente.',
            'B' => 'Que carecen de las revisiones de seguridad de las tiendas oficiales y suelen contener virus o programas espía ocultos.',
            'C' => 'Que el teléfono cambia automáticamente de idioma cada 24 horas.',
            'D' => 'Que se borran las fotos más antiguas de la galería.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'Los repositorios no oficiales no auditan el código; instalar un archivo .APK externo suele introducir troyanos bancarios, spyware o adware agresivo.',
    ],
    3 => [
        'texto'    => 'Instalas una simple aplicación de linterna en tu celular y esta te solicita acceso a tu lista de contactos, micrófono y ubicación por GPS. ¿Cómo debes actuar?',
        'opciones' => [
            'A' => 'Aceptar todos los permisos de inmediato para que la linterna ilumine con mayor potencia.',
            'B' => 'Desconfiar y rechazar esos permisos o desinstalar la app, ya que una linterna no necesita acceder a tus contactos ni a tu ubicación para funcionar.',
            'C' => 'Llevar el teléfono a reparar a un centro técnico.',
            'D' => 'Comprar una tarjeta de memoria de mayor capacidad.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'Aplica el principio de mínimo privilegio: una linterna solo necesita permiso para el flash LED; pedir contactos y GPS delata intenciones maliciosas de recolección de datos.',
    ],
    4 => [
        'texto'    => 'Encuentras un pendrive tirado en la recepción de tu trabajo o en la calle. ¿Cuál es la conducta más prudente?',
        'opciones' => [
            'A' => 'Conectarlo rápidamente a tu computadora personal para ver qué fotos tiene guardadas y buscar a su dueño.',
            'B' => 'No conectarlo nunca a tus equipos y entregarlo al área de seguridad o mantenimiento, ya que podría estar infectado a propósito con malware.',
            'C' => 'Conectarlo a la computadora pero manteniendo apretada la tecla de mayúsculas.',
            'D' => 'Formatearlo directamente usando un reproductor de música.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'Técnica de Drop USB / BadUSB: los atacantes explotan la curiosidad dejando memorias infectadas para saltar las defensas perimetrales e infiltrar redes.',
    ],
    5 => [
        'texto'    => '¿Qué establece el número "3" dentro de la famosa "Regla 3-2-1" de las copias de seguridad?',
        'opciones' => [
            'A' => 'Que se deben hacer las copias de seguridad únicamente 3 veces al año.',
            'B' => 'Que debemos contar con el archivo original y al menos 2 copias de respaldo adicionales (3 copias en total).',
            'C' => 'Que solo se pueden guardar archivos de hasta 3 Megabytes de tamaño.',
            'D' => 'Que el proceso de respaldo debe tardar como máximo 3 minutos.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'Redundancia mínima: 1 archivo original de trabajo + al menos 2 respaldos adicionales para garantizar que si un archivo falla, siempre queden dos copias.',
    ],
    6 => [
        'texto'    => 'Según la Regla 3-2-1, ¿por qué es necesario utilizar al menos "2 soportes o tecnologías distintas" para nuestras copias?',
        'opciones' => [
            'A' => 'Porque si una tecnología falla físicamente (por ejemplo, se rompe el disco rígido), la otra copia en un pendrive o nube seguirá funcionando.',
            'B' => 'Porque los archivos cambian de color cuando se guardan en el mismo tipo de disco.',
            'C' => 'Porque las computadoras se apagan si detectan dos discos iguales conectados.',
            'D' => 'Para evitar pagar la factura de conexión a Internet.',
        ],
        'correcta'   => 'A',
        'explicacion'=> 'Diversificación tecnológica: evitar puntos únicos de fallo. Si un disco mecánico se golpea o falla, la copia en nube o memoria sólida permanece accesible.',
    ],
    7 => [
        'texto'    => '¿Cuál es el objetivo de tener "1 copia fuera de casa o de la oficina" (en la nube o en otro domicilio)?',
        'opciones' => [
            'A' => 'Cumplir con una ley de impuestos internacionales sobre datos.',
            'B' => 'Garantizar que, ante un evento grave como un robo, incendio o desastre en nuestro espacio habitual, nuestros datos sigan a salvo en otro sitio.',
            'C' => 'Aumentar la velocidad de encendido de la computadora.',
            'D' => 'Permitir que los vecinos puedan consultar nuestros archivos personales.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'Aislamiento geográfico (Offsite): protege tus activos más valiosos contra robos, roturas edilicias, inundaciones o incendios en la sede principal.',
    ],
    8 => [
        'texto'    => '¿Por qué debemos desconectar el disco externo de respaldo de la computadora una vez que terminamos de hacer el backup?',
        'opciones' => [
            'A' => 'Para que el disco no se caliente ni consuma electricidad durante la noche.',
            'B' => 'Porque si un virus tipo Ransomware infecta la computadora, también infectará y bloqueará los archivos del disco que esté conectado en ese momento.',
            'C' => 'Porque las computadoras pierden la conexión a Internet si tienen cables enchufados por más de dos horas.',
            'D' => 'Para que el antivirus no borre los archivos del disco externo.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'Aislamiento offline (Air-Gap): si el disco queda conectado permanentemente, el ransomware cifrará la unidad de respaldo impidiendo recuperar tus archivos.',
    ],
    9 => [
        'texto'    => '¿Para qué sirve tener activada la función "Buscar mi Dispositivo" en un smartphone?',
        'opciones' => [
            'A' => 'Para encontrar redes Wi-Fi gratuitas cuando caminamos por la calle.',
            'B' => 'Para poder localizar el teléfono en un mapa, bloquearlo o borrar su contenido a distancia en caso de robo o extravío.',
            'C' => 'Para que la batería dure el doble de tiempo durante los viajes.',
            'D' => 'Para descargar juegos de forma más rápida.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'Permite respuesta rápida ante pérdida o robo: ubicar el celular por GPS, bloquearlo remotamente e iniciar el borrado seguro para resguardar la privacidad.',
    ],
    10 => [
        'texto'    => '¿Cuál de las siguientes opciones representa la mejor estrategia para proteger nuestras fotos y documentos más valiosos?',
        'opciones' => [
            'A' => 'Confiar en que la computadora nunca se va a romper ni va a entrar ningún virus.',
            'B' => 'Mantener copias de seguridad periódicas aplicando la regla 3-2-1 e ir probando de vez en cuando que los archivos de respaldo abren correctamente.',
            'C' => 'Imprimir todas las fotos digitales en papel y guardar los discos en un cajón sin llave.',
            'D' => 'Guardar todos los archivos importantes exclusivamente en la papelera de reciclaje de la computadora.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'La mejor protección combina redundancia 3-2-1, almacenamiento periódico y verificación periódica de restauración para certificar la integridad de los datos.',
    ],
];

// Procesar envío
$resultado = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['quiz_enviado'])) {
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== ($_SESSION['csrf_token'] ?? '')) {
        die('Token inválido');
    }
    $respuestas = [];
    $puntaje    = 0;
    foreach ($preguntas as $num => $pregunta) {
        $respuesta = $_POST['q' . $num] ?? null;
        $correcta  = ($respuesta === $pregunta['correcta']);
        if ($correcta) $puntaje++;
        $respuestas[$num] = [
            'seleccionada' => $respuesta,
            'correcta'     => $pregunta['correcta'],
            'es_correcta'  => $correcta,
            'explicacion'  => $pregunta['explicacion'],
        ];
    }
    guardarQuizResultado($email, 'modulo6', $respuestas, $puntaje, count($preguntas));
    $resultado = ['puntaje' => $puntaje, 'total' => count($preguntas), 'respuestas' => $respuestas];
}

// Cargar resultado previo
if ($resultado === null) {
    $progreso = cargarProgreso($email);
    if (isset($progreso['quiz_resultados']['modulo6'])) {
        $qr = $progreso['quiz_resultados']['modulo6'];
        $resultado = ['puntaje' => $qr['puntaje'], 'total' => $qr['total'], 'respuestas' => []];
        foreach ($qr['respuestas'] as $num => $r) {
            $resultado['respuestas'][$num] = [
                'seleccionada' => $r['seleccionada'],
                'correcta'     => $preguntas[$num]['correcta'],
                'es_correcta'  => $r['es_correcta'],
                'explicacion'  => $preguntas[$num]['explicacion'],
            ];
        }
    }
}
?>

<main class="main-content">
<div class="fade-in-up quiz-container">

    <div class="module-badge"><i class="bi bi-pencil-square"></i> Cuestionario — Módulo 6</div>
    <h1>Evaluación del Módulo 6</h1>
    <p style="color:var(--text-secondary);margin-bottom:2rem;">
        Respondé las 10 preguntas sobre Dispositivos Móviles, Drop USB, Regla 3-2-1 y Aislamiento de Respaldos.
        <?php if ($resultado): ?> Podés rehacer el cuestionario cuando quieras.<?php endif; ?>
    </p>

    <!-- Resultado previo -->
    <?php if ($resultado): ?>
    <div class="content-block mb-4" style="border-color:<?= $resultado['puntaje'] >= 6 ? 'rgba(0,230,118,.3)' : 'rgba(255,215,64,.3)' ?>;
        background:<?= $resultado['puntaje'] >= 6 ? 'rgba(0,230,118,.05)' : 'rgba(255,215,64,.05)' ?>;">
        <div class="d-flex align-items-center gap-3 flex-wrap">
            <div style="font-size:3rem;"><?= $resultado['puntaje'] >= 6 ? '🏆' : '📚' ?></div>
            <div>
                <h2 style="font-size:1.2rem;margin-bottom:.3rem;">
                    <?= $resultado['puntaje'] >= 6 ? '¡Excelente trabajo! Módulo completado.' : 'Buen intento. Repasá el contenido.' ?>
                </h2>
                <div class="score-display">
                    Puntaje obtenido: <strong><?= $resultado['puntaje'] ?></strong> de <?= $resultado['total'] ?>
                    (<?= round(($resultado['puntaje'] / $resultado['total']) * 100) ?>%)
                    <?php if ($resultado['puntaje'] >= 6): ?>
                        <span class="badge bg-success ms-2">Aprobado</span>
                    <?php else: ?>
                        <span class="badge bg-warning text-dark ms-2">Requiere repaso</span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <!-- Formulario del Quiz -->
    <form method="POST" id="quiz-form">
        <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token'] ?? '') ?>">
        <input type="hidden" name="quiz_enviado" value="1">

        <?php foreach ($preguntas as $num => $pregunta):
            $respGuardada  = $resultado['respuestas'][$num] ?? null;
            $seleccionada  = $respGuardada['seleccionada'] ?? null;
            $esCorrecta    = $respGuardada['es_correcta'] ?? null;
            $bloqueClase   = '';
            if ($resultado) {
                $bloqueClase = $esCorrecta ? 'pregunta-correcta' : 'pregunta-incorrecta';
            }
        ?>
        <div class="quiz-question <?= $bloqueClase ?>" id="pregunta-<?= $num ?>">
            <div class="question-header">
                <span class="question-number">Pregunta <?= $num ?> de <?= count($preguntas) ?></span>
                <?php if ($resultado): ?>
                    <?php if ($esCorrecta): ?>
                        <span class="badge bg-success"><i class="bi bi-check-circle"></i> Correcta</span>
                    <?php else: ?>
                        <span class="badge bg-danger"><i class="bi bi-x-circle"></i> Incorrecta</span>
                    <?php endif; ?>
                <?php endif; ?>
            </div>

            <p class="question-text"><?= htmlspecialchars($pregunta['texto']) ?></p>

            <div class="options-list">
                <?php foreach ($pregunta['opciones'] as $letra => $opcionTexto):
                    $inputName   = 'q' . $num;
                    $inputId     = 'q' . $num . '_' . $letra;
                    $isChecked   = ($seleccionada === $letra);
                    $claseOpcion = '';

                    if ($resultado) {
                        if ($letra === $pregunta['correcta']) {
                            $claseOpcion = 'correcta';
                        } elseif ($isChecked && !$esCorrecta) {
                            $claseOpcion = 'incorrecta';
                        }
                    }
                ?>
                <label class="option-label <?= $claseOpcion ?>" for="<?= $inputId ?>">
                    <input type="radio"
                           name="<?= $inputName ?>"
                           id="<?= $inputId ?>"
                           value="<?= $letra ?>"
                           <?= $isChecked ? 'checked' : '' ?>>
                    <span class="option-letter"><?= $letra ?></span>
                    <span class="option-text"><?= htmlspecialchars($opcionTexto) ?></span>
                </label>
                <?php endforeach; ?>
            </div>

            <?php if ($resultado && isset($pregunta['explicacion'])): ?>
            <div class="explicacion-box <?= $esCorrecta ? 'exp-correcta' : 'exp-incorrecta' ?>">
                <i class="bi <?= $esCorrecta ? 'bi-check-circle-fill' : 'bi-info-circle-fill' ?>"></i>
                <div>
                    <strong><?= $esCorrecta ? '¡Correcto!' : 'Respuesta correcta: Opción ' . $pregunta['correcta'] ?></strong>
                    <p style="margin:4px 0 0;font-size:.85rem;color:var(--text-secondary);">
                        <?= htmlspecialchars($pregunta['explicacion']) ?>
                    </p>
                </div>
            </div>
            <?php endif; ?>

        </div>
        <?php endforeach; ?>

        <div class="d-flex gap-3 justify-content-between align-items-center flex-wrap mt-4">
            <button type="submit" class="btn-cyber" id="btn-quiz">
                <i class="bi bi-send-check"></i>
                <?= $resultado ? 'Reenviar respuestas' : 'Enviar Cuestionario' ?>
            </button>
            <?php if ($resultado): ?>
            <div style="font-size:.85rem;color:var(--text-muted);">
                <i class="bi bi-info-circle"></i> Los resultados quedan guardados automáticamente en tu progreso.
            </div>
            <?php endif; ?>
        </div>
    </form>

    <div class="page-nav">
        <a href="/ciberseguridad/modulos/modulo6/respaldos.php" class="btn-outline-cyber">
            <i class="bi bi-arrow-left"></i> Anterior
        </a>
        <a href="/ciberseguridad/modulos/modulo7/huella.php" class="btn-cyber">
            Siguiente módulo (M7) <i class="bi bi-arrow-right"></i>
        </a>
        <?php if ($resultado && cursoCompletado($email)): ?>
        <a href="/ciberseguridad/informe.php" class="btn-cyber">
            <i class="bi bi-award-fill"></i> Ver Informe Final
        </a>
        <?php endif; ?>
        <a href="/ciberseguridad/dashboard.php" class="btn-outline-cyber">
            <i class="bi bi-house"></i> Volver al inicio
        </a>
    </div>

</div>
</main>

<script>
document.getElementById('quiz-form')?.addEventListener('submit', function(e) {
    const total = <?= count($preguntas) ?>;
    let respondidas = 0;
    for (let i = 1; i <= total; i++) {
        if (document.querySelector(`input[name="q${i}"]:checked`)) respondidas++;
    }
    if (respondidas < total) {
        e.preventDefault();
        alert(`Por favor respondé todas las preguntas. Te faltan ${total - respondidas}.`);
        return;
    }
    const btn = document.getElementById('btn-quiz');
    if (btn) { btn.innerHTML = '<i class="bi bi-hourglass-split"></i> Enviando...'; btn.disabled = true; }
});
<?php if ($resultado): ?>
window.addEventListener('load', function() {
    const primeroError = document.querySelector('.option-label.incorrecta');
    if (primeroError) setTimeout(() => primeroError.scrollIntoView({behavior:'smooth',block:'center'}), 300);
});
<?php endif; ?>
</script>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
