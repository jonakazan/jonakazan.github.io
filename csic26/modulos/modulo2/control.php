<?php
$pageTitle    = '2.4 Control de Acceso, Autenticación y Trazabilidad';
$activeModule = 'modulo2';
$activePage   = 'control';
require_once __DIR__ . '/../../includes/header.php';
?>

<main class="main-content">
<div class="fade-in-up" style="max-width:860px;">

    <div class="module-badge"><i class="bi bi-key-fill"></i> Módulo 2</div>
    <h1>2.4 Control de Acceso: Autenticación, Autorización y Trazabilidad</h1>
    <p class="lead" style="color:var(--primary);font-weight:500;font-size:1.1rem;">
        Tres procesos esenciales que trabajan juntos para organizar la seguridad en cualquier sistema.
    </p>

    <!-- Los tres procesos en secuencia -->
    <div class="content-block">
        <p>
            Para entender cómo se organiza la seguridad en los sistemas, en el trabajo o en aplicaciones
            digitales, distinguimos tres procesos esenciales que trabajan siempre en conjunto:
        </p>

        <!-- Flujo visual -->
        <div style="display:flex;align-items:center;gap:8px;flex-wrap:wrap;justify-content:center;padding:1.5rem 0;margin-bottom:1rem;">
            <div style="text-align:center;">
                <div style="width:90px;height:90px;border-radius:50%;background:rgba(0,212,255,.1);border:2px solid var(--primary);
                    display:flex;flex-direction:column;align-items:center;justify-content:center;margin:0 auto .5rem;">
                    <span style="font-size:1.6rem;">🪪</span>
                </div>
                <div style="font-size:.78rem;font-weight:700;color:var(--primary);">AUTENTICACIÓN</div>
                <div style="font-size:.72rem;color:var(--text-muted);">¿Quién sos?</div>
            </div>
            <div style="font-size:1.5rem;color:var(--text-muted);">→</div>
            <div style="text-align:center;">
                <div style="width:90px;height:90px;border-radius:50%;background:rgba(0,230,118,.1);border:2px solid var(--success);
                    display:flex;flex-direction:column;align-items:center;justify-content:center;margin:0 auto .5rem;">
                    <span style="font-size:1.6rem;">✅</span>
                </div>
                <div style="font-size:.78rem;font-weight:700;color:var(--success);">AUTORIZACIÓN</div>
                <div style="font-size:.72rem;color:var(--text-muted);">¿Qué podés hacer?</div>
            </div>
            <div style="font-size:1.5rem;color:var(--text-muted);">→</div>
            <div style="text-align:center;">
                <div style="width:90px;height:90px;border-radius:50%;background:rgba(255,215,64,.1);border:2px solid var(--warning);
                    display:flex;flex-direction:column;align-items:center;justify-content:center;margin:0 auto .5rem;">
                    <span style="font-size:1.6rem;">📋</span>
                </div>
                <div style="font-size:.78rem;font-weight:700;color:var(--warning);">TRAZABILIDAD</div>
                <div style="font-size:.72rem;color:var(--text-muted);">¿Qué hiciste?</div>
            </div>
        </div>
    </div>

    <!-- Detalle de cada proceso -->
    <div class="content-block">
        <!-- Autenticación -->
        <div class="mb-4">
            <div class="d-flex align-items-center gap-2 mb-2">
                <span style="font-size:1.5rem;">🪪</span>
                <h2 style="font-size:1.1rem;margin:0;color:var(--primary);">Autenticación — ¿Quién sos?</h2>
            </div>
            <div class="highlight-box" style="border-color:rgba(0,212,255,.2);">
                <p style="margin:0;color:var(--text-secondary);">
                    Es el proceso inicial donde el sistema <strong style="color:var(--text-primary);">comprueba la identidad del usuario</strong>.
                    Se realiza presentando una credencial: usuario y contraseña, huella dactilar o Passkey.
                </p>
            </div>
            <div class="mt-2 p-3" style="background:rgba(255,255,255,.02);border-radius:8px;border-left:3px solid var(--primary);">
                <small style="color:var(--text-secondary);">
                    <strong style="color:var(--text-primary);">Ejemplo:</strong>
                    Cuando escribís tu correo y contraseña para entrar a Gmail, estás completando
                    el proceso de autenticación.
                </small>
            </div>
        </div>

        <!-- Autorización -->
        <div class="mb-4">
            <div class="d-flex align-items-center gap-2 mb-2">
                <span style="font-size:1.5rem;">✅</span>
                <h2 style="font-size:1.1rem;margin:0;color:var(--success);">Autorización — ¿Qué tenés permiso de hacer?</h2>
            </div>
            <div class="highlight-box" style="border-color:rgba(0,230,118,.2);background:rgba(0,230,118,.04);">
                <p style="margin:0;color:var(--text-secondary);">
                    Una vez que el sistema sabe quién sos, <strong style="color:var(--text-primary);">determina a qué carpetas, archivos
                    o funciones podés acceder</strong>. Aquí aplica el
                    <strong style="color:var(--success);">Principio de Mínimo Privilegio</strong>.
                </p>
            </div>

            <!-- Principio de Mínimo Privilegio -->
            <div class="p-4 mt-3" style="background:rgba(0,230,118,.05);border:1px solid rgba(0,230,118,.2);border-radius:var(--radius);">
                <h3 style="font-size:.95rem;color:var(--success);margin-bottom:.75rem;">
                    <i class="bi bi-shield-check"></i> Principio de Mínimo Privilegio
                </h3>
                <p style="font-size:.88rem;color:var(--text-secondary);margin-bottom:.75rem;">
                    Cada persona debe contar únicamente con los permisos <strong style="color:var(--text-primary);">
                    estrictamente necesarios</strong> para cumplir con sus tareas diarias, evitando
                    otorgar accesos totales o de administrador "por las dudas".
                </p>
                <div class="row g-2">
                    <div class="col-sm-6">
                        <div class="p-2" style="background:rgba(0,230,118,.06);border-radius:6px;font-size:.82rem;">
                            <span style="color:var(--success);">✓</span> Un cajero bancario puede ver el saldo del cliente<br>
                            <span style="color:var(--danger);">✗</span> Pero NO puede modificar límites de crédito
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-2" style="background:rgba(0,230,118,.06);border-radius:6px;font-size:.82rem;">
                            <span style="color:var(--success);">✓</span> Un profesor ve las notas de sus alumnos<br>
                            <span style="color:var(--danger);">✗</span> Pero NO puede ver otros cursos ni datos administrativos
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Trazabilidad -->
        <div class="mb-2">
            <div class="d-flex align-items-center gap-2 mb-2">
                <span style="font-size:1.5rem;">📋</span>
                <h2 style="font-size:1.1rem;margin:0;color:var(--warning);">Trazabilidad — ¿Qué acciones realizaste y cuándo?</h2>
            </div>
            <div class="highlight-box" style="border-color:rgba(255,215,64,.2);background:rgba(255,215,64,.04);">
                <p style="margin:0;color:var(--text-secondary);">
                    Consiste en guardar un <strong style="color:var(--text-primary);">registro de eventos (logs)</strong>
                    para saber qué usuario accedió a qué información, en qué fecha y qué cambios realizó.
                </p>
            </div>
            <div class="mt-3">
                <h4 style="font-size:.88rem;color:var(--text-secondary);margin-bottom:.75rem;">¿Para qué sirven los logs?</h4>
                <ul class="cyber-list mb-0">
                    <li><span class="list-icon" style="color:var(--warning);">🔍</span><span>Investigar errores o fallos del sistema.</span></li>
                    <li><span class="list-icon" style="color:var(--warning);">📊</span><span>Auditar el sistema en busca de irregularidades.</span></li>
                    <li><span class="list-icon" style="color:var(--warning);">🚨</span><span>Detectar accesos indebidos o intentos de ataque.</span></li>
                    <li><span class="list-icon" style="color:var(--warning);">⚖️</span><span>Reunir evidencia en caso de incidentes de seguridad.</span></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Ejemplo integrador -->
    <div class="content-block" style="border-color:rgba(123,47,255,.25);background:rgba(123,47,255,.03);">
        <h3 style="font-size:1rem;margin-bottom:1rem;"><i class="bi bi-diagram-3" style="color:var(--secondary);"></i> Ejemplo integrador: Un sistema bancario</h3>
        <div class="row g-2">
            <div class="col-12">
                <div class="p-3" style="background:rgba(0,212,255,.06);border-radius:8px;border-left:3px solid var(--primary);font-size:.88rem;color:var(--text-secondary);margin-bottom:8px;">
                    <strong style="color:var(--primary);">1. Autenticación:</strong> Juan ingresa con su DNI y contraseña + código SMS (2FA). El banco confirma que es Juan.
                </div>
                <div class="p-3" style="background:rgba(0,230,118,.06);border-radius:8px;border-left:3px solid var(--success);font-size:.88rem;color:var(--text-secondary);margin-bottom:8px;">
                    <strong style="color:var(--success);">2. Autorización:</strong> Juan puede ver sus cuentas y hacer transferencias, pero NO puede acceder a los datos de otros clientes.
                </div>
                <div class="p-3" style="background:rgba(255,215,64,.06);border-radius:8px;border-left:3px solid var(--warning);font-size:.88rem;color:var(--text-secondary);">
                    <strong style="color:var(--warning);">3. Trazabilidad:</strong> El sistema registra que Juan hizo una transferencia de $5.000 a las 15:32 del 04/10/2026.
                </div>
            </div>
        </div>
    </div>

    <!-- Navegación -->
    <div class="page-nav">
        <a href="/ciberseguridad/modulos/modulo2/dosfactores.php" class="btn-outline-cyber">
            <i class="bi bi-arrow-left"></i> Anterior
        </a>
        <a href="/ciberseguridad/modulos/modulo2/quiz.php" class="btn-quiz-nav">
            <i class="bi bi-pencil-square"></i> Ir al Cuestionario
        </a>
    </div>

</div>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
