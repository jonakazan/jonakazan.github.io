<?php
$pageTitle    = 'Cuestionario — Módulo 4';
$activeModule = 'modulo4';
$activePage   = 'quiz';
require_once __DIR__ . '/../../includes/header.php';

$preguntas = [
    1 => [
        'texto'    => '¿En qué consiste fundamentalmente la "Ingeniería Social" en ciberseguridad?',
        'opciones' => [
            'A' => 'En reparar la tarjeta madre de las computadoras mediante soldaduras especiales.',
            'B' => 'En manipular psicológicamente a las personas explotando emociones como la prisa, el miedo o la curiosidad para que entreguen sus datos o permitan el acceso.',
            'C' => 'En crear redes Wi-Fi públicas gratuitas para las plazas y hospitales.',
            'D' => 'En programar juegos de computadora para niños en edad escolar.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'La ingeniería social se enfoca en manipular el factor humano y sus emociones (urgencia, miedo, empatía) en lugar de vulnerar fallas de hardware o software.',
    ],
    2 => [
        'texto'    => '¿Cuál de los siguientes mensajes presenta un indicador claro de ser un ataque de Phishing?',
        'opciones' => [
            'A' => 'Un aviso programado en tu calendario para la reunión de mañana a las 10:00.',
            'B' => 'Un correo urgente no solicitado indicando que tu cuenta bancaria se bloqueará en 5 minutos si no ingresas a un enlace adjunto.',
            'C' => 'Una factura mensual oficial recibida desde el correo habitual de tu servicio de electricidad.',
            'D' => 'Un mensaje de confirmación de turno médico que solicitaste previamente por la web.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'Combina los tres ingredientes clásicos del phishing: urgencia desmedida (5 minutos), amenaza de bloqueo inminente y un enlace hacia un destino no verificado.',
    ],
    3 => [
        'texto'    => 'Recibes un SMS en tu teléfono diciendo: "Su paquete de correo está retenido por falta de pago de impuestos, ingrese a www.correo-tramite-falso.net". ¿Qué tipo de engaño es?',
        'opciones' => [
            'A' => 'Vishing.',
            'B' => 'Smishing.',
            'C' => 'Quishing.',
            'D' => 'Un ataque de Denegación de Servicio (DDoS).',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'El Smishing es la modalidad de phishing canalizada a través de mensajes de texto cortos (SMS) o mensajería de chat (WhatsApp).',
    ],
    4 => [
        'texto'    => 'Te llaman por teléfono afirmando que son del área de seguridad de tu banco y te piden que les dictes el código de verificación que acaba de llegar a tu cel. ¿Cómo se denomina esta estafa?',
        'opciones' => [
            'A' => 'Phishing por correo.',
            'B' => 'Vishing (estafa telefónica por voz).',
            'C' => 'Infección por gusano informático.',
            'D' => 'Actualización de firmware del router.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'Vishing proviene de Voice Phishing: el atacante usa llamadas de voz e impostación de autoridad para extraer códigos de un solo uso o tokens.',
    ],
    5 => [
        'texto'    => '¿Qué es el "Quishing"?',
        'opciones' => [
            'A' => 'Una variante de estafa que utiliza códigos QR manipulados o falsos para dirigir a la víctima a páginas web maliciosas.',
            'B' => 'Un tipo de teclado numérico que cambia de orden los números en cada inicio de sesión.',
            'C' => 'Un antivirus especial para computadoras portátiles antiguas.',
            'D' => 'Un programa que apaga el teléfono móvil cuando la batería está baja.',
        ],
        'correcta'   => 'A',
        'explicacion'=> 'El Quishing es la explotación del canal de códigos QR físicos (calcomanías pegadas en tótems/mesas) o digitales para dirigir a pasarelas fraudulentas.',
    ],
    6 => [
        'texto'    => 'Encuentras en Instagram una oferta de una notebook de alta gama a un precio equivalente al 10% de su valor real, exigiendo transferencia bancaria inmediata. ¿Qué riesgo principal existe?',
        'opciones' => [
            'A' => 'Que el sistema operativo de la notebook venga únicamente en idioma mandarín.',
            'B' => 'Que se trate de una tienda falsa creada para quedarse con tu dinero sin entregarte el producto.',
            'C' => 'Que el banco te cobre una multa por comprar insumos informáticos los fines de semana.',
            'D' => 'Que la notebook consuma más electricidad de la permitida.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'Patrón típico de fraude en comercio electrónico: precio absurdo e irresistible combinado con exigencia de pago inmediato por transferencia no reversible.',
    ],
    7 => [
        'texto'    => '¿En qué se diferencia un "Hacker Ético" (Sombrero Blanco) de un "Cracker" (Sombrero Negro)?',
        'opciones' => [
            'A' => 'El hacker ético trabaja solo en computadoras portátiles y el cracker en computadoras de escritorio.',
            'B' => 'El hacker ético busca vulnerabilidades con permiso para solucionarlas y proteger; el cracker lo hace con intenciones ilícitas de robo, daño o extorsión.',
            'C' => 'El cracker es un empleado bancario oficial y el hacker ético un oficial de policía.',
            'D' => 'No existe ninguna diferencia, ambos términos significan exactamente lo mismo.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'La línea divisoria fundamental es la autorización explícita previa y el propósito legítimo-defensivo frente a la ilegalidad maliciosa del cracker.',
    ],
    8 => [
        'texto'    => 'Aparece un cartel emergente en tu navegador web afirmando que tu computadora tiene 20 virus y que debes llamar a un 0800 para solucionarlo. ¿Qué debes hacer?',
        'opciones' => [
            'A' => 'Llamar inmediatamente al número indicado y darles acceso remoto a tu equipo.',
            'B' => 'Ignorar el mensaje engañoso, cerrar la ventana del navegador y no llamar a ningún número desconocido.',
            'C' => 'Transferir dinero a la cuenta que figura en el cartel emergente.',
            'D' => 'Llevar la computadora inmediatamente a la policía de tránsito.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'Los navegadores no pueden escanear virus en tu disco. Son falsas alarmas creadas para inducirte a llamar y cobrarte o instalar troyanos de acceso remoto.',
    ],
    9 => [
        'texto'    => 'Si una persona o grupo realiza ataques informáticos para tirar abajo sitios web gubernamentales en protesta por una causa social o política, ¿cómo se le clasifica?',
        'opciones' => [
            'A' => 'Hacker Ético.',
            'B' => 'Hacktivista.',
            'C' => 'Desarrollador de hardware.',
            'D' => 'Soporte técnico oficial.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'El hacktivismo está motivado por causas ideológicas, sociales o políticas, utilizando el ciberespacio como medio de protesta y disrupción.',
    ],
    10 => [
        'texto'    => 'Ante cualquier duda sobre la autenticidad de un mensaje o llamada bancaria, ¿cuál es la regla de oro para no caer en la trampa?',
        'opciones' => [
            'A' => 'Responder el mensaje pidiendo amablemente que nos demuestren que no son estafadores.',
            'B' => 'Colgar o cerrar el mensaje, hacer una pausa y comunicarse uno mismo a través del número oficial impreso al dorso de la tarjeta bancaria.',
            'C' => 'Ingresar la contraseña dos veces seguidas en el enlace que enviaron.',
            'D' => 'Borrar todos los archivos de la computadora.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'Principio de Ruptura de Canal: nunca validar la autenticidad usando el mismo canal dudoso que te contactó. Hay que cortar e iniciar contacto por vías oficiales verificadas.',
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
    guardarQuizResultado($email, 'modulo4', $respuestas, $puntaje, count($preguntas));
    $resultado = ['puntaje' => $puntaje, 'total' => count($preguntas), 'respuestas' => $respuestas];
}

// Cargar resultado previo
if ($resultado === null) {
    $progreso = cargarProgreso($email);
    if (isset($progreso['quiz_resultados']['modulo4'])) {
        $qr = $progreso['quiz_resultados']['modulo4'];
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

    <div class="module-badge"><i class="bi bi-pencil-square"></i> Cuestionario — Módulo 4</div>
    <h1>Evaluación del Módulo 4</h1>
    <p style="color:var(--text-secondary);margin-bottom:2rem;">
        Respondé las 10 preguntas sobre Ingeniería Social, Phishing, Smishing, Vishing, Quishing, tiendas falsas y perfiles de amenaza.
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
                    <?= $resultado['puntaje'] >= 6 ? '¡Muy bien! Módulo completado.' : 'Buen intento. Repasá el contenido.' ?>
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
                           <?= $isChecked ? 'checked' : '' ?>
                           <?= $resultado ? '' : '' ?>>
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
        <a href="/ciberseguridad/modulos/modulo4/actores.php" class="btn-outline-cyber">
            <i class="bi bi-arrow-left"></i> Anterior
        </a>
        <a href="/ciberseguridad/modulos/modulo5/wifi.php" class="btn-cyber">
            Siguiente módulo (M5) <i class="bi bi-arrow-right"></i>
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
