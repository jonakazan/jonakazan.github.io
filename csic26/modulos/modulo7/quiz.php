<?php
$pageTitle    = 'Cuestionario — Módulo 7';
$activeModule = 'modulo7';
$activePage   = 'quiz';
require_once __DIR__ . '/../../includes/header.php';

$preguntas = [
    1 => [
        'texto'    => '¿A qué nos referimos cuando hablamos de nuestra "Huella Digital Pasiva"?',
        'opciones' => [
            'A' => 'A la marca de la huella dactilar que queda pegada en la pantalla de cristal del teléfono.',
            'B' => 'A los datos que los sistemas recopilan automáticamente mientras navegamos (como la ubicación IP o el tipo de dispositivo) sin que los publiquemos activamente.',
            'C' => 'A las fotos y publicaciones que subimos de forma voluntaria a nuestras redes sociales.',
            'D' => 'A las contraseñas que anotamos en una libreta de papel en casa.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'Diferenciación clave entre los datos entregados voluntariamente (activa) vs. la telemetría y rastreo automático (pasiva) que registran cookies y servidores.',
    ],
    2 => [
        'texto'    => '¿Por qué se considera peligroso subir a redes sociales una foto del pasaje de avión antes de salir de viaje?',
        'opciones' => [
            'A' => 'Porque la cámara del teléfono pierde nitidez al enfocar papeles impresos.',
            'B' => 'Porque los códigos de barras y QR impresos en el pasaje contienen datos personales que pueden ser escaneados para robar o anular tu reserva.',
            'C' => 'Porque las aerolíneas cobran un impuesto adicional por cada foto publicada.',
            'D' => 'Porque el avión no puede despegar si los pasajeros publican fotos de los pasajes.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'Los códigos de barras y QR contienen el código de reserva (PNR) y datos del pasajero legibles con cualquier app móvil para modificar o anular el vuelo.',
    ],
    3 => [
        'texto'    => '¿Qué representa el concepto de "Brecha de Datos" (Data Breach) en una empresa?',
        'opciones' => [
            'A' => 'El tiempo que tarda un empleado en responder un correo electrónico de trabajo.',
            'B' => 'Un incidente en el que un atacante logra acceder y robar bases de datos confidenciales de la empresa con información de sus clientes.',
            'C' => 'El costo de compra de computadoras portátiles para el personal.',
            'D' => 'Una interrupción en el suministro de energía eléctrica de la oficina.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'Es la exfiltración masiva no autorizada de bases de datos corporativas con información privada de miles o millones de clientes.',
    ],
    4 => [
        'texto'    => '¿En qué consiste el "Robo de Identidad" en el entorno digital?',
        'opciones' => [
            'A' => 'En comprar un teléfono celular de la misma marca y modelo que el de otra persona.',
            'B' => 'En utilizar los datos personales de otra persona sin su consentimiento para cometer fraudes, pedir préstamos o abrir cuentas a su nombre.',
            'C' => 'En olvidar la contraseña del correo personal y tener que crear una cuenta nueva.',
            'D' => 'En cambiar el nombre de usuario en un juego de computadora.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'Suplantación no consentida de la identidad legal o digital de un tercero para obtener beneficios financieros, créditos o cometer estafas.',
    ],
    5 => [
        'texto'    => '¿Qué garantiza el "Cifrado de extremo a extremo" en aplicaciones de mensajería como WhatsApp?',
        'opciones' => [
            'A' => 'Que los mensajes se guardan impresos en papel en las oficinas de la empresa.',
            'B' => 'Que los mensajes viajan codificados y solo pueden ser descifrados en el dispositivo del destinatario, impidiendo que terceros los lean en el camino.',
            'C' => 'Que los mensajes se envían únicamente cuando ambos usuarios están conectados a la misma red Wi-Fi.',
            'D' => 'Que la aplicación analiza lo que escribes para enviarte ofertas comerciales.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'Cifrado asimétrico E2EE: el contenido viaja blindado de punta a punta y la clave matemática de descifrado reside solo en el dispositivo receptor.',
    ],
    6 => [
        'texto'    => '¿Por qué pegar una foto escaneada de nuestra firma de gancho en un archivo Word no es un método seguro de firma?',
        'opciones' => [
            'A' => 'Porque ocupa demasiada memoria RAM en el disco rígido.',
            'B' => 'Porque cualquier persona puede copiar esa imagen de la firma y pegarla en cualquier otro documento sin nuestro consentimiento.',
            'C' => 'Porque los archivos Word no permiten insertar imágenes de color negro.',
            'D' => 'Porque las impresoras no pueden imprimir documentos con fotos de firmas.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'La firma electrónica simple carece de no repudio: la imagen es fácilmente recortable y pegable en cualquier otro documento, sin vincular matemáticamente el contenido.',
    ],
    7 => [
        'texto'    => '¿Cuál es la ventaja fundamental de utilizar una "Firma Digital" autenticada sobre un documento PDF?',
        'opciones' => [
            'A' => 'Permite cambiar el color de fondo de las páginas del documento.',
            'B' => 'Garantiza matemáticamente la identidad de la persona que firmó y asegura que el documento no fue alterado posteriormente.',
            'C' => 'Hace que el archivo se envíe el doble de rápido por correo electrónico.',
            'D' => 'Permite firmar documentos únicamente desde televisores inteligentes.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'Integridad e inmutabilidad garantizadas por criptografía asimétrica y certificados digitales: si alguien altera una sola coma, la firma se anula.',
    ],
    8 => [
        'texto'    => 'Si te enteras por las noticias de que una tienda en línea donde compras habitualmente sufrió una filtración de datos, ¿cuál es la primera medida preventiva a tomar?',
        'opciones' => [
            'A' => 'Apagar el router de tu casa por tres días seguidos.',
            'B' => 'Cambiar inmediatamente la contraseña de esa tienda y de cualquier otra cuenta donde usaras esa misma clave.',
            'C' => 'Tirar la computadora a la basura y comprar una nueva.',
            'D' => 'Enviar un mensaje de protesta a todos tus contactos.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'Frena el ataque de Credential Stuffing en cascada: cambiar la contraseña en el sitio vulnerado y en cualquier otro donde se haya repetido.',
    ],
    9 => [
        'texto'    => '¿Qué término define la mala práctica de publicar un exceso de información personal y cotidiana en redes sociales?',
        'opciones' => [
            'A' => 'Phishing.',
            'B' => 'Oversharing (Sobreexposición).',
            'C' => 'Ransomware.',
            'D' => 'Backup en la nube.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'Oversharing: sobreexposición voluntaria que amplía la superficie de ataque y regala información para ingeniería social.',
    ],
    10 => [
        'texto'    => '¿Por qué los delincuentes buscan información nuestra en la huella digital pasiva o activa antes de intentar una estafa?',
        'opciones' => [
            'A' => 'Para saber qué marca de monitor recomendarnos comprar.',
            'B' => 'Para diseñar engaños personalizados (Spear Phishing) que parezcan tan reales que no nos generen ninguna sospecha.',
            'C' => 'Para ajustar el brillo de la pantalla de nuestro dispositivo a distancia.',
            'D' => 'Para calcular el consumo de luz de nuestro hogar.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'Fase de reconocimiento: la información que dejamos en nuestra huella digital permite a los delincuentes armar engaños hiperpersonalizados de gran efectividad.',
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
    guardarQuizResultado($email, 'modulo7', $respuestas, $puntaje, count($preguntas));
    $resultado = ['puntaje' => $puntaje, 'total' => count($preguntas), 'respuestas' => $respuestas];
}

// Cargar resultado previo
if ($resultado === null) {
    $progreso = cargarProgreso($email);
    if (isset($progreso['quiz_resultados']['modulo7'])) {
        $qr = $progreso['quiz_resultados']['modulo7'];
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

    <div class="module-badge"><i class="bi bi-pencil-square"></i> Cuestionario — Módulo 7</div>
    <h1>Evaluación del Módulo 7</h1>
    <p style="color:var(--text-secondary);margin-bottom:2rem;">
        Respondé las 10 preguntas sobre Huella Digital, Oversharing, Brechas de Datos, Cifrado E2EE y Firma Digital.
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
        <a href="/ciberseguridad/modulos/modulo7/criptografia.php" class="btn-outline-cyber">
            <i class="bi bi-arrow-left"></i> Anterior
        </a>
        <a href="/ciberseguridad/modulos/modulo8/vacunas.php" class="btn-cyber">
            Siguiente módulo (M8) <i class="bi bi-arrow-right"></i>
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
