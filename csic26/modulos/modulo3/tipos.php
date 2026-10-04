<?php
$pageTitle    = '3.2 Clasificación de las Principales Amenazas Maliciosas';
$activeModule = 'modulo3';
$activePage   = 'tipos';
require_once __DIR__ . '/../../includes/header.php';

$amenazas = [
    [
        'num'   => '01',
        'icon'  => '🦠',
        'nombre'=> 'Virus Informático',
        'alias' => 'El contagioso habitual',
        'color_border' => 'rgba(255,71,87,.3)',
        'color_bg'     => 'rgba(255,71,87,.05)',
        'color_text'   => 'var(--danger)',
        'desc'  => 'Es un programa dañino que se <strong>pega a un archivo legítimo</strong> (como un documento de texto o planilla). Para activarse, <strong>necesita que el usuario haga algo</strong> — abrir el archivo infectado. Una vez ejecutado, busca otros archivos para infectarlos también.',
        'ejemplo' => 'Abrís un documento de Word adjunto en un correo y, sin saberlo, el virus ya se instaló y empezó a infectar otros archivos de tu PC.',
    ],
    [
        'num'   => '02',
        'icon'  => '🐛',
        'nombre'=> 'Gusano / Worm',
        'alias' => 'El invasor autónomo',
        'color_border' => 'rgba(255,107,53,.3)',
        'color_bg'     => 'rgba(255,107,53,.05)',
        'color_text'   => 'var(--accent)',
        'desc'  => 'A diferencia del virus, el gusano es un especialista en <strong>propagarse solo, sin necesitar que abras ningún archivo</strong>. Aprovecha vulnerabilidades en el equipo o la red Wi-Fi para saltar de computadora en computadora de forma automática, saturando la conexión.',
        'ejemplo' => 'Sin hacer nada, tu PC empieza a ir muy lenta. El gusano se propagó por la red de tu hogar e infectó también el teléfono y la tablet.',
    ],
    [
        'num'   => '03',
        'icon'  => '🐴',
        'nombre'=> 'Troyano',
        'alias' => 'El regalo con trampa',
        'color_border' => 'rgba(255,215,64,.3)',
        'color_bg'     => 'rgba(255,215,64,.05)',
        'color_text'   => 'var(--warning)',
        'desc'  => 'Su nombre viene del Caballo de Troya. Se presenta <strong>disfrazado de algo útil e inofensivo</strong> — un juego gratuito, un programa para editar fotos, un limpiador de memoria —. Cuando lo instalás confiado, en segundo plano abre una "puerta trasera" para los delincuentes.',
        'ejemplo' => 'Descargás una versión "gratis" de un programa de pago. Lo instalás y parece funcionar. Semanas después descubrís que enviaron correos desde tu cuenta.',
    ],
    [
        'num'   => '04',
        'icon'  => '👁️',
        'nombre'=> 'Spyware / Keylogger',
        'alias' => 'El chismoso silencioso',
        'color_border' => 'rgba(123,47,255,.3)',
        'color_bg'     => 'rgba(123,47,255,.05)',
        'color_text'   => 'var(--secondary)',
        'desc'  => 'Un programa que se <strong>oculta en el sistema para espiar todo lo que hacés</strong>. Puede activar tu cámara o micrófono sin permiso y el Keylogger registra cada tecla que presionás para robar contraseñas y datos de tarjetas bancarias.',
        'ejemplo' => 'El Keylogger capturó tu contraseña del banco mientras la escribías. Los delincuentes ya tienen acceso a tu cuenta.',
    ],
    [
        'num'   => '05',
        'icon'  => '🔒',
        'nombre'=> 'Ransomware',
        'alias' => 'El secuestrador de archivos',
        'color_border' => 'rgba(0,212,255,.3)',
        'color_bg'     => 'rgba(0,212,255,.05)',
        'color_text'   => 'var(--primary)',
        'desc'  => 'Una de las amenazas más peligrosas. Entra a tu computadora y <strong>cifra (bloquea con candado digital) todos tus documentos, fotos y planillas</strong>. Luego aparece una nota exigiendo un pago de "rescate" (en criptomonedas) a cambio de la clave para desbloquearlos.',
        'ejemplo' => 'Abrís la PC y ningún archivo responde. Aparece en pantalla: "Tus archivos han sido cifrados. Pagá $500 en Bitcoin en 48 horas o los perderás para siempre."',
        'alerta' => true,
    ],
];
?>

