<?php
$pageTitle    = 'Cuestionario — Módulo 2';
$activeModule = 'modulo2';
$activePage   = 'quiz';
require_once __DIR__ . '/../../includes/header.php';

$preguntas = [
    1 => [
        'texto'    => '¿Con qué elemento de la vida cotidiana se compara habitualmente a la contraseña en ciberseguridad?',
        'opciones' => [
            'A' => 'Con la llave de la puerta de entrada de nuestra casa.',
            'B' => 'Con el color de la pintura de las paredes exteriores.',
            'C' => 'Con la marca del televisor que tenemos en el salón.',
            'D' => 'Con el número de teléfono fijo del vecino.',
        ],
        'correcta'   => 'A',
        'explicacion'=> 'La contraseña es el cerrojo principal de entrada a tu espacio digital personal, igual que la llave de tu casa te da acceso a tu hogar.',
    ],
    2 => [
        'texto'    => '¿Cuál de las siguientes opciones representa una contraseña sólida y recomendada?',
        'opciones' => [
            'A' => '12345678',
            'B' => 'juan2026',
            'C' => 'Luna-Verde-Sobre-El-Mar#2026',
            'D' => 'contraseña',
        ],
        'correcta'   => 'C',
        'explicacion'=> 'Luna-Verde-Sobre-El-Mar#2026 cumple con ser una frase de acceso (passphrase) larga, combinando palabras, mayúsculas, números y símbolos. Es prácticamente imposible de adivinar.',
    ],
    3 => [
        'texto'    => '¿Por qué es peligroso utilizar la misma contraseña en el correo, la red social y la cuenta bancaria?',
        'opciones' => [
            'A' => 'Porque el proveedor de Internet reduce la velocidad de conexión al detectar claves iguales.',
            'B' => 'Porque si un solo sitio web sufre una filtración, los delincuentes usarán esa misma clave para intentar ingresar a todas tus demás cuentas.',
            'C' => 'Porque las contraseñas duplicadas consumen el doble de memoria en la pantalla.',
            'D' => 'Porque el teléfono se apaga automáticamente cada vez que iniciás sesión.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'Esto se llama ataque de reutilización de credenciales (Credential Stuffing). Una sola filtración de datos puede comprometer todas tus cuentas si usás la misma contraseña.',
    ],
    4 => [
        'texto'    => '¿Qué es un "Gestor de Contraseñas"?',
        'opciones' => [
            'A' => 'Un técnico especializado que acude al domicilio para cambiar el router.',
            'B' => 'Una aplicación segura que guarda y cifra todas tus contraseñas bajo una única Contraseña Maestra.',
            'C' => 'Un sitio web donde se pueden comprar listas de claves para videojuegos.',
            'D' => 'Un cable especial que conecta la computadora al teclado de forma segura.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'Un gestor de contraseñas es una bóveda digital cifrada que simplifica la gestión de contraseñas únicas y complejas para cada servicio, sin necesitar memorizar todas.',
    ],
    5 => [
        'texto'    => '¿Qué hábito con las contraseñas representa un riesgo importante para la seguridad?',
        'opciones' => [
            'A' => 'Utilizar un gestor de contraseñas confiable.',
            'B' => 'Escribir las claves en papeles pegados junto al monitor o enviarlas por mensaje de texto.',
            'C' => 'Crear contraseñas de más de 12 caracteres.',
            'D' => 'Cambiar la contraseña inmediatamente si sospechamos que fue descubierta.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'Exponer claves físicamente o transmitirlas en texto plano anula completamente la seguridad que buscabas al crearlas.',
    ],
    6 => [
        'texto'    => '¿En qué consiste la Verificación en Dos Pasos o Doble Factor de Autenticación (2FA)?',
        'opciones' => [
            'A' => 'En escribir la misma contraseña dos veces seguidas en el cuadro de texto.',
            'B' => 'En exigir un código extra o confirmación en tu teléfono móvil además de la contraseña tradicional.',
            'C' => 'En tener dos cuentas de correo electrónico abiertas al mismo tiempo.',
            'D' => 'En reiniciar el dispositivo dos veces antes de ingresar al banco.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'El 2FA añade un factor de posesión o biometría independiente de la clave. Aunque te roben la contraseña, sin el segundo factor no pueden entrar.',
    ],
    7 => [
        'texto'    => '¿Qué es una "Passkey" (Clave de Paso)?',
        'opciones' => [
            'A' => 'Una clave secreta que se imprime en una tarjeta plástica de crédito.',
            'B' => 'Un estándar moderno que sustituye a las contraseñas tradicionales usando la biometría (huella/rostro) o el PIN del propio dispositivo.',
            'C' => 'Un programa que elimina las fotos antiguas para liberar espacio.',
            'D' => 'Una contraseña que solo puede usar el administrador del edificio.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'Las Passkeys son tecnología FIDO que elimina el uso de contraseñas vulnerables al phishing, asociando el acceso a tu dispositivo físico y biometría.',
    ],
    8 => [
        'texto'    => '¿En qué consiste el "Principio de Mínimo Privilegio" en el control de acceso?',
        'opciones' => [
            'A' => 'En otorgar a cada usuario únicamente los permisos y accesos estrictamente necesarios para realizar sus funciones.',
            'B' => 'En pagar el precio más bajo posible por las licencias de los programas.',
            'C' => 'En permitir que todos los empleados accedan a la totalidad de los archivos de la empresa sin restricciones.',
            'D' => 'En usar contraseñas de solo 4 números para no ocupar memoria en el servidor.',
        ],
        'correcta'   => 'A',
        'explicacion'=> 'El Principio de Mínimo Privilegio limita la superficie de impacto reduciendo permisos al mínimo indispensable. Si una cuenta es comprometida, el daño queda contenido.',
    ],
    9 => [
        'texto'    => '¿Cuál es la función del proceso de "Trazabilidad" en un sistema informático?',
        'opciones' => [
            'A' => 'Comprobar la velocidad del procesador de la computadora.',
            'B' => 'Registrar eventos y acciones (quién accedió, cuándo y qué modificó) para poder auditar e investigar incidentes.',
            'C' => 'Cambiar automáticamente el fondo de pantalla todos los días.',
            'D' => 'Borrar las contraseñas antiguas al cabo de una semana.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'Los logs de trazabilidad mantienen el registro de eventos para auditoría y respuesta ante incidentes. Son la memoria del sistema.',
    ],
    10 => [
        'texto'    => '¿Qué debemos hacer si recibimos un mensaje o correo pidiéndonos que entreguemos nuestra contraseña para "verificar la cuenta"?',
        'opciones' => [
            'A' => 'Entregar la contraseña inmediatamente para evitar que nos cierren la cuenta.',
            'B' => 'No entregar jamás la contraseña, ya que ninguna entidad legítima te pedirá tu clave por mensaje o correo.',
            'C' => 'Responder enviando únicamente la mitad de la contraseña.',
            'D' => 'Reenviar el mensaje a todos nuestros amigos para que ellos también envíen sus claves.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'Regla fundamental: las instituciones legítimas (bancos, correo, redes sociales) NUNCA solicitan contraseñas por canales no seguros como mensajes o emails.',
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
    guardarQuizResultado($email, 'modulo2', $respuestas, $puntaje, count($preguntas));
    $resultado = ['puntaje' => $puntaje, 'total' => count($preguntas), 'respuestas' => $respuestas];
}

// Cargar resultado previo
if ($resultado === null) {
    $progreso = cargarProgreso($email);
    if (isset($progreso['quiz_resultados']['modulo2'])) {
        $qr = $progreso['quiz_resultados']['modulo2'];
        $resultado = [
            'puntaje'   => $qr['puntaje'],
            'total'     => $qr['total'],
            'respuestas'=> [],
        ];
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

    <div class="module-badge"><i class="bi bi-pencil-square"></i> Cuestionario — Módulo 2</div>
    <h1>Evaluación del Módulo 2</h1>
    <p style="color:var(--text-secondary);margin-bottom:2rem;">
        Respondé las siguientes 10 preguntas sobre contraseñas, gestores, 2FA y control de acceso.
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
                    <?= $resultado['puntaje'] >= 6 ? '¡Excelente! Completaste el módulo.' : 'Buen intento. Repasá el contenido.' ?>
                </h2>
                <p style="margin:0;color:var(--text-secondary);">
                    Obtuviste <strong style="font-size:1.3rem;color:<?= $resultado['puntaje'] >= 6 ? 'var(--success)' : 'var(--warning)' ?>;">
                        <?= $resultado['puntaje'] ?>/<?= $resultado['total'] ?>
                    </strong> (<?= round($resultado['puntaje']/$resultado['total']*100) ?>%)
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

    <!-- Formulario quiz -->
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
                <input type="radio" name="q<?= $num ?>" id="q<?= $num ?>_<?= $letra ?>"
                    value="<?= $letra ?>" <?= $esSeleccionada ? 'checked' : '' ?> <?= $respUsuario ? 'disabled' : '' ?>>
                <span>
                    <strong><?= $letra ?>)</strong> <?= htmlspecialchars($textoOpcion) ?>
                    <?php if ($respUsuario && $esSeleccionada && !$respUsuario['es_correcta']): ?>
                        <span style="color:var(--danger);font-size:.8rem;"> ✗ Incorrecto</span>
                    <?php elseif ($respUsuario && $esCorrecta): ?>
                        <span style="color:var(--success);font-size:.8rem;"> ✓ Correcta</span>
                    <?php endif; ?>
                </span>
            </label>
            <?php endforeach; ?>

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
        <div class="d-flex justify-content-center mt-4">
            <button type="submit" id="btn-quiz" class="btn-secondary-cyber" style="padding:14px 40px;font-size:1rem;">
                <i class="bi bi-send-fill"></i> Enviar respuestas
            </button>
        </div>
        <?php else: ?>
        <div class="d-flex justify-content-center mt-4 gap-3 flex-wrap">
            <button type="button" onclick="window.location.href='/ciberseguridad/modulos/modulo2/quiz.php?reset=1'" class="btn-outline-cyber">
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

    <div class="page-nav">
        <a href="/ciberseguridad/modulos/modulo2/control.php" class="btn-outline-cyber">
            <i class="bi bi-arrow-left"></i> Anterior
        </a>
        <a href="/ciberseguridad/modulos/modulo3/malware.php" class="btn-cyber">
            Siguiente módulo (M3) <i class="bi bi-arrow-right"></i>
        </a>
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
