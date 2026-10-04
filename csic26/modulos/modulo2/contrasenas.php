<?php
$pageTitle    = '2.1 Contraseñas Fuertes y la ilusión de la complejidad';
$activeModule = 'modulo2';
$activePage   = 'contrasenas';
require_once __DIR__ . '/../../includes/header.php';
?>

<main class="main-content">
<div class="fade-in-up" style="max-width:860px;">

    <div class="module-badge"><i class="bi bi-key-fill"></i> Módulo 2</div>
    <h1>2.1 Contraseñas Fuertes y la ilusión de la complejidad</h1>
    <p class="lead" style="color:var(--primary);font-weight:500;font-size:1.1rem;">
        La contraseña es para tu vida digital lo mismo que la llave de tu casa para tu vida física.
    </p>

    <!-- Analogía central -->
    <div class="content-block" style="border-color:rgba(0,212,255,0.25);">
        <div class="d-flex align-items-start gap-3">
            <span style="font-size:2.8rem;line-height:1;">🏠</span>
            <div>
                <p>
                    Con esa llave abrís la puerta de tu correo electrónico, de tus redes sociales,
                    de tu banco por internet y de muchas aplicaciones donde guardás información personal.
                    Si esa contraseña es fácil de adivinar, es exactamente igual que
                    <strong style="color:var(--danger);">dejar la llave bajo la alfombra de la entrada
                    con un cartel que diga "Bienvenidos"</strong>.
                </p>
            </div>
        </div>
    </div>

    <!-- Contraseñas más usadas -->
    <div class="content-block">
        <h2 class="mb-3">El problema de las contraseñas obvias</h2>
        <p>
            Las contraseñas más usadas siguen siendo las más evidentes. Los delincuentes utilizan
            programas automatizados que prueban miles de combinaciones por segundo, técnica llamada
            <strong style="color:var(--danger);">ataque de fuerza bruta</strong>, empezando
            precisamente por las opciones más obvias:
        </p>

        <div class="row g-2 mb-4">
            <?php
            $malas = ['123456','111111','contraseña','juan2026','qwerty','abc123','password','12345678'];
            foreach ($malas as $mala):
            ?>
            <div class="col-auto">
                <span style="font-family:var(--font-code);padding:6px 14px;background:rgba(255,71,87,.1);
                    border:1px solid rgba(255,71,87,.3);border-radius:6px;color:var(--danger);font-size:.9rem;">
                    ✗ <?= htmlspecialchars($mala) ?>
                </span>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="highlight-box" style="border-color:rgba(255,71,87,.3);background:rgba(255,71,87,.04);">
            <p style="margin:0;color:var(--text-secondary);">
                <strong style="color:var(--danger);">¿Cuánto tarda en adivinar tu clave un programa automatizado?</strong><br>
                La contraseña <code>123456</code> → menos de 1 segundo.<br>
                Una contraseña de 8 letras minúsculas → unos pocos minutos.<br>
                Una <em>passphrase</em> de 4+ palabras → siglos de computación.
            </p>
        </div>
    </div>

    <!-- Las 3 reglas de oro -->
    <div class="content-block">
        <h2 class="mb-4">Las tres reglas de oro para una contraseña sólida</h2>

        <div class="row g-3">

            <div class="col-md-4">
                <div class="card-cyber p-4 h-100 text-center" style="border-color:rgba(0,212,255,.3);">
                    <div style="font-size:2.5rem;margin-bottom:.8rem;">📏</div>
                    <h3 style="font-size:1rem;color:var(--primary);margin-bottom:.6rem;">
                        1. Que sea LARGA
                    </h3>
                    <p style="font-size:.85rem;color:var(--text-secondary);margin:0;">
                        Mínimo <strong style="color:var(--text-primary);">12 a 15 caracteres</strong>.
                        La longitud es el factor que más dificulta el trabajo de los programas de ataque.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card-cyber p-4 h-100 text-center" style="border-color:rgba(0,230,118,.3);">
                    <div style="font-size:2.5rem;margin-bottom:.8rem;">🔣</div>
                    <h3 style="font-size:1rem;color:var(--success);margin-bottom:.6rem;">
                        2. Con VARIEDAD
                    </h3>
                    <p style="font-size:.85rem;color:var(--text-secondary);margin:0;">
                        Mezclar <strong style="color:var(--text-primary);">mayúsculas, minúsculas,
                        números y símbolos</strong> especiales como @, #, $, %, !
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card-cyber p-4 h-100 text-center" style="border-color:rgba(255,215,64,.3);">
                    <div style="font-size:2.5rem;margin-bottom:.8rem;">🦄</div>
                    <h3 style="font-size:1rem;color:var(--warning);margin-bottom:.6rem;">
                        3. ÚNICA por cuenta
                    </h3>
                    <p style="font-size:.85rem;color:var(--text-secondary);margin:0;">
                        <strong style="color:var(--text-primary);">Nunca repetir</strong> la misma
                        contraseña en más de un sitio. Cada cuenta, una clave diferente.
                    </p>
                </div>
            </div>

        </div>
    </div>

    <!-- Passphrase -->
    <div class="content-block">
        <h2 class="mb-3">La solución práctica: las frases de acceso (Passphrase)</h2>
        <p>
            Una <strong>passphrase</strong> es una frase corta, fácil de recordar para vos
            pero prácticamente imposible de adivinar para otros.
        </p>

        <!-- Comparativa visual -->
        <div class="row g-3 mb-3">
            <div class="col-md-6">
                <div class="p-3" style="background:rgba(255,71,87,.06);border:1px solid rgba(255,71,87,.25);border-radius:10px;">
                    <div style="font-size:.78rem;font-weight:700;text-transform:uppercase;letter-spacing:.08em;color:var(--danger);margin-bottom:.5rem;">
                        ✗ Contraseña débil
                    </div>
                    <code style="font-size:1.1rem;color:var(--danger);">P@ss123</code>
                    <p style="font-size:.8rem;color:var(--text-muted);margin-top:.4rem;margin-bottom:0;">
                        7 caracteres — se puede romper en segundos
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-3" style="background:rgba(0,230,118,.06);border:1px solid rgba(0,230,118,.25);border-radius:10px;">
                    <div style="font-size:.78rem;font-weight:700;text-transform:uppercase;letter-spacing:.08em;color:var(--success);margin-bottom:.5rem;">
                        ✓ Passphrase fuerte
                    </div>
                    <code style="font-size:.95rem;color:var(--success);">Luna-Verde-Sobre-El-Mar#2026</code>
                    <p style="font-size:.8rem;color:var(--text-muted);margin-top:.4rem;margin-bottom:0;">
                        27 caracteres — tardaría siglos en romperse
                    </p>
                </div>
            </div>
        </div>

        <!-- Credential Stuffing -->
        <div class="highlight-box" style="border-color:rgba(255,71,87,.3);background:rgba(255,71,87,.04);">
            <div class="d-flex align-items-start gap-3">
                <span style="font-size:1.5rem;">⚠️</span>
                <div>
                    <h3 style="font-size:.95rem;color:var(--danger);margin-bottom:.3rem;">Credential Stuffing: el efecto dominó</h3>
                    <p style="margin:0;font-size:.88rem;color:var(--text-secondary);">
                        Si usás la misma contraseña en el correo, el banco y una tienda online, basta con que
                        esa tienda sufra un ataque y filtre sus datos para que los delincuentes prueben
                        inmediatamente esa misma combinación en todas tus cuentas. Una sola clave comprometida
                        puede afectar toda tu vida digital.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Navegación -->
    <div class="page-nav">
        <a href="/ciberseguridad/modulos/modulo1/quiz.php" class="btn-outline-cyber">
            <i class="bi bi-arrow-left"></i> Módulo anterior
        </a>
        <a href="/ciberseguridad/modulos/modulo2/gestores.php" class="btn-cyber">
            Siguiente sección <i class="bi bi-arrow-right"></i>
        </a>
    </div>

</div>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
