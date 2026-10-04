<?php
$pageTitle    = '7.1 Datos Personales y Huella Digital';
$activeModule = 'modulo7';
$activePage   = 'huella';
require_once __DIR__ . '/../../includes/header.php';
?>

<main class="main-content">
<div class="fade-in-up" style="max-width:860px;">

    <div class="module-badge"><i class="bi bi-fingerprint"></i> Módulo 7</div>
    <h1>7.1 Datos Personales y la Huella Digital (Tus pisadas en la playa digital)</h1>
    <p class="lead" style="color:var(--primary);font-weight:500;font-size:1.1rem;">
        Cada clic, foto o búsqueda deja una marca indeleble en Internet que conforma tu identidad digital pública.
    </p>

    <!-- Metáfora de la playa -->
    <div class="content-block">
        <div class="d-flex align-items-start gap-4 flex-wrap">
            <div style="font-size:3.5rem;line-height:1;flex-shrink:0;">🏖️</div>
            <div>
                <h2 style="font-size:1.3rem;margin-bottom:.6rem;color:var(--text-primary);">
                    Tus pisadas en la orilla del mar digital
                </h2>
                <p>
                    Imagina que caminas descalzo por la orilla de una playa: con cada paso que das, vas dejando
                    una huella visible en la arena húmeda. En el mundo de Internet ocurre exactamente lo mismo:
                    cada vez que navegas, buscas una dirección en el mapa, compras un producto o reaccionas a un video,
                    vas dejando un rastro permanente conocido como tu <strong>Huella Digital</strong>.
                </p>
                <p style="margin-bottom:0;">
                    Es fundamental distinguir los dos tipos de rastros que dejamos al estar conectados:
                </p>
            </div>
        </div>
    </div>

    <!-- Huella Activa vs Pasiva -->
    <div class="row g-3 mb-4">
        <!-- Huella Activa -->
        <div class="col-md-6">
            <div class="p-4 h-100" style="background:var(--bg-card);border:1px solid rgba(0,210,211,.3);border-top:4px solid var(--primary);border-radius:12px;">
                <div class="d-flex align-items-center gap-2 mb-3">
                    <div style="width:40px;height:40px;border-radius:10px;background:rgba(0,210,211,.1);border:1px solid rgba(0,210,211,.3);display:flex;align-items:center;justify-content:center;color:var(--primary);font-size:1.3rem;">
                        <i class="bi bi-hand-index-thumb"></i>
                    </div>
                    <div>
                        <h3 style="font-size:1.1rem;margin:0;color:var(--text-primary);">Huella Digital Activa</h3>
                        <span style="font-size:.78rem;color:var(--primary);font-weight:600;">Lo que entregas voluntariamente</span>
                    </div>
                </div>
                <p style="font-size:.88rem;color:var(--text-secondary);line-height:1.55;margin-bottom:.8rem;">
                    Es la información que compartes de forma <strong>consciente y voluntaria</strong> en el entorno digital:
                </p>
                <ul style="font-size:.85rem;color:var(--text-primary);padding-left:1.2rem;margin:0;line-height:1.6;">
                    <li>Fotos y videos que publicas en redes sociales.</li>
                    <li>Comentarios, tweets y opiniones en foros o comercios.</li>
                    <li>Datos ingresados al completar formularios y perfiles.</li>
                    <li>Likes, reacciones y mensajes enviados en plataformas públicas.</li>
                </ul>
            </div>
        </div>

        <!-- Huella Pasiva -->
        <div class="col-md-6">
            <div class="p-4 h-100" style="background:var(--bg-card);border:1px solid rgba(123,47,255,.3);border-top:4px solid var(--accent);border-radius:12px;">
                <div class="d-flex align-items-center gap-2 mb-3">
                    <div style="width:40px;height:40px;border-radius:10px;background:rgba(123,47,255,.1);border:1px solid rgba(123,47,255,.3);display:flex;align-items:center;justify-content:center;color:var(--accent);font-size:1.3rem;">
                        <i class="bi bi-broadcast"></i>
                    </div>
                    <div>
                        <h3 style="font-size:1.1rem;margin:0;color:var(--text-primary);">Huella Digital Pasiva</h3>
                        <span style="font-size:.78rem;color:var(--accent);font-weight:600;">Lo que el sistema registra en silencio</span>
                    </div>
                </div>
                <p style="font-size:.88rem;color:var(--text-secondary);line-height:1.55;margin-bottom:.8rem;">
                    Es la telemetría y datos que las aplicaciones recopilan <strong>en segundo plano</strong> sin que te des cuenta:
                </p>
                <ul style="font-size:.85rem;color:var(--text-primary);padding-left:1.2rem;margin:0;line-height:1.6;">
                    <li>Tu <strong>dirección IP</strong> (ubicación geográfica aproximada).</li>
                    <li>Marca, modelo de equipo y sistema operativo que utilizas.</li>
                    <li>Nivel de batería, resolución de pantalla y tipo de navegador.</li>
                    <li>Historial de páginas y tiempo de permanencia mediante <strong>cookies</strong>.</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- El peligro del Oversharing -->
    <div class="content-block" style="border-left:4px solid var(--danger);padding:24px;">
        <div class="d-flex align-items-center gap-3 mb-3">
            <div style="width:46px;height:46px;border-radius:12px;background:rgba(255,71,87,.1);border:1px solid rgba(255,71,87,.3);display:flex;align-items:center;justify-content:center;color:var(--danger);font-size:1.4rem;flex-shrink:0;">
                <i class="bi bi-megaphone-fill"></i>
            </div>
            <div>
                <h3 style="font-size:1.25rem;margin:0;color:var(--text-primary);">
                    El peligro de la Sobreexposición (Oversharing)
                </h3>
                <span style="font-size:.82rem;color:var(--danger);font-weight:600;">Cuando publicamos de más sin medir las consecuencias</span>
            </div>
        </div>

        <p style="font-size:.9rem;color:var(--text-secondary);line-height:1.6;">
            A todos nos gusta compartir momentos felices en redes sociales. Sin embargo, publicar ciertos datos
            equivale a poner un cartel en la puerta de casa contando cuándo nos vamos de vacaciones o cuál es nuestra rutina diaria.
        </p>

        <h4 style="font-size:.95rem;color:var(--text-primary);margin-top:1.2rem;margin-bottom:.8rem;">
            🚫 4 datos que NUNCA debes publicar en redes sociales:
        </h4>

        <div class="row g-3">
            <div class="col-sm-6">
                <div class="p-3 h-100" style="background:var(--bg-main);border:1px solid var(--border-color);border-radius:10px;">
                    <div style="font-size:1.3rem;margin-bottom:.3rem;">✈️ 🎟️</div>
                    <strong style="color:var(--danger);font-size:.88rem;display:block;margin-bottom:.3rem;">Pasajes de avión o entradas</strong>
                    <p style="font-size:.8rem;color:var(--text-secondary);margin:0;">
                        Los códigos de barras y códigos QR impresos contienen el código de reserva (PNR) y tus datos completos, permitiendo anular o alterar tu viaje.
                    </p>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="p-3 h-100" style="background:var(--bg-main);border:1px solid var(--border-color);border-radius:10px;">
                    <div style="font-size:1.3rem;margin-bottom:.3rem;">📍 🏖️</div>
                    <strong style="color:var(--danger);font-size:.88rem;display:block;margin-bottom:.3rem;">Ubicación en tiempo real</strong>
                    <p style="font-size:.8rem;color:var(--text-secondary);margin:0;">
                        Publicar que estás cenando lejos o de viaje es una señal abierta para ladrones de que tu vivienda está vacía y desprotegida.
                    </p>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="p-3 h-100" style="background:var(--bg-main);border:1px solid var(--border-color);border-radius:10px;">
                    <div style="font-size:1.3rem;margin-bottom:.3rem;">💳 🪪</div>
                    <strong style="color:var(--danger);font-size:.88rem;display:block;margin-bottom:.3rem;">Documentos oficiales o tarjetas</strong>
                    <p style="font-size:.8rem;color:var(--text-secondary);margin:0;">
                        Ni siquiera tapando algunos dígitos: las fotos de DNI, pasaportes o tarjetas son insumos directos para el robo de identidad financiero.
                    </p>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="p-3 h-100" style="background:var(--bg-main);border:1px solid var(--border-color);border-radius:10px;">
                    <div style="font-size:1.3rem;margin-bottom:.3rem;">🎒 🏫</div>
                    <strong style="color:var(--danger);font-size:.88rem;display:block;margin-bottom:.3rem;">Rutinas familiares y escuelas</strong>
                    <p style="font-size:.8rem;color:var(--text-secondary);margin:0;">
                        Horarios de salida, uniformes escolares o rutinas de trabajo ofrecen la materia prima perfecta para estafas telefónicas personalizadas (Spear Phishing).
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Navegación -->
    <div class="page-nav">
        <a href="/ciberseguridad/modulos/modulo6/quiz.php" class="btn-outline-cyber">
            <i class="bi bi-arrow-left"></i> Módulo anterior
        </a>
        <a href="/ciberseguridad/modulos/modulo7/brechas.php" class="btn-cyber">
            Siguiente sección <i class="bi bi-arrow-right"></i>
        </a>
    </div>

</div>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
