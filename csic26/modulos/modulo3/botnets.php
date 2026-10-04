<?php
$pageTitle    = '3.3 Botnets, Ataques DDoS e IA en Amenazas';
$activeModule = 'modulo3';
$activePage   = 'botnets';
require_once __DIR__ . '/../../includes/header.php';
?>

<main class="main-content">
<div class="fade-in-up" style="max-width:860px;">

    <div class="module-badge"><i class="bi bi-bug-fill"></i> Módulo 3</div>
    <h1>3.3 Botnets, Ataques DoS/DDoS e Inteligencia Artificial en Amenazas</h1>
    <p class="lead" style="color:var(--primary);font-weight:500;font-size:1.1rem;">
        Más allá del malware tradicional, existen formas avanzadas de ataque que combinan miles de
        equipos o aprovechan la inteligencia artificial.
    </p>

    <!-- BOTNET -->
    <div class="content-block" style="border-color:rgba(123,47,255,.3);background:rgba(123,47,255,.03);">
        <div class="d-flex align-items-center gap-3 mb-3">
            <span style="font-size:2.5rem;">🤖</span>
            <div>
                <div style="font-size:.72rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--secondary);">
                    Amenaza 06
                </div>
                <h2 style="margin:0;font-size:1.15rem;">Botnet — La red de computadoras zombi</h2>
            </div>
        </div>

        <p style="color:var(--text-secondary);">
            Un atacante infecta con un programa silencioso miles de computadoras, celulares o
            dispositivos inteligentes (cámaras Wi-Fi, smart TVs, routers). Esos equipos siguen
            funcionando normalmente para sus dueños, pero en secreto
            <strong style="color:var(--secondary);">obedecen las órdenes del atacante</strong>
            para realizar ciberataques masivos.
        </p>

        <!-- Diagrama de botnet -->
        <div class="p-4 mt-2" style="background:rgba(0,0,0,.2);border-radius:12px;text-align:center;">
            <div style="display:flex;align-items:center;justify-content:center;gap:16px;flex-wrap:wrap;">
                <!-- Dispositivos zombi -->
                <div style="display:flex;flex-direction:column;gap:8px;align-items:center;">
                    <?php for($i=0;$i<4;$i++): ?>
                    <div style="padding:4px 10px;background:rgba(123,47,255,.15);border:1px solid rgba(123,47,255,.3);border-radius:6px;font-size:.78rem;color:var(--secondary);">
                        <?= ['💻 PC infectada','📱 Celular zombi','📷 Cámara hackeada','📺 Smart TV comprometida'][$i] ?>
                    </div>
                    <?php endfor; ?>
                </div>
                <div style="font-size:1.5rem;color:var(--text-muted);">→</div>
                <!-- Atacante -->
                <div style="padding:16px 20px;background:rgba(123,47,255,.2);border:2px solid rgba(123,47,255,.5);border-radius:12px;text-align:center;">
                    <div style="font-size:2rem;">😈</div>
                    <div style="font-size:.78rem;font-weight:700;color:var(--secondary);">ATACANTE</div>
                    <div style="font-size:.7rem;color:var(--text-muted);">Control remoto</div>
                </div>
                <div style="font-size:1.5rem;color:var(--text-muted);">→</div>
                <!-- Objetivo -->
                <div style="padding:16px 20px;background:rgba(255,71,87,.15);border:2px solid rgba(255,71,87,.4);border-radius:12px;text-align:center;">
                    <div style="font-size:2rem;">🎯</div>
                    <div style="font-size:.78rem;font-weight:700;color:var(--danger);">VÍCTIMA</div>
                    <div style="font-size:.7rem;color:var(--text-muted);">Atacada masivamente</div>
                </div>
            </div>
        </div>

        <div class="p-3 mt-3" style="background:rgba(0,0,0,.15);border-radius:8px;border-left:3px solid rgba(123,47,255,.5);">
            <small style="color:var(--text-muted);">
                <strong style="color:var(--text-secondary);">📖 Ejemplo:</strong>
                Tu router viejo tiene una contraseña de fábrica que nunca cambiaste. Un atacante lo
                infecta y lo suma a su botnet. Tu internet va lento porque está siendo usado para
                atacar otros sitios. Vos no te enterás de nada.
            </small>
        </div>
    </div>

    <!-- DoS / DDoS -->
    <div class="content-block" style="border-color:rgba(255,71,87,.3);background:rgba(255,71,87,.03);">
        <div class="d-flex align-items-center gap-3 mb-3">
            <span style="font-size:2.5rem;">🌊</span>
            <div>
                <div style="font-size:.72rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--danger);">
                    Amenaza 07
                </div>
                <h2 style="margin:0;font-size:1.15rem;">Ataques DoS y DDoS — El ataque por saturación</h2>
            </div>
        </div>

        <div class="row g-3 mb-3">
            <div class="col-md-6">
                <div class="p-3 h-100" style="background:rgba(255,71,87,.06);border:1px solid rgba(255,71,87,.15);border-radius:10px;">
                    <h4 style="font-size:.88rem;color:var(--danger);margin-bottom:.5rem;">DoS — Denegación de Servicio</h4>
                    <p style="font-size:.83rem;color:var(--text-secondary);margin:0;">
                        Un solo equipo envía masivas solicitudes a un servidor para agotarlo.
                        <em>Denial of Service</em>.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-3 h-100" style="background:rgba(255,71,87,.1);border:1px solid rgba(255,71,87,.3);border-radius:10px;">
                    <h4 style="font-size:.88rem;color:var(--danger);margin-bottom:.5rem;">DDoS — Distribuido <span style="color:var(--text-muted);">(más potente)</span></h4>
                    <p style="font-size:.83rem;color:var(--text-secondary);margin:0;">
                        Miles de equipos (una botnet) atacan simultáneamente. Mucho más difícil
                        de bloquear. <em>Distributed Denial of Service</em>.
                    </p>
                </div>
            </div>
        </div>

        <p style="color:var(--text-secondary);font-size:.95rem;">
            Consiste en enviar millones de visitas falsas y simultáneas a un sitio web hasta que
            el servidor <strong style="color:var(--danger);">colapsa por sobrecarga y deja de funcionar</strong>.
            Afecta directamente al pilar de <strong>Disponibilidad</strong> de la Tríada CIA.
        </p>

        <div class="highlight-box" style="border-color:rgba(255,71,87,.2);">
            <p style="margin:0;color:var(--text-secondary);font-size:.88rem;">
                <strong style="color:var(--text-primary);">🏪 Analogía:</strong>
                Es como si miles de personas intentaran entrar al mismo tiempo por la puerta estrecha
                de un local para bloquear la entrada a los clientes reales. El negocio no puede
                atender a nadie aunque quiera.
            </p>
        </div>
    </div>

    <!-- IA en amenazas -->
    <div class="content-block" style="border-color:rgba(0,212,255,.25);background:rgba(0,212,255,.03);">
        <div class="d-flex align-items-center gap-3 mb-3">
            <span style="font-size:2.5rem;">🧠</span>
            <div>
                <div style="font-size:.72rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--primary);">
                    Amenaza emergente
                </div>
                <h2 style="margin:0;font-size:1.15rem;">Inteligencia Artificial aplicada a Ciberamenazas</h2>
            </div>
        </div>

        <p style="color:var(--text-secondary);">
            Hoy en día, los delincuentes usan herramientas de <strong style="color:var(--primary);">
            Inteligencia Artificial</strong> para sofisticar sus ataques y hacerlos más creíbles:
        </p>

        <div class="row g-3">
            <div class="col-md-4">
                <div class="p-3 h-100" style="background:rgba(0,212,255,.06);border:1px solid rgba(0,212,255,.2);border-radius:10px;">
                    <div style="font-size:1.5rem;margin-bottom:.5rem;">✍️</div>
                    <h4 style="font-size:.9rem;color:var(--primary);margin-bottom:.4rem;">Correos sin errores</h4>
                    <p style="font-size:.82rem;color:var(--text-secondary);margin:0;">
                        Redactan correos de phishing perfectos, sin errores ortográficos y en cualquier
                        idioma. Mucho más difíciles de detectar.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 h-100" style="background:rgba(0,212,255,.06);border:1px solid rgba(0,212,255,.2);border-radius:10px;">
                    <div style="font-size:1.5rem;margin-bottom:.5rem;">🎭</div>
                    <h4 style="font-size:.9rem;color:var(--primary);margin-bottom:.4rem;">Deepfakes de voz y video</h4>
                    <p style="font-size:.82rem;color:var(--text-secondary);margin:0;">
                        Clonan voces de personas reales para simular llamadas de familiares en
                        apuros o jefes que piden transferencias urgentes.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 h-100" style="background:rgba(0,212,255,.06);border:1px solid rgba(0,212,255,.2);border-radius:10px;">
                    <div style="font-size:1.5rem;margin-bottom:.5rem;">🔍</div>
                    <h4 style="font-size:.9rem;color:var(--primary);margin-bottom:.4rem;">Búsqueda automática</h4>
                    <p style="font-size:.82rem;color:var(--text-secondary);margin:0;">
                        Escanean millones de sistemas en segundos buscando vulnerabilidades, sin
                        intervención humana.
                    </p>
                </div>
            </div>
        </div>

        <div class="highlight-box mt-3" style="border-color:rgba(0,212,255,.25);">
            <p style="margin:0;font-size:.88rem;color:var(--text-secondary);">
                <strong style="color:var(--text-primary);">💡 La defensa también evoluciona:</strong>
                Así como los atacantes usan la IA, los sistemas de seguridad modernos también la emplean
                para detectar patrones anómalos, identificar malware nuevo y responder a incidentes
                más rápido que nunca.
            </p>
        </div>
    </div>

    <!-- Resumen de medidas preventivas -->
    <div class="content-block" style="border-color:rgba(0,230,118,.2);background:rgba(0,230,118,.03);">
        <h2 class="mb-3" style="font-size:1.05rem;color:var(--success);">
            <i class="bi bi-shield-check-fill"></i> Medidas preventivas clave contra el malware
        </h2>
        <ul class="cyber-list mb-0">
            <li><span class="list-icon" style="color:var(--success);">✓</span><span>Mantener el <strong style="color:var(--text-primary);">sistema operativo y aplicaciones actualizados</strong> (los parches cierran vulnerabilidades).</span></li>
            <li><span class="list-icon" style="color:var(--success);">✓</span><span>Usar un <strong style="color:var(--text-primary);">antivirus confiable y actualizado</strong>.</span></li>
            <li><span class="list-icon" style="color:var(--success);">✓</span><span><strong style="color:var(--text-primary);">No abrir adjuntos</strong> ni hacer clic en enlaces de correos o mensajes no esperados.</span></li>
            <li><span class="list-icon" style="color:var(--success);">✓</span><span>Descargar programas <strong style="color:var(--text-primary);">solo desde fuentes oficiales</strong> (evitar software pirata).</span></li>
            <li><span class="list-icon" style="color:var(--success);">✓</span><span>Hacer <strong style="color:var(--text-primary);">copias de seguridad periódicas</strong> en un disco externo desconectado (la única defensa real ante el ransomware).</span></li>
            <li><span class="list-icon" style="color:var(--success);">✓</span><span>Cambiar las <strong style="color:var(--text-primary);">contraseñas de fábrica</strong> de routers y dispositivos inteligentes para no unirte a una botnet.</span></li>
        </ul>
    </div>

    <!-- Navegación -->
    <div class="page-nav">
        <a href="/ciberseguridad/modulos/modulo3/tipos.php" class="btn-outline-cyber">
            <i class="bi bi-arrow-left"></i> Anterior
        </a>
        <a href="/ciberseguridad/modulos/modulo3/quiz.php" class="btn-quiz-nav">
            <i class="bi bi-pencil-square"></i> Ir al Cuestionario
        </a>
    </div>

</div>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
