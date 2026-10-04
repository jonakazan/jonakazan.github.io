<?php
$pageTitle    = '4.2 Variantes de Engaño Digital';
$activeModule = 'modulo4';
$activePage   = 'variantes';
require_once __DIR__ . '/../../includes/header.php';

$variantes = [
    [
        'codigo'   => 'A',
        'nombre'   => 'Phishing',
        'subtitulo'=> 'El anzuelo por correo electrónico',
        'icono'    => 'bi-envelope-exclamation-fill',
        'color'    => '#ff4757',
        'bg'       => 'rgba(255,71,87,.08)',
        'borde'    => 'rgba(255,71,87,.25)',
        'canal'    => 'Email / Correo Masivo',
        'desc'     => 'Es la estafa por correo electrónico más clásica. El atacante envía miles de correos masivos simulando ser una institución oficial, un banco conocido, un servicio de correo postal o una tienda virtual. Incluye logotipos idénticos y enlaces hacia páginas web falsas que clonan el sitio real para cosechar tus credenciales.',
        'ejemplo'  => 'Remitente: soporte@banc0-oficial-seguro.com<br>Asunto: "Urgente: Valide su identidad para evitar suspensión de cuenta bancaria"',
        'alerta'   => 'Revisa siempre la dirección exacta del remitente (después del @) y nunca hagas clic en enlaces directos de correos que hablen de problemas de cuentas.'
    ],
    [
        'codigo'   => 'B',
        'nombre'   => 'Smishing',
        'subtitulo'=> 'El anzuelo por SMS o WhatsApp',
        'icono'    => 'bi-chat-dots-fill',
        'color'    => '#2ed573',
        'bg'       => 'rgba(46,213,115,.08)',
        'borde'    => 'rgba(46,213,115,.25)',
        'canal'    => 'SMS / WhatsApp / Mensajería Directa',
        'desc'     => 'Variante del phishing que aprovecha la inmediatez y confianza de los mensajes de texto cortos (SMS) o chats de mensajería instantánea. Los delincuentes envían alertas sobre paquetes pendientes o buscan apoderarse de tu sesión de WhatsApp solicitándote códigos de verificación.',
        'ejemplo'  => '"Su paquete de correo está retenido por falta de pago de impuestos, ingrese a www.correo-tramite-falso.net"<br>o "Tu código de WhatsApp es 123-456, no lo compartas con nadie."',
        'alerta'   => 'Los códigos de 6 dígitos que llegan por SMS son llaves maestras personales: jamás los dictes ni los reenvíes a nadie, ni siquiera si dice ser de la compañía telefónica.'
    ],
    [
        'codigo'   => 'C',
        'nombre'   => 'Vishing',
        'subtitulo'=> 'La estafa por llamada telefónica (Voice Phishing)',
        'icono'    => 'bi-telephone-inbound-fill',
        'color'    => '#ffa502',
        'bg'       => 'rgba(255,165,2,.08)',
        'borde'    => 'rgba(255,165,2,.25)',
        'canal'    => 'Llamada telefónica de voz',
        'desc'     => 'Proviene de "Voice Phishing". El delincuente te llama simulando ser un operador bancario, un policía, un empleado público o personal de soporte técnico. Empleando una voz firme, profesional y tranquilizadora, te guía para acercarte a un cajero automático, instalar programas de control remoto (AnyDesk, TeamViewer) o dictarle tokens de seguridad.',
        'ejemplo'  => '"Buenas tardes, le habla Juan Pérez del departamento antifraude de su banco. Detectamos una transferencia irregular por $400.000. Para cancelarla, dígame el token que acaba de recibir en su celular."',
        'alerta'   => 'Los bancos nunca llaman pidiéndote que vayas a un cajero ni solicitan tokens ni claves por teléfono. Corta de inmediato la llamada.'
    ],
    [
        'codigo'   => 'D',
        'nombre'   => 'Quishing',
        'subtitulo'=> 'El código QR engañoso (QR Phishing)',
        'icono'    => 'bi-qr-code-scan',
        'color'    => '#00d2d3',
        'bg'       => 'rgba(0,210,211,.08)',
        'borde'    => 'rgba(0,210,211,.25)',
        'canal'    => 'Códigos QR impresos o en pantallas públicas',
        'desc'     => 'Con la popularización de los códigos QR para ver cartas en restaurantes, pagar estacionamientos o realizar trámites, los atacantes pegan calcomanías falsas sobre los QR legítimos en lugares públicos. Al escanear el QR con la cámara, redirige a una web maliciosa que roba tarjetas o descarga malware.',
        'ejemplo'  => 'Una calcomanía adhesiva colocada sobre el QR de un tótem de pago de estacionamiento en un centro comercial, redirigiendo a una pasarela de pago clonada.',
        'alerta'   => 'Antes de escanear, pasa el dedo por el cartel para verificar que no sea un sticker pegado encima. Revisa la URL que muestra la cámara antes de abrirla.'
    ],
    [
        'codigo'   => 'E',
        'nombre'   => 'Falsas Tiendas y Falsa Ayuda Técnica',
        'subtitulo'=> 'Fraudes en e-commerce y falsos popups de soporte',
        'icono'    => 'bi-cart-x-fill',
        'color'    => '#a55eea',
        'bg'       => 'rgba(165,94,234,.08)',
        'borde'    => 'rgba(165,94,234,.25)',
        'canal'    => 'Redes Sociales / Páginas Web / Ventanas Emergentes',
        'desc'     => '<strong>Tiendas truchas:</strong> Páginas o perfiles de Instagram/Facebook con ofertas ridículamente baratas (ejemplo: notebooks o televisores al 10% u 80% de descuento) exigiendo transferencias inmediatas. Se quedan con el dinero y tus datos bancarios sin enviar nada.<br><br><strong>Falsa ayuda técnica:</strong> Ventanas emergentes en el navegador con alarmas tipo <em>"¡Su computadora tiene 20 virus! Llame al 0800-XXX para soporte"</em>. Cobran tarifas astronómicas o piden acceso remoto.',
        'ejemplo'  => 'Cartel emergente ruidoso bloqueando el navegador con advertencias de malware falso y un número telefónico de "Soporte Microsoft".',
        'alerta'   => 'Si una oferta parece demasiado buena para ser verdad, con seguridad es una estafa. Los navegadores web no diagnostican virus en tu sistema operativo.'
    ]
];
?>