<main class="main-content">
<div class="fade-in-up" style="max-width:860px;">

    <div class="module-badge"><i class="bi bi-bug-fill"></i> Módulo 3</div>
    <h1>3.2 Clasificación de las Principales Amenazas Maliciosas</h1>
    <p class="lead" style="color:var(--primary);font-weight:500;font-size:1.1rem;">
        No todo el malware actúa igual. Conocer a los "villanos" más comunes nos ayuda a defendernos.
    </p>

    <?php foreach ($amenazas as $a): ?>
    <div class="content-block mb-3" style="border-color:<?= $a['color_border'] ?>;background:<?= $a['color_bg'] ?>;">

        <div class="d-flex align-items-center gap-3 mb-3">
            <div style="width:42px;height:42px;border-radius:50%;background:<?= $a['color_bg'] ?>;
                border:2px solid <?= $a['color_border'] ?>;display:flex;align-items:center;justify-content:center;
                font-size:1.4rem;flex-shrink:0;">
                <?= $a['icon'] ?>
            </div>
            <div>
                <div style="font-size:.72rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:<?= $a['color_text'] ?>;">
                    Amenaza <?= $a['num'] ?>
                </div>
                <h2 style="margin:0;font-size:1.1rem;color:var(--text-primary);">
                    <?= $a['nombre'] ?>
                    <span style="font-size:.85rem;font-weight:400;color:var(--text-muted);"> — <?= $a['alias'] ?></span>
                </h2>
            </div>
        </div>

        <p style="color:var(--text-secondary);font-size:.95rem;"><?= $a['desc'] ?></p>

        <div class="p-3" style="background:rgba(0,0,0,.2);border-radius:8px;border-left:3px solid <?= $a['color_border'] ?>;">
            <small style="color:var(--text-muted);">
                <strong style="color:var(--text-secondary);">📖 Ejemplo práctico:</strong>
                <?= $a['ejemplo'] ?>
            </small>
        </div>

        <?php if (!empty($a['alerta'])): ?>
        <div class="mt-3 p-3" style="background:rgba(0,212,255,.08);border:1px solid rgba(0,212,255,.3);border-radius:10px;">
            <h3 style="font-size:.9rem;color:var(--primary);margin-bottom:.4rem;">
                ⭐ Regla de oro ante el Ransomware — ¡Nunca pagar el rescate!
            </h3>
            <p style="font-size:.85rem;color:var(--text-secondary);margin:0;">
                Pagar no garantiza que te devuelvan los archivos (estás tratando con delincuentes)
                y solo financia a las bandas criminales. <strong style="color:var(--text-primary);">
                La única solución real es tener copias de seguridad (backups) en un lugar seguro
                y desconectado.</strong>
            </p>
        </div>
        <?php endif; ?>

    </div>
    <?php endforeach; ?>

    <!-- Comparativa rápida -->
    <div class="content-block">
        <h2 class="mb-3" style="font-size:1.1rem;">Comparativa rápida</h2>
        <div style="overflow-x:auto;">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Tipo</th>
                        <th>¿Necesita acción del usuario?</th>
                        <th>¿Se propaga solo?</th>
                        <th>Objetivo principal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="color:var(--danger);">🦠 Virus</td>
                        <td><span style="color:var(--danger);">Sí</span></td>
                        <td><span style="color:var(--text-muted);">No</span></td>
                        <td>Infectar otros archivos</td>
                    </tr>
                    <tr>
                        <td style="color:var(--accent);">🐛 Gusano</td>
                        <td><span style="color:var(--success);">No</span></td>
                        <td><span style="color:var(--danger);">Sí (autónomo)</span></td>
                        <td>Saturar redes y sistemas</td>
                    </tr>
                    <tr>
                        <td style="color:var(--warning);">🐴 Troyano</td>
                        <td><span style="color:var(--danger);">Sí (engaño)</span></td>
                        <td><span style="color:var(--text-muted);">No</span></td>
                        <td>Abrir puerta trasera</td>
                    </tr>
                    <tr>
                        <td style="color:var(--secondary);">👁️ Spyware</td>
                        <td><span style="color:var(--danger);">Sí (oculto)</span></td>
                        <td><span style="color:var(--text-muted);">No</span></td>
                        <td>Espiar y robar datos</td>
                    </tr>
                    <tr>
                        <td style="color:var(--primary);">🔒 Ransomware</td>
                        <td><span style="color:var(--danger);">Sí</span></td>
                        <td><span style="color:var(--text-muted);">No siempre</span></td>
                        <td>Cifrar y extorsionar</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Navegación -->
    <div class="page-nav">
        <a href="/ciberseguridad/modulos/modulo3/malware.php" class="btn-outline-cyber">
            <i class="bi bi-arrow-left"></i> Anterior
        </a>
        <a href="/ciberseguridad/modulos/modulo3/botnets.php" class="btn-cyber">
            Siguiente sección <i class="bi bi-arrow-right"></i>
        </a>
    </div>

</div>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
