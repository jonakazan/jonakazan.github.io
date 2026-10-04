<?php
$pageTitle    = 'Cuestionario — Módulo 8';
$activeModule = 'modulo8';
$activePage   = 'quiz';
require_once __DIR__ . '/../../includes/header.php';

$preguntas = [
    1 => [
        'texto'    => '¿Cuál es el objetivo fundamental de la "Pausa de 5 Segundos" ante un mensaje inesperado?',
        'opciones' => [
            'A' => 'Dar tiempo a que el teléfono descargue la batería por completo.',
            'B' => 'Frenar el impulso emocional (prisa, miedo o entusiasmo) provocado por el atacante para razonar antes de actuar.',
            'C' => 'Permitir que la computadora cambie el idioma del teclado automáticamente.',
            'D' => 'Esperar a que el mensaje se reenvíe solo a la comisaría más cercana.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'Aislar la respuesta impulsiva ante la urgencia artificial provocada por el atacante para recuperar el juicio crítico.',
    ],
    2 => [
        'texto'    => 'Recibes un mensaje de WhatsApp de un número desconocido con la foto de perfil de un amigo pidiéndote una transferencia urgente por un problema mecánico. ¿Cómo debes aplicar la "Verificación Independiente"?',
        'opciones' => [
            'A' => 'Transferir la mitad del dinero pedido para ayudarlo rápido.',
            'B' => 'Responder el mensaje preguntándole si realmente es él.',
            'C' => 'Llamar directamente a tu amigo a su número telefónico habitual o comunicarte por otro medio fuera de ese chat para confirmar si es real.',
            'D' => 'Reenviar el mensaje a un grupo de vecinos para juntar el dinero entre todos.',
        ],
        'correcta'   => 'C',
        'explicacion'=> 'Ruptura de canal: nunca validar una sospecha dentro del mismo chat entrante desconocido. Se debe contactar a la persona por su número habitual fuera del mensaje.',
    ],
    3 => [
        'texto'    => '¿En qué consiste el principio de seguridad denominado "Zero Trust" (Confianza Cero)?',
        'opciones' => [
            'A' => 'En no volver a comprar nunca más dispositivos electrónicos ni teléfonos inteligentes.',
            'B' => 'En no confiar implícitamente en ningún mensaje, usuario o dispositivo, exigiendo verificación continua sin importar de dónde provenga.',
            'C' => 'En eliminar todas las contraseñas del hogar y dejar las redes Wi-Fi abiertas.',
            'D' => 'En apagar el router Wi-Fi durante todos los fines de semana.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'Paradigma Zero Trust: asumir que la red puede estar comprometida y verificar continuamente cada solicitud de acceso.',
    ],
    4 => [
        'texto'    => '¿Qué busca lograr la estrategia de "Defensa en Profundidad"?',
        'opciones' => [
            'A' => 'Usar una sola contraseña extremadamente larga para todos los servicios de la casa.',
            'B' => 'Implementar capas de protección superpuestas para que, si una barrera falla, las demás detengan el ataque.',
            'C' => 'Guardar la computadora dentro de un cajón bajo llave de hierro.',
            'D' => 'Instalar cuatro programas antivirus de marcas distintas al mismo tiempo en la misma computadora.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'Redundancia defensiva: disponer de múltiples barreras (PIN, cifrado, 2FA, backups) para que el fallo de una capa no comprometa todo el sistema.',
    ],
    5 => [
        'texto'    => '¿Por qué se afirma que las actualizaciones del sistema operativo y de las aplicaciones son fundamentales para la seguridad?',
        'opciones' => [
            'A' => 'Porque aumentan el tamaño de la pantalla del dispositivo.',
            'B' => 'Porque corrigen fallas de seguridad (vulnerabilidades) que los delincuentes utilizan para colarse en los equipos.',
            'C' => 'Porque cambian de color los íconos de las aplicaciones todos los meses.',
            'D' => 'Porque permiten ver películas sin conexión a Internet.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'Las actualizaciones aplican parches a brechas descubiertas en el software, cerrando las puertas de entrada al malware.',
    ],
    6 => [
        'texto'    => 'Si sospechas que tu computadora acaba de ser infectada por un virus activo o un Ransomware, ¿cuál debe ser tu primera acción inmediata?',
        'opciones' => [
            'A' => 'Pagar de inmediato la suma de dinero que aparezca en pantalla.',
            'B' => 'Desconectar el equipo de la red Wi-Fi o del cable de Internet para evitar que el virus se propague a otros dispositivos.',
            'C' => 'Dejar la computadora encendida y marcharte de vacaciones por una semana.',
            'D' => 'Publicar en redes sociales la lista de todos tus archivos infectados.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'Contención inmediata: aislar el equipo de la red frena la propagación lateral del virus hacia otros dispositivos y corta la comunicación con el atacante.',
    ],
    7 => [
        'texto'    => 'Según el marco NIST CSF 2.0, ¿a qué función corresponde la tarea de realizar copias de seguridad (backups) y usarlas para restaurar el sistema tras un ataque?',
        'opciones' => [
            'A' => 'Gobernar e Identificar.',
            'B' => 'Proteger y Recuperar.',
            'C' => 'Formatear e Imprimir.',
            'D' => 'Desconectar y Vender.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'Hacer el backup es una medida preventiva de la fase Proteger; usarlo para restablecer los datos es el corazón de la fase Recuperar.',
    ],
    8 => [
        'texto'    => '¿Por qué el factor humano es considerado tanto el eslabón más vulnerable como el escudo más poderoso de la ciberseguridad?',
        'opciones' => [
            'A' => 'Porque los seres humanos son las únicas criaturas que pueden fabricar cables de red.',
            'B' => 'Porque aunque los sistemas tengan la mejor tecnología, un error humano por engaño puede abrir las puertas, pero unos buenos hábitos de las personas pueden detener la mayoría de los ataques.',
            'C' => 'Porque las computadoras se apagan si no sienten la presencia de una persona cerca.',
            'D' => 'Porque la tecnología no necesita contraseñas cuando las personas están presentes.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'La mejor tecnología falla si un usuario entrega la clave, pero una persona consciente con hábitos sólidos frena la inmensa mayoría de las amenazas.',
    ],
    9 => [
        'texto'    => '¿Cuál de los siguientes hábitos NO forma parte de las 5 Vacunas Digitales?',
        'opciones' => [
            'A' => 'Usar contraseñas largas y únicas para cada cuenta importante.',
            'B' => 'Activar la Verificación en Dos Pasos (2FA) en el correo y WhatsApp.',
            'C' => 'Hacer clic rápidamente en todos los enlaces que nos lleguen por correo para verificar si son reales.',
            'D' => 'Mantener los dispositivos y aplicaciones siempre actualizados.',
        ],
        'correcta'   => 'C',
        'explicacion'=> 'Hacer clic precipitadamente es justamente la conducta de riesgo que las vacunas digitales buscan erradicar mediante la pausa de 5 segundos.',
    ],
    10 => [
        'texto'    => '¿Cuál es el beneficio de contar con un Plan de Ciberseguridad Personal organizado en nuestra vida diaria?',
        'opciones' => [
            'A' => 'Garantizar que nunca más tengamos que pagar por la conexión a Internet.',
            'B' => 'Transitar el mundo digital con tranquilidad, sustituyendo el miedo o la paranoia por hábitos de prevención y respuestas claras ante cualquier imprevisto.',
            'C' => 'Aumentar la memoria RAM de nuestros teléfonos sin gastar dinero.',
            'D' => 'Convertirnos automáticamente en programadores profesionales de sistemas.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'El objetivo final de la ciberseguridad: transformar la incertidumbre y el temor en tranquilidad, cultura preventiva y libertad digital.',
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
    guardarQuizResultado($email, 'modulo8', $respuestas, $puntaje, count($preguntas));
    $resultado = ['puntaje' => $puntaje, 'total' => count($preguntas), 'respuestas' => $respuestas];
}

// Cargar resultado previo
if ($resultado === null) {
    $progreso = cargarProgreso($email);
    if (isset($progreso['quiz_resultados']['modulo8'])) {
        $qr = $progreso['quiz_resultados']['modulo8'];
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

    <div class="module-badge"><i class="bi bi-award-fill"></i> Cuestionario Final — Módulo 8</div>
    <h1>Evaluación del Módulo 8: Hábitos y Plan Integrador</h1>
    <p style="color:var(--text-secondary);margin-bottom:2rem;">
        Respondé las 10 preguntas finales sobre las 5 Vacunas Digitales, Zero Trust, Defensa en Profundidad y el Marco NIST CSF 2.0.
        <?php if ($resultado): ?> Podés rehacer el cuestionario cuando quieras.<?php endif; ?>
    </p>

    <!-- Resultado previo -->
    <?php if ($resultado): ?>
    <div class="content-block mb-4" style="border-color:<?= $resultado['puntaje'] >= 6 ? 'rgba(0,230,118,.3)' : 'rgba(255,215,64,.3)' ?>;
        background:<?= $resultado['puntaje'] >= 6 ? 'rgba(0,230,118,.05)' : 'rgba(255,215,64,.05)' ?>;">
        <div class="d-flex align-items-center gap-3 flex-wrap">
            <div style="font-size:3.5rem;"><?= $resultado['puntaje'] >= 6 ? '🎉 🎓' : '📚' ?></div>
            <div>
                <h2 style="font-size:1.3rem;margin-bottom:.3rem;">
                    <?= $resultado['puntaje'] >= 6 ? '¡Felicitaciones! Has completado el Módulo Integrador.' : 'Buen intento. Repasá el contenido.' ?>
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
                <?php if ($resultado['puntaje'] >= 6): ?>
                <div class="mt-3">
                    <a href="/ciberseguridad/informe.php" class="btn-cyber">
                        <i class="bi bi-file-earmark-pdf-fill"></i> Descargar mi Informe del Curso
                    </a>
                </div>
                <?php endif; ?>
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
                <?= $resultado ? 'Reenviar respuestas' : 'Enviar Cuestionario Final' ?>
            </button>
            <?php if ($resultado): ?>
            <div style="font-size:.85rem;color:var(--text-muted);">
                <i class="bi bi-info-circle"></i> Los resultados quedan guardados automáticamente en tu progreso.
            </div>
            <?php endif; ?>
        </div>
    </form>

    <div class="page-nav">
        <a href="/ciberseguridad/modulos/modulo8/plan.php" class="btn-outline-cyber">
            <i class="bi bi-arrow-left"></i> Anterior
        </a>
        <a href="/ciberseguridad/informe.php" class="btn-cyber">
            <i class="bi bi-file-earmark-text-fill"></i> Ver Informe Final del Curso
        </a>
        <a href="/ciberseguridad/dashboard.php" class="btn-outline-cyber">
            <i class="bi bi-house"></i> Dashboard
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
