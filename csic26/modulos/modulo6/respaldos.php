<?php
$pageTitle    = '6.3 La Regla 3-2-1 de Copias de Seguridad';
$activeModule = 'modulo6';
$activePage   = 'respaldos';
require_once __DIR__ . '/../../includes/header.php';
?>

<main class="main-content">
<div class="fade-in-up" style="max-width:860px;">

    <div class="module-badge"><i class="bi bi-cloud-arrow-up-fill"></i> Módulo 6</div>
    <h1>6.3 La Regla 3-2-1 de las Copias de Seguridad (La mejor "vacuna" digital)</h1>
    <p class="lead" style="color:var(--primary);font-weight:500;font-size:1.1rem;">
        Perder tu información produce una sensación tremenda de desamparo. El respaldo periódico es la única cura garantizada.
    </p>

    <!-- El escenario de contingencia -->
    <div class="content-block">
        <div class="d-flex align-items-start gap-4 flex-wrap">
            <div style="font-size:3.5rem;line-height:1;flex-shrink:0;">💥</div>
            <div>
                <h2 style="font-size:1.3rem;margin-bottom:.6rem;color:var(--text-primary);">
                    Imagina este escenario por un segundo...
                </h2>
                <p>
                    Te levantas por la mañana, enciendes tu computadora y descubres que el disco duro emite un sonido extraño y se rompió,
                    o que un ataque de Ransomware cifró todos tus archivos, o que te robaron la notebook durante un viaje.
                </p>
                <p style="margin-bottom:0;color:var(--text-secondary);">
                    ¿Qué pasaría con tus fotos familiares irrepetibles, tus documentos de trabajo o tus proyectos de estudio de años?
                    Para evitar esta pesadilla existe una medicina preventiva al alcance de todos: la <strong>copia de seguridad (backup)</strong>.
                </p>
            </div>
        </div>
    </div>

    <!-- La Regla 3-2-1 -->
    <div class="content-block">
        <h2 class="mb-3" style="font-size:1.3rem;">La Regla de Oro Mundial: El Esquema 3-2-1</h2>
        <p>
            Recomendada unánimemente por organismos internacionales de ciberseguridad, esta regla garantiza que tus respaldos sean indestructibles:
        </p>

        <div class="row g-3 my-2">
            <!-- 3 Copias -->
            <div class="col-md-4">
                <div class="p-3 text-center h-100" style="background:rgba(0,210,211,.08);border:1px solid rgba(0,210,211,.3);border-top:4px solid var(--primary);border-radius:12px;">
                    <div style="font-size:2.4rem;font-weight:900;color:var(--primary);font-family:var(--font-code);line-height:1;margin-bottom:.5rem;">3</div>
                    <h3 style="font-size:1.05rem;color:var(--text-primary);margin-bottom:.5rem;">Copias de tus datos</h3>
                    <p style="font-size:.83rem;color:var(--text-secondary);margin:0;line-height:1.5;">
                        Conserva el <strong>archivo original</strong> de trabajo y al menos <strong>2 copias de respaldo adicionales</strong>.
                        Tener un solo respaldo no es suficiente si ese respaldo falla al restaurar.
                    </p>
                </div>
            </div>

            <!-- 2 Soportes -->
            <div class="col-md-4">
                <div class="p-3 text-center h-100" style="background:rgba(46,213,115,.08);border:1px solid rgba(46,213,115,.3);border-top:4px solid var(--success);border-radius:12px;">
                    <div style="font-size:2.4rem;font-weight:900;color:var(--success);font-family:var(--font-code);line-height:1;margin-bottom:.5rem;">2</div>
                    <h3 style="font-size:1.05rem;color:var(--text-primary);margin-bottom:.5rem;">Soportes distintos</h3>
                    <p style="font-size:.83rem;color:var(--text-secondary);margin:0;line-height:1.5;">
                        Guarda las copias en <strong>tecnologías diferentes</strong>: por ejemplo, una en un disco rígido externo/pendrive
                        y otra en la computadora o nube. Si un medio se golpea o falla, el otro permanece intacto.
                    </p>
                </div>
            </div>

            <!-- 1 Offsite -->
            <div class="col-md-4">
                <div class="p-3 text-center h-100" style="background:rgba(123,47,255,.08);border:1px solid rgba(123,47,255,.3);border-top:4px solid var(--accent);border-radius:12px;">
                    <div style="font-size:2.4rem;font-weight:900;color:var(--accent);font-family:var(--font-code);line-height:1;margin-bottom:.5rem;">1</div>
                    <h3 style="font-size:1.05rem;color:var(--text-primary);margin-bottom:.5rem;">Copia fuera de casa</h3>
                    <p style="font-size:.83rem;color:var(--text-secondary);margin:0;line-height:1.5;">
                        Guarda al menos una copia <strong>fuera de tu casa u oficina</strong> (en la nube: Google Drive, OneDrive, Dropbox,
                        o un disco en casa de un familiar). Ante un incendio, robo o siniestro físico, tus datos seguirán a salvo.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Detalle Clave: Desconectar el disco (Air Gap) -->
    <div class="content-block" style="border-left:4px solid var(--danger);padding:22px;">
        <div class="d-flex align-items-start gap-3">
            <div style="font-size:2.4rem;line-height:1;color:var(--danger);">🔌</div>
            <div>
                <h3 style="font-size:1.15rem;color:var(--danger);margin-bottom:.4rem;">
                    ¡El detalle clave de seguridad! El aislamiento offline
                </h3>
                <p style="font-size:.9rem;color:var(--text-secondary);margin-bottom:.6rem;">
                    Si realizas tus respaldos en un disco externo o pendrive, <strong>desconéctalo del equipo inmediatamente después de terminar de copiar los archivos</strong>.
                </p>
                <div style="background:var(--bg-main);border:1px solid var(--border-color);border-radius:8px;padding:12px;font-size:.86rem;color:var(--text-primary);line-height:1.6;">
                    ⚠️ Si dejas el disco de respaldo permanentemente enchufado a la computadora y tu sistema es atacado por un <strong>Ransomware</strong>,
                    el virus detectará la unidad externa como un disco más, cifrará tus respaldos y destruirá tu única oportunidad de recuperación sin pagar.
                </div>
            </div>
        </div>
    </div>

    <!-- Probar la restauración -->
    <div class="highlight-box" style="background:linear-gradient(135deg,rgba(46,213,115,.08),rgba(0,210,211,.06));border-color:rgba(46,213,115,.3);">
        <div class="d-flex align-items-start gap-3">
            <span style="font-size:2rem;line-height:1;">🧪</span>
            <div>
                <h4 style="color:var(--success);margin-bottom:.3rem;font-size:1.05rem;">
                    Un backup no verificado es solo una ilusión
                </h4>
                <p style="margin:0;color:var(--text-secondary);font-size:.9rem;">
                    Una copia de seguridad solo es útil si funciona cuando la necesitas. Acostúmbrate a hacer una prueba periódica:
                    intenta abrir al azar algunos archivos de tu disco externo o descargar un archivo de la nube para comprobar
                    que no estén dañados ni corruptos.
                </p>
            </div>
        </div>
    </div>

    <!-- Navegación -->
    <div class="page-nav">
        <a href="/ciberseguridad/modulos/modulo6/almacenamiento.php" class="btn-outline-cyber">
            <i class="bi bi-arrow-left"></i> Sección anterior
        </a>
        <a href="/ciberseguridad/modulos/modulo6/quiz.php" class="btn-quiz-nav">
            Ir al Cuestionario <i class="bi bi-pencil-square"></i>
        </a>
    </div>

</div>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
