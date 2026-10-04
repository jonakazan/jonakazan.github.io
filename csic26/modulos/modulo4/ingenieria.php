<?php
$pageTitle    = '4.1 ¿Qué es la Ingeniería Social?';
$activeModule = 'modulo4';
$activePage   = 'ingenieria';
require_once __DIR__ . '/../../includes/header.php';
?>

<main class="main-content">
<div class="fade-in-up" style="max-width:860px;">

    <div class="module-badge"><i class="bi bi-person-bounding-box"></i> Módulo 4</div>
    <h1>4.1 ¿Qué es la Ingeniería Social? (El truco del ilusionista)</h1>
    <p class="lead" style="color:var(--primary);font-weight:500;font-size:1.1rem;">
        No ataca los componentes informáticos ni los programas, sino las emociones y las conductas humanas.
    </p>

    <!-- Analogía Central -->
    <div class="content-block">
        <div class="d-flex align-items-start gap-4 flex-wrap">
            <div style="font-size:3.5rem;line-height:1;flex-shrink:0;">🎭</div>
            <div>
                <h2 style="font-size:1.3rem;margin-bottom:.6rem;color:var(--text-primary);">
                    La metáfora del cartero y el candado
                </h2>
                <p>
                    Imagina a un ladrón que, en lugar de intentar romper el candado blindado de una puerta con herramientas pesadas,
                    se viste de cartero, golpea la puerta amablemente y <strong>te convence de que le entregues las llaves en la mano</strong>.
                </p>
                <p style="margin-bottom:0;">
                    De eso se trata exactamente la <strong style="color:var(--primary);">Ingeniería Social</strong>:
                    el atacante no gasta semanas intentando descifrar la seguridad de un servidor ultra protegido si puede lograr
                    que una persona confiada o asustada le entregue sus credenciales por voluntad propia.
                </p>
            </div>
        </div>
    </div>

    <!-- El Factor Humano -->
    <div class="content-block">
        <h2 class="mb-3">El eslabón humano en la seguridad</h2>
        <p>
            Los delincuentes digitales saben que las personas somos propensas a cometer errores cuando actuamos
            bajo la influencia de <strong>emociones intensas</strong>. Cuando nos dejamos llevar por la prisa,
            el susto o el entusiasmo:
        </p>
        <div class="row g-3 my-2">
            <div class="col-md-4">
                <div class="p-3 text-center h-100" style="background:rgba(255,71,87,.07);border:1px solid rgba(255,71,87,.25);border-radius:10px;">
                    <div style="font-size:2rem;margin-bottom:.4rem;">🧠 🔻</div>
                    <strong style="color:var(--danger);font-size:.92rem;display:block;margin-bottom:.3rem;">Capacidad crítica apagada</strong>
                    <div style="font-size:.82rem;color:var(--text-secondary);">Dejamos de analizar con calma los detalles sospechosos.</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 text-center h-100" style="background:rgba(255,165,2,.07);border:1px solid rgba(255,165,2,.25);border-radius:10px;">
                    <div style="font-size:2rem;margin-bottom:.4rem;">⚡ 🖱️</div>
                    <strong style="color:var(--warning);font-size:.92rem;display:block;margin-bottom:.3rem;">Reacción impulsiva</strong>
                    <div style="font-size:.82rem;color:var(--text-secondary);">Hacemos clic en enlaces o abrimos adjuntos sin verificar el remitente.</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 text-center h-100" style="background:rgba(255,71,87,.07);border:1px solid rgba(255,71,87,.25);border-radius:10px;">
                    <div style="font-size:2rem;margin-bottom:.4rem;">🔓 🎁</div>
                    <strong style="color:var(--danger);font-size:.92rem;display:block;margin-bottom:.3rem;">Entrega de accesos</strong>
                    <div style="font-size:.82rem;color:var(--text-secondary);">Escribimos o dictamos contraseñas y códigos SMS de seguridad.</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Los 4 Botones Emocionales -->
    <div class="content-block">
        <h2 class="mb-3">Los 4 botones emocionales que presionan los estafadores</h2>
        <p>
            Cualquier ataque de ingeniería social está cuidadosamente diseñado para activar al menos uno de estos cuatro estados emocionales:
        </p>

        <div class="row g-3">
            <!-- Botón 1: Urgencia y Prisa -->
            <div class="col-md-6">
                <div style="background:var(--bg-card);border:1px solid rgba(255,71,87,.3);border-left:4px solid var(--danger);border-radius:10px;padding:18px;height:100%;">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <span style="font-size:1.5rem;">⏱️</span>
                        <strong style="color:var(--danger);font-size:1rem;">1. Urgencia y Prisa</strong>
                    </div>
                    <p style="font-size:.88rem;color:var(--text-secondary);margin-bottom:.7rem;">
                        Busca impedir que pienses o consultes con un compañero. Establecen cuentas regresivas ficticias.
                    </p>
                    <div style="background:rgba(255,71,87,.08);padding:10px 12px;border-radius:8px;font-size:.84rem;font-style:italic;color:var(--text-primary);border:1px dashed rgba(255,71,87,.3);">
                        "Su cuenta será suspendida en 10 minutos si no confirma sus datos ahora mismo."
                    </div>
                </div>
            </div>

            <!-- Botón 2: Miedo y Amenaza -->
            <div class="col-md-6">
                <div style="background:var(--bg-card);border:1px solid rgba(255,165,2,.3);border-left:4px solid var(--warning);border-radius:10px;padding:18px;height:100%;">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <span style="font-size:1.5rem;">⚠️</span>
                        <strong style="color:var(--warning);font-size:1rem;">2. Miedo y Amenaza</strong>
                    </div>
                    <p style="font-size:.88rem;color:var(--text-secondary);margin-bottom:.7rem;">
                        Aprovecha el temor a perder dinero, sufrir sanciones legales o padecer el bloqueo de cuentas vitales.
                    </p>
                    <div style="background:rgba(255,165,2,.08);padding:10px 12px;border-radius:8px;font-size:.84rem;font-style:italic;color:var(--text-primary);border:1px dashed rgba(255,165,2,.3);">
                        "Hemos detectado un acceso no autorizado a su homebanking. Ingrese aquí para evitar el bloqueo total de sus fondos."
                    </div>
                </div>
            </div>

            <!-- Botón 3: Codicia o Falsa Oportunidad -->
            <div class="col-md-6">
                <div style="background:var(--bg-card);border:1px solid rgba(0,210,211,.3);border-left:4px solid var(--primary);border-radius:10px;padding:18px;height:100%;">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <span style="font-size:1.5rem;">🎁</span>
                        <strong style="color:var(--primary);font-size:1rem;">3. Codicia o Falsa Oportunidad</strong>
                    </div>
                    <p style="font-size:.88rem;color:var(--text-secondary);margin-bottom:.7rem;">
                        Atrae con premios inesperados, sorteos en los que nunca participaste u ofertas comerciales absurdamente baratas.
                    </p>
                    <div style="background:rgba(0,210,211,.08);padding:10px 12px;border-radius:8px;font-size:.84rem;font-style:italic;color:var(--text-primary);border:1px dashed rgba(0,210,211,.3);">
                        "¡Felicitaciones! Ha ganado una camioneta 0km. Complete el formulario con sus datos para reclamar su premio."
                    </div>
                </div>
            </div>

            <!-- Botón 4: Empatía o Deseo de Ayudar -->
            <div class="col-md-6">
                <div style="background:var(--bg-card);border:1px solid rgba(123,47,255,.3);border-left:4px solid var(--accent);border-radius:10px;padding:18px;height:100%;">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <span style="font-size:1.5rem;">🤝</span>
                        <strong style="color:var(--accent);font-size:1rem;">4. Empatía o Deseo de Ayudar</strong>
                    </div>
                    <p style="font-size:.88rem;color:var(--text-secondary);margin-bottom:.7rem;">
                        Simula ser un colega en apuros, un técnico que busca asistirte o alguien vulnerable que requiere tu ayuda inmediata.
                    </p>
                    <div style="background:rgba(123,47,255,.08);padding:10px 12px;border-radius:8px;font-size:.84rem;font-style:italic;color:var(--text-primary);border:1px dashed rgba(123,47,255,.3);">
                        "Hola, soy del servicio técnico de la empresa. Necesito que me dictes el código que te llegó por SMS para solucionar un problema en tu línea."
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Regla de supervivencia -->
    <div class="highlight-box" style="background:linear-gradient(135deg,rgba(0,210,211,.08),rgba(123,47,255,.06));border-color:rgba(0,210,211,.3);">
        <div class="d-flex align-items-start gap-3">
            <span style="font-size:1.8rem;line-height:1;">🛡️</span>
            <div>
                <h4 style="color:var(--primary);margin-bottom:.3rem;font-size:1.05rem;">La regla de los 10 segundos: Respira y desconfía</h4>
                <p style="margin:0;color:var(--text-secondary);font-size:.9rem;">
                    Siempre que recibas un mensaje, correo o llamada que intente provocarte <strong>miedo, apuro, euforia o compasión</strong>,
                    haz una pausa obligatoria de 10 segundos. Ninguna entidad legítima (banco, correo, policía) te exigirá jamás resolver
                    algo crítico entregando tus claves en un plazo de pocos minutos.
                </p>
            </div>
        </div>
    </div>

    <!-- Navegación -->
    <div class="page-nav">
        <a href="/ciberseguridad/modulos/modulo3/quiz.php" class="btn-outline-cyber">
            <i class="bi bi-arrow-left"></i> Módulo anterior
        </a>
        <a href="/ciberseguridad/modulos/modulo4/variantes.php" class="btn-cyber">
            Siguiente sección <i class="bi bi-arrow-right"></i>
        </a>
    </div>

</div>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
