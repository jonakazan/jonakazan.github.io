<?php
$pageTitle    = 'Cuestionario — Módulo 3';
$activeModule = 'modulo3';
$activePage   = 'quiz';
require_once __DIR__ . '/../../includes/header.php';

$preguntas = [
    1 => [
        'texto'    => '¿A qué se refiere el término "Malware" en el ámbito digital?',
        'opciones' => [
            'A' => 'A una falla física en la pantalla que hace que los colores se vean distorsionados.',
            'B' => 'A cualquier programa informático diseñado con intenciones maliciosas para dañar, infiltrarse o robar datos en un equipo.',
            'C' => 'A una marca de antivirus antigua que ya no recibe actualizaciones.',
            'D' => 'Al cobro adicional que realizan los proveedores cuando descargamos muchos archivos.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'Malware = Malicious + Software. Es cualquier programa diseñado con mala intención para dañar, infiltrarse o robar información de un dispositivo.',
    ],
    2 => [
        'texto'    => '¿Cuál es la diferencia principal entre un Virus informático y un Gusano (Worm)?',
        'opciones' => [
            'A' => 'El virus infecta solo teléfonos celulares y el gusano solo computadoras portátiles.',
            'B' => 'El virus requiere que el usuario realice una acción (como abrir un archivo) para ejecutarse, mientras que el gusano se propaga automáticamente por la red.',
            'C' => 'El gusano borra el disco rígido completo y el virus solo cambia la contraseña del Wi-Fi.',
            'D' => 'El virus es creado por las empresas de software y el gusano por los cibercafés.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'El virus necesita de la interacción del usuario (abrir un archivo) para activarse. El gusano (worm) es autónomo: se propaga por la red sin que el usuario haga nada.',
    ],
    3 => [
        'texto'    => '¿Cómo actúa un programa de tipo "Troyano"?',
        'opciones' => [
            'A' => 'Se presenta disfrazado de un programa útil o inofensivo para engañar al usuario e instalar funciones maliciosas por dentro.',
            'B' => 'Hace sonar la alarma de la computadora cada vez que presionás una tecla.',
            'C' => 'Borra automáticamente la memoria RAM cuando se apaga el dispositivo.',
            'D' => 'Aumenta el tamaño del texto para que no puedas leer los documentos.',
        ],
        'correcta'   => 'A',
        'explicacion'=> 'Aplica la metáfora del Caballo de Troya: engaño visual para introducir código malicioso. Se disfraza de algo útil para que el usuario lo instale voluntariamente.',
    ],
    4 => [
        'texto'    => 'Si tus documentos de trabajo no abren y aparece una nota en pantalla exigiendo un pago en dinero o criptomonedas para desbloquearlos, ¿qué tipo de malware afectó tu equipo?',
        'opciones' => [
            'A' => 'Spyware.',
            'B' => 'Ransomware.',
            'C' => 'Adware publicitario.',
            'D' => 'Un ataque DDoS de denegación de servicio.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'El Ransomware secuestra la información cifrándola (bloqueándola) y exige un pago de rescate para devolver el acceso. Es una de las amenazas más destructivas actualmente.',
    ],
    5 => [
        'texto'    => '¿Por qué los expertos en seguridad desaconsejan rotundamente pagar el rescate exigido por un Ransomware?',
        'opciones' => [
            'A' => 'Porque el banco cobra una comisión muy alta por hacer transferencias internacionales.',
            'B' => 'Porque pagar no garantiza que te devuelvan la clave de acceso y además financia las actividades de los delincuentes.',
            'C' => 'Porque los antivirus eliminan el dinero automáticamente si detectan la transacción.',
            'D' => 'Porque las computadoras se rompen físicamente al realizar pagos en criptomonedas.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'Tratar con criminales no ofrece ninguna garantía. Pagar el rescate no asegura recuperar los archivos y sostiene la industria del delito. La única solución real son los backups previos.',
    ],
    6 => [
        'texto'    => '¿Qué función cumple un software de tipo "Spyware" o "Keylogger"?',
        'opciones' => [
            'A' => 'Aumentar la velocidad de navegación en Internet desactivando los gráficos de las páginas.',
            'B' => 'Espiar tus actividades, registrar lo que escribís en el teclado y robar contraseñas o datos personales de forma silenciosa.',
            'C' => 'Limpiar los archivos temporales y la papelera de reciclaje todos los días.',
            'D' => 'Bloquear las llamadas entrantes que no estén agendadas en tu teléfono.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'El Spyware/Keylogger captura eventos de teclado y monitorea actividades de forma furtiva. Su objetivo es robar contraseñas, datos bancarios e información personal sin que el usuario se entere.',
    ],
    7 => [
        'texto'    => '¿Qué es una "Botnet" o red de dispositivos zombi?',
        'opciones' => [
            'A' => 'Un grupo de robots físicos que limpian los cables de fibra óptica.',
            'B' => 'Una red de computadoras o dispositivos infectados que son controlados a distancia por un atacante sin que sus dueños lo sepan.',
            'C' => 'Una aplicación oficial para chatear con soporte técnico bancario.',
            'D' => 'Un tipo de antena Wi-Fi de alta potencia para exteriores.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'Una botnet es un reclutamiento de equipos comprometidos para uso distribuido malintencionado. Los dueños no saben que sus dispositivos son "zombis" controlados por un atacante.',
    ],
    8 => [
        'texto'    => '¿En qué consiste un ataque de Denegación de Servicio Distribuido (DDoS)?',
        'opciones' => [
            'A' => 'En robar las contraseñas de todos los empleados de una oficina al mismo tiempo.',
            'B' => 'En saturar un servidor o sitio web con millones de peticiones falsas para que colapse y quede fuera de servicio.',
            'C' => 'En cambiar el nombre del usuario principal de la computadora por un nombre falso.',
            'D' => 'En desconectar los cables de electricidad de los centros de datos.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'El DDoS satura los recursos del servidor para afectar el pilar de Disponibilidad de la Tríada CIA. El servicio queda fuera de línea para usuarios legítimos.',
    ],
    9 => [
        'texto'    => '¿De qué manera utilizan los ciberdelincuentes la Inteligencia Artificial (IA) en la actualidad?',
        'opciones' => [
            'A' => 'Para fabricar procesadores más pequeños que no consuman energía.',
            'B' => 'Para crear mensajes engañosos muy creíbles, clonar voces de personas (Deepfakes) y automatizar sus ataques.',
            'C' => 'Para obligar a los usuarios a cambiar de monitor cada seis meses.',
            'D' => 'Para desactivar la señal GPS de los teléfonos móviles.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'Los delincuentes usan la IA generativa para sofisticar la ingeniería social (phishing sin errores), clonar voces (deepfakes) y automatizar la búsqueda de vulnerabilidades.',
    ],
    10 => [
        'texto'    => '¿Cuál es la medida preventiva más efectiva para recuperarnos si somos víctimas de una infección destructiva por Ransomware?',
        'opciones' => [
            'A' => 'Formatear la pantalla del monitor con un paño húmedo.',
            'B' => 'Contar con copias de seguridad (backups) periódicas de nuestros archivos guardadas en un soporte externo desconectado.',
            'C' => 'Apagar la computadora y no volver a encenderla durante un mes.',
            'D' => 'Instalar tres navegadores de Internet distintos al mismo tiempo.',
        ],
        'correcta'   => 'B',
        'explicacion'=> 'La copia de respaldo en un dispositivo externo y desconectado es la única salvaguarda garantizada frente al ransomware. Si los archivos están respaldados, el cifrado del atacante pierde todo su poder de extorsión.',
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
    guardarQuizResultado($email, 'modulo3', $respuestas, $puntaje, count($preguntas));
    $resultado = ['puntaje' => $puntaje, 'total' => count($preguntas), 'respuestas' => $respuestas];
}

// Cargar resultado previo
if ($resultado === null) {
    $progreso = cargarProgreso($email);
    if (isset($progreso['quiz_resultados']['modulo3'])) {
        $qr = $progreso['quiz_resultados']['modulo3'];
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

    <div class="module-badge"><i class="bi bi-pencil-square"></i> Cuestionario — Módulo 3</div>
    <h1>Evaluación del Módulo 3</h1>
    <p style="color:var(--text-secondary);margin-bottom:2rem;">
        Respondé las 10 preguntas sobre malware, ransomware, botnets, DDoS e Inteligencia Artificial.
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

    <!-- Formulario -->
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
            <button type="button" onclick="window.location.href='/ciberseguridad/modulos/modulo3/quiz.php?reset=1'" class="btn-outline-cyber">
                <i class="bi bi-arrow-repeat"></i> Rehacer quiz
            </button>
            <?php if (cursoCompletado($email)): ?>
            <a href="/ciberseguridad/informe.php" class="btn-cyber">
                <i class="bi bi-file-earmark-text"></i> Ver mi informe final
            </a>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </form>

    <div class="page-nav">
        <a href="/ciberseguridad/modulos/modulo3/botnets.php" class="btn-outline-cyber">
            <i class="bi bi-arrow-left"></i> Anterior
        </a>
        <a href="/ciberseguridad/modulos/modulo4/ingenieria.php" class="btn-cyber">
            Siguiente módulo (M4) <i class="bi bi-arrow-right"></i>
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
