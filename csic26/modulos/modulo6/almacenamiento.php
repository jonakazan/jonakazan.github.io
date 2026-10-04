<?php
$pageTitle    = '6.2 Memorias USB y Dispositivos Extraíbles';
$activeModule = 'modulo6';
$activePage   = 'almacenamiento';
require_once __DIR__ . '/../../includes/header.php';
?>

<main class="main-content">
<div class="fade-in-up" style="max-width:860px;">

    <div class="module-badge"><i class="bi bi-usb-drive-fill"></i> Módulo 6</div>
    <h1>6.2 Memorias USB y Dispositivos Extraíbles (El "tropiezo" del pendrive)</h1>
    <p class="lead" style="color:var(--primary);font-weight:500;font-size:1.1rem;">
        Los pendrives y discos externos son excelentes para transportar archivos, pero también son uno de los vehículos de contagio más comunes.
    </p>

    <!-- Concepto Central -->
    <div class="content-block">
        <div class="d-flex align-items-start gap-4 flex-wrap">
            <div style="font-size:3.5rem;line-height:1;flex-shrink:0;">💾</div>
            <div>
                <h2 style="font-size:1.3rem;margin-bottom:.6rem;color:var(--text-primary);">
                    La ilusión de la memoria inofensiva
                </h2>
                <p>
                    Tendemos a pensar que las amenazas digitales vienen únicamente a través de Internet o de correos electrónicos.
                    Sin embargo, un pequeño pendrive conectado físicamente a un puerto USB tiene acceso directo al núcleo del sistema operativo.
                </p>
                <p style="margin-bottom:0;">
                    Por esta razón, los dispositivos de almacenamiento extraíble son utilizados con frecuencia por atacantes
                    para saltarse las defensas perimetrales y los cortafuegos de las empresas y hogares.
                </p>
            </div>
        </div>
    </div>

    <!-- La trampa del USB Drop -->
    <div class="content-block" style="border-left:4px solid var(--danger);padding:24px;">
        <div class="d-flex align-items-center gap-3 mb-3">
            <div style="width:48px;height:48px;border-radius:12px;background:rgba(255,71,87,.1);border:1px solid rgba(255,71,87,.3);display:flex;align-items:center;justify-content:center;color:var(--danger);font-size:1.5rem;flex-shrink:0;">
                <i class="bi bi-exclamation-triangle-fill"></i>
            </div>
            <div>
                <h3 style="font-size:1.25rem;margin:0;color:var(--text-primary);">
                    La trampa del pendrive encontrado ("Drop de USB")
                </h3>
                <span style="font-size:.85rem;color:var(--danger);font-weight:600;">Ataque por curiosidad humana</span>
            </div>
        </div>

        <p style="font-size:.92rem;color:var(--text-secondary);line-height:1.6;">
            Imagina que vas caminando por la calle, por el estacionamiento o por el pasillo de tu trabajo y ves un pendrive tirado en el suelo.
            A veces incluso tiene una etiqueta sugerente escrita con marcador: <em>"Sueldos 2026"</em>, <em>"Fotos privadas"</em> o <em>"Contabilidad"</em>.
        </p>

        <div class="p-3 mb-3" style="background:var(--bg-main);border:1px solid var(--border-color);border-radius:10px;">
            <h4 style="font-size:.95rem;color:var(--text-primary);margin-bottom:.5rem;">
                🎣 ¿Cómo funciona el engaño?
            </h4>
            <p style="font-size:.86rem;color:var(--text-secondary);margin:0;line-height:1.55;">
                La curiosidad natural nos tienta a enchufarlo en nuestra computadora <em>"para ver de quién es y devolvérselo"</em>.
                ¡Es una trampa clásica! Los atacantes dejan pendrives infectados a propósito en lugares concurridos.
                Al conectarlo, el dispositivo puede simular ser un teclado ultra veloz (ataques tipo <strong>BadUSB</strong>)
                que teclea comandos automáticos en milisegundos o ejecuta troyanos que abren las puertas a los atacantes.
            </p>
        </div>

        <div style="background:rgba(255,71,87,.08);border:1px solid rgba(255,71,87,.25);border-radius:8px;padding:12px 16px;font-size:.86rem;color:var(--text-primary);">
            <strong>Qué hacer siempre:</strong> Si encuentras una memoria USB abandonada, <strong>NUNCA la conectes a tus equipos</strong>.
            Llévala directamente al área de sistemas, seguridad o conserjería de tu institución.
        </div>
    </div>

    <!-- Regla de oro con memorias propias y de conocidos -->
    <div class="content-block">
        <h3 class="mb-3" style="font-size:1.15rem;">¿Y con los pendrives de amigos o compañeros de trabajo?</h3>
        <p style="font-size:.9rem;color:var(--text-secondary);">
            Incluso si la memoria USB pertenece a alguien de confianza (un colega, un amigo o un familiar),
            puede haberse infectado sin que esa persona lo sepa en un ciber, en una fotocopiadora o en una computadora ajena.
        </p>

        <div class="row g-3">
            <div class="col-md-6">
                <div class="p-3 h-100" style="background:rgba(46,213,115,.05);border:1px solid rgba(46,213,115,.25);border-radius:10px;">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <i class="bi bi-shield-check" style="color:var(--success);font-size:1.3rem;"></i>
                        <strong style="color:var(--success);font-size:.92rem;">Hábito 1: Escaneo antes de abrir</strong>
                    </div>
                    <p style="font-size:.84rem;color:var(--text-secondary);margin:0;">
                        Al enchufar el pendrive, haz clic derecho sobre la unidad en el Explorador de Archivos y selecciona
                        <strong>"Analizar con antivirus"</strong> antes de hacer doble clic en cualquier carpeta o archivo.
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="p-3 h-100" style="background:rgba(0,210,211,.05);border:1px solid rgba(0,210,211,.25);border-radius:10px;">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <i class="bi bi-gear-wide-connected" style="color:var(--primary);font-size:1.3rem;"></i>
                        <strong style="color:var(--primary);font-size:.92rem;">Hábito 2: Desactivar la Reproducción Automática</strong>
                    </div>
                    <p style="font-size:.84rem;color:var(--text-secondary);margin:0;">
                        Asegúrate de que tu sistema operativo tenga desactivado el <em>"AutoRun"</em> o Reproducción Automática para memorias USB.
                        Esto impide que los programas del pendrive se ejecuten solos al conectarlo.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Navegación -->
    <div class="page-nav">
        <a href="/ciberseguridad/modulos/modulo6/moviles.php" class="btn-outline-cyber">
            <i class="bi bi-arrow-left"></i> Sección anterior
        </a>
        <a href="/ciberseguridad/modulos/modulo6/respaldos.php" class="btn-cyber">
            Siguiente sección <i class="bi bi-arrow-right"></i>
        </a>
    </div>

</div>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
