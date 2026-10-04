<?php
$pageTitle    = 'Cuestionario — Módulo 5';
$activeModule = 'modulo5';
$activePage   = 'quiz';
require_once __DIR__ . '/../../includes/header.php';

$preguntas = [
    1 => [
        'texto'    => '¿Por qué es riesgoso ingresar a nuestro homebanking o poner contraseñas estando conectados a una red Wi-Fi pública y abierta?',
        'opciones' => [
            'A' => 'Porque el nivel de batería del teléfono celular se agota a la mitad de velocidad.',
            'B' => 'Porque cualquier otra persona conectada a esa misma red abierta podría interceptar los datos no cifrados que viajan por el aire.',
            'C' => 'Porque las redes Wi-Fi públicas instalan automáticamente aplicaciones de pago en tu equipo.',
            'D' => 'Porque las empresas de Internet cobran una multa si usas Wi-Fi fuera de tu casa.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'En una red abierta compartida, cualquier persona en el mismo radio de alcance puede capturar el tráfico que viaja por el aire si no está protegido.',
    ],
    2 => [
        'texto'    => '¿Cuál es la primera medida recomendada al instalar o configurar el router Wi-Fi de nuestro hogar?',
        'opciones' => [
            'A' => 'Cambiar el usuario y la contraseña de administración que vienen configurados de fábrica.',
            'B' => 'Pintar el router de color negro para que no refleje la luz del sol.',
            'C' => 'Desconectar la antena del router para que la señal no salga de la habitación.',
            'D' => 'Escribir la contraseña del Wi-Fi en un cartel gigante en la puerta de la calle.',
        ],
        'correcta'   => 'A',
        'explicacion'=> 'Las claves de fábrica (como admin/admin) son públicas y los atacantes las prueban primero. Cambiarlas cierra la puerta trasera más elemental.',
    ],
    3 => [
        'texto'    => '¿Para qué sirve habilitar una "Red de Invitados" en el router de casa?',
        'opciones' => [
            'A' => 'Para regalar acceso a Internet a todos los vecinos del barrio sin pedirles nada a cambio.',
            'B' => 'Para aislar los dispositivos de las visitas y aparatos inteligentes, evitando que accedan a nuestras computadoras principales donde guardamos archivos personales.',
            'C' => 'Para aumentar el brillo de la pantalla del televisor cuando vemos películas.',
            'D' => 'Para evitar tener que pagar la factura del servicio de luz.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'Segmenta la red: las visitas y los dispositivos inteligentes (IoT) navegan por Internet sin poder ver ni escanear las computadoras con tus archivos privados.',
    ],
    4 => [
        'texto'    => '¿Qué nos indica la letra "S" en el protocolo "HTTPS" de una dirección web?',
        'opciones' => [
            'A' => 'Que la página web pertenece exclusivamente al gobierno de un país.',
            'B' => 'Que la comunicación entre nuestro navegador y el sitio web viaja cifrada de forma segura.',
            'C' => 'Que el sitio web funciona únicamente en computadoras de escritorio.',
            'D' => 'Que la página no tiene ningún tipo de imagen ni video.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'HTTPS significa HTTP + SSL/TLS: los datos viajan dentro de un túnel cifrado que protege contraseñas y datos bancarios contra espías en la red.',
    ],
    5 => [
        'texto'    => 'Si una página web tiene el ícono del candado y comienza con "HTTPS", ¿podemos asegurar que es 100% imposible que se trate de una estafa?',
        'opciones' => [
            'A' => 'Sí, porque los delincuentes tienen prohibido por ley usar candados digitales.',
            'B' => 'No, porque el candado solo indica que la conexión está cifrada; los estafadores también pueden poner candado a sus páginas falsas, por lo que siempre debemos verificar el nombre del sitio.',
            'C' => 'Sí, porque el candado elimina automáticamente todos los virus del teléfono.',
            'D' => 'No, salvo que la computadora esté conectada por un cable de color rojo.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'El candado solo certifica el cifrado del canal, no la moralidad del dueño. Hoy los ciberdelincuentes instalan certificados HTTPS en sus páginas de phishing.',
    ],
    6 => [
        'texto'    => '¿Qué es un "Gemelo Malvado" (Evil Twin) en el contexto de las redes Wi-Fi?',
        'opciones' => [
            'A' => 'Un virus que duplica el tamaño de los archivos PDF.',
            'B' => 'Una red Wi-Fi falsa creada por un atacante con el mismo nombre de un lugar público para que te conectes a través de su equipo y robarte datos.',
            'C' => 'Un tipo de router que tiene dos antenas exactamente iguales.',
            'D' => 'Una cuenta de correo electrónico que se envía mensajes a sí misma.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'Es un punto de acceso impostor que clona el nombre de una cafetería o aeropuerto para actuar como intermediario (Man-in-the-Middle) y capturar tráfico.',
    ],
    7 => [
        'texto'    => '¿Qué función cumple una aplicación de tipo VPN (Red Privada Virtual)?',
        'opciones' => [
            'A' => 'Crear un túnel privado cifrado para proteger nuestra información al navegar en redes no seguras o Wi-Fi públicas.',
            'B' => 'Aumentar el tamaño de la memoria RAM del teléfono celular de forma gratuita.',
            'C' => 'Reparar las pantallas rotas de las tablets mediante actualizaciones de software.',
            'D' => 'Borrar las fotos antiguas de la galería para que no ocupen espacio.',
        ],
        'correcta'   => 'A',
        'explicacion'=> 'La VPN encapsula y encripta todo tu tráfico desde tu dispositivo hasta el servidor de destino, volviéndolo ilegible para curiosos en la red pública.',
    ],
    8 => [
        'texto'    => '¿Qué tipo de cifrado se recomienda seleccionar en la configuración de la red Wi-Fi del hogar?',
        'opciones' => [
            'A' => 'WEP (el sistema más antiguo del mercado).',
            'B' => 'WPA2 o WPA3.',
            'C' => 'Sin cifrado (red abierta sin contraseña).',
            'D' => 'Cifrado textil de fibra óptica.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'WPA2 y WPA3 son los estándares modernos y robustos. WEP y WPA inicial son tecnologías obsoletas que se descifran en pocos minutos.',
    ],
    9 => [
        'texto'    => '¿Por qué es peligroso no revisar bien la dirección web (dominio) antes de poner nuestros datos bancarios?',
        'opciones' => [
            'A' => 'Porque si nos equivocamos de letra, la computadora emite un ruido molesto.',
            'B' => 'Porque los delincuentes crean páginas falsas con nombres muy parecidos al sitio oficial para engañarnos y quedarse con nuestras claves.',
            'C' => 'Porque los navegadores cobran un importe en dólares por cada búsqueda equivocada.',
            'D' => 'Porque se borra el historial de llamadas del teléfono celular.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'Técnica de Typosquatting / phishing: usan nombres casi idénticos para engañar a usuarios distraídos y capturar credenciales bancarias.',
    ],
    10 => [
        'texto'    => '¿Para qué sirve la función WPS en un router y por qué se aconseja tenerla desactivada?',
        'opciones' => [
            'A' => 'Sirve para conectar aparatos fácilmente pulsando un botón, pero se aconseja desactivarla porque tiene fallas de seguridad que permiten adivinar el acceso.',
            'B' => 'Sirve para enfriar el router cuando calienta y se desactiva cuando hace frío.',
            'C' => 'Sirve para cambiar el idioma de la computadora al inglés.',
            'D' => 'Sirve para apagar las luces del router durante la noche.',
        ],
        'correcta'   => 'A',
        'explicacion'=> 'El protocolo WPS utiliza un PIN numérico vulnerable a ataques de fuerza bruta que debilita gravemente la seguridad de la contraseña del Wi-Fi.',
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
    guardarQuizResultado($email, 'modulo5', $respuestas, $puntaje, count($preguntas));
    $resultado = ['puntaje' => $puntaje, 'total' => count($preguntas), 'respuestas' => $respuestas];
}

// Cargar resultado previo
if ($resultado === null) {
    $progreso = cargarProgreso($email);
    if (isset($progreso['quiz_resultados']['modulo5'])) {
        $qr = $progreso['quiz_resultados']['modulo5'];
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

    <div class="module-badge"><i class="bi bi-pencil-square"></i> Cuestionario — Módulo 5</div>
    <h1>Evaluación del Módulo 5</h1>
    <p style="color:var(--text-secondary);margin-bottom:2rem;">
        Respondé las 10 preguntas sobre Redes Wi-Fi, Router, Redes Públicas, Evil Twin, VPN, HTTPS y Navegación Segura.
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
        <a href="/ciberseguridad/modulos/modulo5/navegacion.php" class="btn-outline-cyber">
            <i class="bi bi-arrow-left"></i> Anterior
        </a>
        <a href="/ciberseguridad/modulos/modulo6/moviles.php" class="btn-cyber">
            Siguiente módulo (M6) <i class="bi bi-arrow-right"></i>
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
