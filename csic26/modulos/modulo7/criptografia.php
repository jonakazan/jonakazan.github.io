<?php
$pageTitle    = '7.3 Criptografía y Firmas Digitales';
$activeModule = 'modulo7';
$activePage   = 'criptografia';
require_once __DIR__ . '/../../includes/header.php';
?>

<main class="main-content">
<div class="fade-in-up" style="max-width:860px;">

    <div class="module-badge"><i class="bi bi-key-fill"></i> Módulo 7</div>
    <h1>7.3 Nociones de Criptografía y Firmas Digitales (El código secreto y el sello de lacre)</h1>
    <p class="lead" style="color:var(--primary);font-weight:500;font-size:1.1rem;">
        La ciencia matemática que protege la confidencialidad y la autenticidad en el mundo moderno.
    </p>

    <!-- Concepto Criptografía -->
    <div class="content-block">
        <div class="d-flex align-items-start gap-4 flex-wrap">
            <div style="font-size:3.5rem;line-height:1;flex-shrink:0;">🔐</div>
            <div>
                <h2 style="font-size:1.3rem;margin-bottom:.6rem;color:var(--text-primary);">
                    El arte de los mensajes secretos
                </h2>
                <p>
                    La palabra <strong>criptografía</strong> proviene del griego <em>kryptós</em> (oculto) y <em>graphein</em> (escribir).
                    Es el arte y la ciencia de transformar un mensaje legible en un código indescifrable, de modo que
                    <strong>solo la persona que posee la clave matemática correcta</strong> pueda descifrarlo y leerlo.
                </p>
                <p style="margin-bottom:0;">
                    Gracias a la criptografía moderna, hoy podemos hacer compras online, enviar mensajes confidenciales
                    y firmar documentos oficiales con total validez legal a través de Internet.
                </p>
            </div>
        </div>
    </div>

    <!-- Parte A: Cifrado de extremo a extremo -->
    <div class="content-block">
        <div class="d-flex align-items-center gap-2 mb-3">
            <span class="badge" style="background:rgba(46,213,115,.15);color:var(--success);border:1px solid rgba(46,213,115,.3);font-size:.9rem;padding:6px 12px;">Parte A</span>
            <h2 style="margin:0;font-size:1.3rem;">Cifrado de Extremo a Extremo (E2EE)</h2>
        </div>
        <p>
            Aplicaciones de mensajería líderes como WhatsApp o Signal utilizan <strong>cifrado de extremo a extremo</strong>
            (<em>End-to-End Encryption</em>). ¿Cómo funciona en la práctica?
        </p>

        <div class="p-3 mb-3" style="background:var(--bg-card);border:1px solid rgba(46,213,115,.3);border-radius:12px;">
            <div class="d-flex align-items-start gap-3">
                <span style="font-size:2.2rem;line-height:1;">📦 🔒</span>
                <div>
                    <h3 style="font-size:1.1rem;color:var(--success);margin-bottom:.4rem;">
                        La analogía de la carta en la caja fuerte blindada
                    </h3>
                    <p style="font-size:.88rem;color:var(--text-secondary);line-height:1.55;margin-bottom:.6rem;">
                        Imagina que antes de enviar un mensaje de texto, tu teléfono lo introduce dentro de una <strong>caja fuerte de acero</strong>
                        y le coloca un candado digital. Esa caja fuerte viaja por los cables, antenas y servidores de todo Internet.
                    </p>
                    <p style="font-size:.85rem;color:var(--text-primary);margin:0;">
                        La caja solo se abre cuando aterriza en el teléfono de la persona con la que chateas, porque
                        <strong>únicamente su dispositivo posee la llave matemática privada</strong> para destrabarla.
                    </p>
                </div>
            </div>
        </div>

        <div style="padding:12px 16px;background:rgba(46,213,115,.06);border-radius:8px;font-size:.85rem;color:var(--text-secondary);border:1px solid rgba(46,213,115,.2);">
            🛡️ <strong>¿Quién puede leerlo en el camino?</strong> Nadie. Ni tu proveedor de telefonía (Claro, Movistar, etc.), ni los atacantes conectados a la misma red Wi-Fi, ni los gobiernos, <strong>ni siquiera la propia empresa WhatsApp</strong> pueden ver el contenido de tus chats ni escuchar tus llamadas de voz.
        </div>
    </div>

    <!-- Parte B: Firma Electrónica vs Firma Digital -->
    <div class="content-block">
        <div class="d-flex align-items-center gap-2 mb-3">
            <span class="badge" style="background:rgba(0,210,211,.15);color:var(--primary);border:1px solid rgba(0,210,211,.3);font-size:.9rem;padding:6px 12px;">Parte B</span>
            <h2 style="margin:0;font-size:1.3rem;">Firma Electrónica vs. Firma Digital</h2>
        </div>
        <p>
            Al validar contratos, balances o autorizaciones en formato digital, suele haber una confusión muy peligrosa
            entre estos dos conceptos legales y técnicos:
        </p>

        <div class="row g-3">
            <!-- Firma Electrónica -->
            <div class="col-md-6">
                <div class="p-3 h-100" style="background:rgba(255,71,87,.05);border:1px solid rgba(255,71,87,.3);border-radius:10px;">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <i class="bi bi-file-earmark-x" style="color:var(--danger);font-size:1.3rem;"></i>
                        <strong style="color:var(--danger);font-size:.95rem;">Firma Electrónica (Simple)</strong>
                    </div>
                    <div class="badge bg-danger mb-2" style="font-size:.72rem;">Fácil de falsificar</div>
                    <p style="font-size:.85rem;color:var(--text-secondary);line-height:1.5;margin-bottom:.8rem;">
                        Es cualquier método simple para expresar conformidad: por ejemplo, escanear tu firma manuscrita y
                        <strong>pegar la foto en un Word</strong> o marcar una casilla de <em>"Acepto los términos"</em>.
                    </p>
                    <div style="background:rgba(255,71,87,.1);padding:8px 10px;border-radius:6px;font-size:.78rem;color:var(--text-primary);">
                        ⚠️ Riesgo: Cualquier persona puede copiar la imagen de tu firma y pegarla en un pagaré o documento fraudulento sin tu permiso. No asegura que el texto no haya sido modificado.
                    </div>
                </div>
            </div>

            <!-- Firma Digital -->
            <div class="col-md-6">
                <div class="p-3 h-100" style="background:rgba(46,213,115,.05);border:1px solid rgba(46,213,115,.3);border-radius:10px;">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <i class="bi bi-file-earmark-check-fill" style="color:var(--success);font-size:1.3rem;"></i>
                        <strong style="color:var(--success);font-size:.95rem;">Firma Digital (Avanzada)</strong>
                    </div>
                    <div class="badge bg-success mb-2" style="font-size:.72rem;">Criptográficamente inmutable</div>
                    <p style="font-size:.85rem;color:var(--text-secondary);line-height:1.5;margin-bottom:.8rem;">
                        Es un algoritmo matemático respaldado por un <strong>Certificado Digital oficial</strong> emitido por una Autoridad Certificadora reconocida legalmente.
                    </p>
                    <div style="background:rgba(46,213,115,.1);padding:8px 10px;border-radius:6px;font-size:.78rem;color:var(--text-primary);">
                        🔒 El sello de lacre digital: Garantiza con certeza matemática la identidad del firmante (no repudio) y la integridad absoluta. <strong>Si alguien altera una sola coma del PDF firmado, la firma se rompe automáticamente.</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navegación -->
    <div class="page-nav">
        <a href="/ciberseguridad/modulos/modulo7/brechas.php" class="btn-outline-cyber">
            <i class="bi bi-arrow-left"></i> Sección anterior
        </a>
        <a href="/ciberseguridad/modulos/modulo7/quiz.php" class="btn-quiz-nav">
            Ir al Cuestionario <i class="bi bi-pencil-square"></i>
        </a>
    </div>

</div>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
