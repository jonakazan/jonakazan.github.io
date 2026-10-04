<?php
$pageTitle    = 'Cuestionario — Módulo 1';
$activeModule = 'modulo1';
$activePage   = 'quiz';
require_once __DIR__ . '/../../includes/header.php';

// Definición del quiz
$preguntas = [
    1 => [
        'texto'    => '¿Qué es la seguridad informática?',
        'opciones' => [
            'A' => 'Un programa antivirus avanzado que bloquea el 100% de los ataques de forma automática sin que el usuario tenga que hacer nada.',
            'B' => 'El conjunto de medidas, hábitos y decisiones destinados a proteger nuestros equipos, nuestra información y nuestra tranquilidad digital.',
            'C' => 'El mantenimiento técnico de los cables y del procesador para evitar que la computadora se sobrecaliente.',
            'D' => 'El conjunto de leyes y sanciones penales que aplican los jueces cuando se comete un delito en Internet.',
        ],
        'correcta' => 'B',
        'explicacion' => 'La seguridad informática no es solo un antivirus. Es un conjunto de hábitos y decisiones cotidianas que todos debemos adoptar.',
    ],
    2 => [
        'texto'    => '¿Por qué es tan importante proteger nuestros dispositivos personales?',
        'opciones' => [
            'A' => 'Porque guardamos en ellos elementos valiosos como fotos familiares, conversaciones, documentos y datos bancarios que podrían ser usados para hacernos daño.',
            'B' => 'Porque si un dispositivo no tiene protección, la pantalla pierde brillo y los altavoces dejan de emitir sonido.',
            'C' => 'Porque los proveedores de Internet cobran una multa económica si detectan que un equipo no tiene contraseña.',
            'D' => 'Porque las computadoras se apagan automáticamente cada dos horas si no están protegidas.',
        ],
        'correcta' => 'A',
        'explicacion' => 'Los dispositivos almacenan activos de información valiosísimos: fotos, datos bancarios, conversaciones privadas y documentos de trabajo.',
    ],
    3 => [
        'texto'    => '¿En qué se diferencia la "Seguridad de la Información" de la "Ciberseguridad"?',
        'opciones' => [
            'A' => 'La Seguridad de la Información protege datos en cualquier soporte (papel, digital o hablado), mientras que la Ciberseguridad se enfoca en amenazas del entorno digital conectado.',
            'B' => 'La Ciberseguridad es para empresas grandes y la Seguridad de la Información es solo para uso personal en el hogar.',
            'C' => 'No existe ninguna diferencia; ambos términos significan exactamente lo mismo en todos los casos.',
            'D' => 'La Seguridad de la Información se encarga únicamente de los antivirus y la Ciberseguridad de las claves de Wi-Fi.',
        ],
        'correcta' => 'A',
        'explicacion' => 'La Seguridad de la Información es el concepto más amplio (incluye papel y voz), mientras que la Ciberseguridad se especializa en el ciberespacio e Internet.',
    ],
    4 => [
        'texto'    => 'Si un atacante logra entrar a un sistema y modifica los montos de una planilla de pagos sin autorización, ¿qué principio de la Tríada CIA se vio afectado?',
        'opciones' => [
            'A' => 'Confidencialidad.',
            'B' => 'Disponibilidad.',
            'C' => 'Integridad.',
            'D' => 'Autenticación.',
        ],
        'correcta' => 'C',
        'explicacion' => 'La alteración o modificación no autorizada de datos viola directamente el principio de Integridad: los datos ya no son exactos y completos.',
    ],
    5 => [
        'texto'    => 'Un corte de energía eléctrica deja fuera de servicio el servidor donde se guardan los archivos de trabajo durante todo un día. ¿Qué pilar de la seguridad se ha visto comprometido?',
        'opciones' => [
            'A' => 'Confidencialidad.',
            'B' => 'Disponibilidad.',
            'C' => 'Integridad.',
            'D' => 'Trazabilidad.',
        ],
        'correcta' => 'B',
        'explicacion' => 'La imposibilidad de acceder a la información (aunque no fue robada ni modificada) afecta la Disponibilidad: el servicio no estaba accesible cuando se necesitaba.',
    ],
    6 => [
        'texto'    => '¿Qué es una "vulnerabilidad" en ciberseguridad?',
        'opciones' => [
            'A' => 'Un virus informático que se transmite por correo electrónico.',
            'B' => 'Una debilidad, fallo o "puerta sin llave" en un programa, sistema o hábito que puede ser aprovechada por un atacante.',
            'C' => 'El costo económico que sufre una persona tras ser víctima de una estafa.',
            'D' => 'Un ciberdelincuente que intenta adivinar contraseñas por Internet.',
        ],
        'correcta' => 'B',
        'explicacion' => 'La vulnerabilidad es la debilidad previa que existe en el sistema o en nuestros hábitos. Sin vulnerabilidad, la amenaza no puede materializarse.',
    ],
    7 => [
        'texto'    => '¿Cuál es el principal truco que utilizan los delincuentes informáticos para lograr que les abramos la puerta?',
        'opciones' => [
            'A' => 'Romper los componentes físicos de las computadoras mediante pulsos de luz.',
            'B' => 'El engaño, provocando prisa, curiosidad o miedo para que la persona actúe sin pensar.',
            'C' => 'Desactivar la conexión a Internet de toda una ciudad de forma simultánea.',
            'D' => 'Aumentar el costo del servicio de cable para que la gente no pueda conectarse.',
        ],
        'correcta' => 'B',
        'explicacion' => 'La ingeniería social (engañar a las personas) es la técnica más usada. Explotan emociones como la urgencia, el miedo y la curiosidad para que actuemos sin reflexionar.',
    ],
    8 => [
        'texto'    => '¿Por qué se afirma que la seguridad informática no depende únicamente de tener un antivirus instalado?',
        'opciones' => [
            'A' => 'Porque los antivirus solo funcionan cuando la computadora está desconectada de la corriente.',
            'B' => 'Porque los delincuentes suelen usar el engaño hacia las personas, donde el antivirus no puede impedir que el usuario entregue sus datos voluntariamente.',
            'C' => 'Porque los antivirus fueron reemplazados por completo por las redes sociales.',
            'D' => 'Porque el antivirus solo sirve para borrar archivos de música antiguos.',
        ],
        'correcta' => 'B',
        'explicacion' => 'El factor humano es el eslabón más importante. Si una persona decide entregar su contraseña voluntariamente ante un engaño, ningún antivirus puede evitarlo.',
    ],
    9 => [
        'texto'    => '¿Cuál de las siguientes opciones representa un "activo digital" en nuestro día a día?',
        'opciones' => [
            'A' => 'El cable de alimentación del monitor de la computadora.',
            'B' => 'Un archivo con fotos familiares, una cuenta de correo o el acceso a la banca en línea.',
            'C' => 'La mesa de madera sobre la que apoyamos la notebook.',
            'D' => 'El soporte de plástico para colocar el teléfono celular en el auto.',
        ],
        'correcta' => 'B',
        'explicacion' => 'Los activos digitales son los recursos de información y servicios con valor personal o laboral: fotos, cuentas, documentos, accesos bancarios.',
    ],
    10 => [
        'texto'    => 'Ante un mensaje inesperado o sospechoso que nos exige una acción inmediata, ¿cuál es la actitud preventiva más eficaz?',
        'opciones' => [
            'A' => 'Hacer clic rápidamente en el enlace adjunto para verificar qué sucedió antes de que bloqueen la cuenta.',
            'B' => 'Mantener la calma, hacer una pausa y verificar la situación a través de canales oficiales sin usar los enlaces del mensaje.',
            'C' => 'Reenviar el mensaje a todos los contactos de la agenda para preguntarles si a ellos también les llegó.',
            'D' => 'Apagar el teléfono celular y no volver a encenderlo nunca más.',
        ],
        'correcta' => 'B',
        'explicacion' => 'La pausa reflexiva y la verificación independiente (sin usar los links del mensaje) son la defensa más efectiva ante la ingeniería social.',
    ],
];