<main class="main-content">
<div class="fade-in-up" style="max-width:860px;">

    <div class="module-badge"><i class="bi bi-person-bounding-box"></i> Módulo 4</div>
    <h1>4.2 Variantes de Engaño Digital (Las mil caras de la estafa)</h1>
    <p class="lead" style="color:var(--primary);font-weight:500;font-size:1.1rem;">
        El objetivo siempre es el mismo: robarte datos personales, contraseñas o dinero. Lo que cambia es el canal de contacto.
    </p>

    <div class="content-block">
        <p>
            Los delincuentes adaptan continuamente sus métodos a las tecnologías que utilizamos a diario:
            desde el correo electrónico de los años 90 hasta los códigos QR y las redes sociales de hoy en día.
            Conocer sus variantes te permitirá identificarlas en segundos:
        </p>
    </div>

    <!-- Lista de Variantes -->
    <?php foreach ($variantes as $v): ?>
    <div class="content-block" style="border-left:4px solid <?= $v['color'] ?>;padding:24px;">
        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
            <div class="d-flex align-items-center gap-3">
                <div style="width:48px;height:48px;border-radius:12px;background:<?= $v['bg'] ?>;border:1px solid <?= $v['borde'] ?>;display:flex;align-items:center;justify-content:center;font-size:1.4rem;color:<?= $v['color'] ?>;">
                    <i class="bi <?= $v['icono'] ?>"></i>
                </div>
                <div>
                    <h3 style="margin:0;font-size:1.2rem;color:var(--text-primary);">
                        <?= $v['codigo'] ?>. <?= $v['nombre'] ?>
                    </h3>
                    <div style="font-size:.85rem;color:<?= $v['color'] ?>;font-weight:600;">
                        <?= $v['subtitulo'] ?>
                    </div>
                </div>
            </div>
            <span class="badge" style="background:<?= $v['bg'] ?>;color:<?= $v['color'] ?>;border:1px solid <?= $v['borde'] ?>;font-size:.78rem;padding:6px 12px;">
                Canal: <?= $v['canal'] ?>
            </span>
        </div>

        <p style="font-size:.92rem;color:var(--text-secondary);line-height:1.6;">
            <?= $v['desc'] ?>
        </p>

        <!-- Ejemplo real -->
        <div class="p-3 mb-2" style="background:var(--bg-main);border:1px solid var(--border-color);border-radius:8px;font-size:.85rem;">
            <div style="color:var(--text-muted);font-weight:700;font-size:.75rem;text-transform:uppercase;letter-spacing:.05em;margin-bottom:4px;">
                <i class="bi bi-chat-left-quote"></i> Ejemplo típico de este ataque:
            </div>
            <div style="color:var(--text-primary);font-family:var(--font-code);font-size:.84rem;">
                <?= $v['ejemplo'] ?>
            </div>
        </div>

        <!-- Alerta / Señal de advertencia -->
        <div style="padding:10px 14px;background:<?= $v['bg'] ?>;border-radius:8px;font-size:.84rem;color:var(--text-secondary);display:flex;align-items:start;gap:8px;">
            <span style="color:<?= $v['color'] ?>;font-size:1rem;line-height:1.2;">🛡️</span>
            <div>
                <strong style="color:<?= $v['color'] ?>;">Cómo protegerte:</strong> <?= $v['alerta'] ?>
            </div>
        </div>
    </div>
    <?php endforeach; ?>

    <!-- Cuadro resumen de canales -->
    <div class="content-block">
        <h3 class="mb-3" style="font-size:1.15rem;">Resumen comparativo de variantes</h3>
        <div class="table-responsive">
            <table class="table table-dark table-hover mb-0" style="font-size:.85rem;border-color:var(--border-color);">
                <thead>
                    <tr style="color:var(--primary);">
                        <th>Término</th>
                        <th>Medio / Canal</th>
                        <th>Gancho habitual</th>
                        <th>Objetivo principal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong style="color:#ff4757;">Phishing</strong></td>
                        <td>Correo Electrónico</td>
                        <td>Cuenta bloqueada, factura pendiente</td>
                        <td>Robo de claves en webs clonadas</td>
                    </tr>
                    <tr>
                        <td><strong style="color:#2ed573;">Smishing</strong></td>
                        <td>SMS / WhatsApp</td>
                        <td>Paquete retenido, código de activación</td>
                        <td>Robo de cuentas o suscripciones caras</td>
                    </tr>
                    <tr>
                        <td><strong style="color:#ffa502;">Vishing</strong></td>
                        <td>Llamada telefónica</td>
                        <td>Falso operador bancario o soporte técnico</td>
                        <td>Manipulación para dictar tokens o transferir</td>
                    </tr>
                    <tr>
                        <td><strong style="color:#00d2d3;">Quishing</strong></td>
                        <td>Códigos QR alterados</td>
                        <td>Menús, estacionamiento, trámites públicos</td>
                        <td>Redirección a páginas maliciosas de pago</td>
                    </tr>
                    <tr>
                        <td><strong style="color:#a55eea;">Tiendas Truchas</strong></td>
                        <td>Redes / Páginas web</td>
                        <td>Ofertas al 80% de descuento irreales</td>
                        <td>Robo de datos de tarjetas y dinero directo</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Navegación -->
    <div class="page-nav">
        <a href="/ciberseguridad/modulos/modulo4/ingenieria.php" class="btn-outline-cyber">
            <i class="bi bi-arrow-left"></i> Sección anterior
        </a>
        <a href="/ciberseguridad/modulos/modulo4/actores.php" class="btn-cyber">
            Siguiente sección <i class="bi bi-arrow-right"></i>
        </a>
    </div>

</div>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