// Procesar envío del quiz
$resultado = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['quiz_enviado'])) {
    // Verificar CSRF
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

    // Guardar resultado
    guardarQuizResultado($email, 'modulo1', $respuestas, $puntaje, count($preguntas));
    $resultado = ['puntaje' => $puntaje, 'total' => count($preguntas), 'respuestas' => $respuestas];
}

// Cargar resultado previo si existe
if ($resultado === null) {
    $progreso = cargarProgreso($email);
    if (isset($progreso['quiz_resultados']['modulo1'])) {
        $qr = $progreso['quiz_resultados']['modulo1'];
        $resultado = [
            'puntaje'   => $qr['puntaje'],
            'total'     => $qr['total'],
            'respuestas'=> array_map(fn($r, $num) => [
                'seleccionada' => $r['respuestas'][$num]['seleccionada'] ?? null,
                'correcta'     => $preguntas[$num]['correcta'],
                'es_correcta'  => $r['respuestas'][$num]['es_correcta'] ?? false,
                'explicacion'  => $preguntas[$num]['explicacion'],
            ], array_values($qr['respuestas']), array_keys($qr['respuestas'])),
        ];
        // Reconstruir respuestas indexadas
        $resultado['respuestas'] = [];
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

    <div class="module-badge"><i class="bi bi-pencil-square"></i> Cuestionario — Módulo 1</div>
    <h1>Evaluación del Módulo 1</h1>
    <p style="color:var(--text-secondary);margin-bottom:2rem;">
        Respondé las siguientes 10 preguntas. Seleccioná la opción que consideres correcta en cada caso.
        <?php if ($resultado): ?>
            Podés rehacer el cuestionario cuando quieras.
        <?php endif; ?>
    </p>

    <!-- Resultado si ya fue completado -->
    <?php if ($resultado): ?>
    <div class="content-block mb-4" style="border-color:<?= $resultado['puntaje'] >= 6 ? 'rgba(0,230,118,.3)' : 'rgba(255,215,64,.3)' ?>;
        background:<?= $resultado['puntaje'] >= 6 ? 'rgba(0,230,118,.05)' : 'rgba(255,215,64,.05)' ?>;">
        <div class="d-flex align-items-center gap-3 flex-wrap">
            <div style="font-size:3rem;">
                <?= $resultado['puntaje'] >= 6 ? '🏆' : '📚' ?>
            </div>
            <div>
                <h2 style="font-size:1.2rem;margin-bottom:.3rem;">
                    <?= $resultado['puntaje'] >= 6 ? '¡Muy bien! Superaste el módulo.' : 'Buen intento, repasá el contenido.' ?>
                </h2>
                <p style="margin:0;color:var(--text-secondary);">
                    Obtuviste <strong style="font-size:1.3rem;color:<?= $resultado['puntaje'] >= 6 ? 'var(--success)' : 'var(--warning)' ?>;">
                        <?= $resultado['puntaje'] ?>/<?= $resultado['total'] ?>
                    </strong> respuestas correctas
                    (<?= round($resultado['puntaje']/$resultado['total']*100) ?>%)
                </p>
            </div>
            <div class="ms-auto">
                <span class="result-badge <?= $resultado['puntaje'] >= 6 ? 'aprobado' : 'repaso' ?>">
                    <i class="bi bi-<?= $resultado['puntaje'] >= 6 ? 'check-circle-fill' : 'arrow-repeat' ?>"></i>
                    <?= $resultado['puntaje'] >= 6 ? 'Aprobado' : 'Para repasar' ?>
                </span>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <!-- Formulario del Quiz -->
    <form method="POST" action="" id="quiz-form">
        <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token']) ?>">
        <input type="hidden" name="quiz_enviado" value="1">

        <?php foreach ($preguntas as $num => $pregunta):
            $respUsuario = $resultado['respuestas'][$num] ?? null;
        ?>
        <div class="quiz-question" id="q<?= $num ?>-container">
            <div class="question-number">Pregunta <?= $num ?> de <?= count($preguntas) ?></div>
            <div class="question-text"><?= htmlspecialchars($pregunta['texto']) ?></div>

            <?php foreach ($pregunta['opciones'] as $letra => $textoOpcion):
                $esSeleccionada = $respUsuario && $respUsuario['seleccionada'] === $letra;
                $esCorrecta     = $letra === $pregunta['correcta'];

                $claseExtra = '';
                if ($respUsuario) {
                    if ($esSeleccionada && $respUsuario['es_correcta']) $claseExtra = 'correcta';
                    elseif ($esSeleccionada && !$respUsuario['es_correcta']) $claseExtra = 'incorrecta';
                    elseif (!$esSeleccionada && $esCorrecta) $claseExtra = 'correcta';
                }
            ?>
            <label class="option-label <?= $claseExtra ?>" for="q<?= $num ?>_<?= $letra ?>">
                <input
                    type="radio"
                    name="q<?= $num ?>"
                    id="q<?= $num ?>_<?= $letra ?>"
                    value="<?= $letra ?>"
                    <?= $esSeleccionada ? 'checked' : '' ?>
                    <?= $respUsuario ? 'disabled' : '' ?>
                >
                <span>
                    <strong><?= $letra ?>)</strong>
                    <?= htmlspecialchars($textoOpcion) ?>
                    <?php if ($respUsuario && $esSeleccionada && !$respUsuario['es_correcta']): ?>
                        <span style="color:var(--danger);font-size:.8rem;"> ✗ Incorrecto</span>
                    <?php elseif ($respUsuario && $esCorrecta): ?>
                        <span style="color:var(--success);font-size:.8rem;"> ✓ Correcta</span>
                    <?php endif; ?>
                </span>
            </label>
            <?php endforeach; ?>

            <!-- Explicación (solo después de enviar) -->
            <?php if ($respUsuario): ?>
            <div class="mt-2 p-3" style="background:rgba(255,255,255,.03);border-radius:8px;border-left:3px solid <?= $respUsuario['es_correcta'] ? 'var(--success)' : 'var(--warning)' ?>;">
                <small style="color:var(--text-secondary);">
                    <strong style="color:var(--text-primary);">💡 Explicación:</strong>
                    <?= htmlspecialchars($pregunta['explicacion']) ?>
                </small>
            </div>
            <?php endif; ?>
        </div>
        <?php endforeach; ?>

        <?php if (!$resultado): ?>
        <!-- Botón enviar -->
        <div class="d-flex justify-content-center mt-4">
            <button type="submit" id="btn-quiz" class="btn-secondary-cyber" style="padding:14px 40px;font-size:1rem;">
                <i class="bi bi-send-fill"></i> Enviar respuestas
            </button>
        </div>
        <?php else: ?>
        <!-- Botón rehacer -->
        <div class="d-flex justify-content-center mt-4 gap-3 flex-wrap">
            <button type="button" onclick="rehacerQuiz()" class="btn-outline-cyber">
                <i class="bi bi-arrow-repeat"></i> Rehacer quiz
            </button>
            <?php if (cursoCompletado($email)): ?>
            <a href="/ciberseguridad/informe.php" class="btn-cyber">
                <i class="bi bi-file-earmark-text"></i> Ver mi informe
            </a>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </form>

    <!-- Navegación -->
    <div class="page-nav">
        <a href="/ciberseguridad/modulos/modulo1/riesgos.php" class="btn-outline-cyber">
            <i class="bi bi-arrow-left"></i> Anterior
        </a>
        <a href="/ciberseguridad/modulos/modulo2/contrasenas.php" class="btn-cyber">
            Siguiente módulo (M2) <i class="bi bi-arrow-right"></i>
        </a>
        <a href="/ciberseguridad/dashboard.php" class="btn-outline-cyber">
            <i class="bi bi-house"></i> Volver al inicio
        </a>
    </div>

</div>
</main>

<script>
// Confirmar envío del quiz
document.getElementById('quiz-form')?.addEventListener('submit', function(e) {
    // Verificar que todas estén respondidas
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
    if (btn) {
        btn.innerHTML = '<i class="bi bi-hourglass-split"></i> Enviando...';
        btn.disabled = true;
    }
});

// Rehacer quiz: recarga sin parámetros para limpiar el resultado en pantalla
function rehacerQuiz() {
    if (confirm('¿Querés rehacer el cuestionario? Tus respuestas anteriores se reemplazarán.')) {
        // Limpiar resultado localmente y recargar
        window.location.href = '/ciberseguridad/modulos/modulo1/quiz.php?reset=1';
    }
}

// Scroll suave al primer error si hay resultado
<?php if ($resultado): ?>
window.addEventListener('load', function() {
    const primeroError = document.querySelector('.option-label.incorrecta');
    if (primeroError) {
        setTimeout(() => primeroError.scrollIntoView({behavior:'smooth', block:'center'}), 300);
    }
});
<?php endif; ?>
</script>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
