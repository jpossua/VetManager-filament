<div style="max-width:80rem; margin:0 auto; padding:1rem;">
    {{-- Welcome Card --}}
    <div
        style="border-radius:1rem; padding:2rem; border:1px solid rgba(255,255,255,0.1); box-shadow:0 4px 15px rgba(0,0,0,0.2); display:flex; flex-wrap:wrap; align-items:center; gap:2rem; background:#1a2e20;">

        {{-- Illustration --}}
        <div style="flex-shrink:0; position:relative;">
            <div
                style="width:8rem; height:8rem; background:rgba(19,236,37,0.15); border-radius:50%; display:flex; align-items:center; justify-content:center;">
                <span class="material-icons-round" style="font-size:3.5rem; color:#13ec25;">pets</span>
            </div>
            <div
                style="position:absolute; bottom:-0.5rem; right:-0.5rem; background:#1a2e20; padding:0.5rem; border-radius:50%; box-shadow:0 2px 8px rgba(0,0,0,0.3); border:1px solid rgba(255,255,255,0.1);">
                <span class="material-icons-round" style="font-size:1.25rem; color:#f59e0b;">verified</span>
            </div>
        </div>

        {{-- Content --}}
        <div style="flex:1; min-width:0;">
            <h2
                style="font-size:2rem; font-weight:700; color:#fff; margin:0 0 0.5rem 0; font-family:'Manrope',sans-serif;">
                ¡Bienvenido a <span style="color:#13ec25;">VetAdmin</span>!
            </h2>
            <p
                style="color:rgba(255,255,255,0.6); font-size:1.05rem; margin:0 0 1.5rem 0; max-width:40rem; line-height:1.6;">
                Sistema integral de gestión veterinaria. Gestiona pacientes, dueños y citas de manera eficiente desde
                este panel.
            </p>

            <div style="display:flex; flex-wrap:wrap; gap:1rem;">
                <a href="/admin/mascotas"
                    style="display:inline-flex; align-items:center; gap:0.5rem; padding:0.75rem 1.5rem; background:#13ec25; color:#000; font-weight:700; border-radius:0.75rem; text-decoration:none; font-family:'Manrope',sans-serif; transition:all 0.2s; box-shadow:0 4px 12px rgba(19,236,37,0.3);"
                    onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='0 6px 20px rgba(19,236,37,0.4)'"
                    onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 4px 12px rgba(19,236,37,0.3)'">
                    <span class="material-icons-round">pets</span>
                    Ver Pacientes
                </a>
                <a href="/admin/mascotas/create"
                    style="display:inline-flex; align-items:center; gap:0.5rem; padding:0.75rem 1.5rem; background:rgba(255,255,255,0.08); color:rgba(255,255,255,0.9); font-weight:700; border-radius:0.75rem; text-decoration:none; font-family:'Manrope',sans-serif; transition:all 0.2s;"
                    onmouseover="this.style.background='rgba(255,255,255,0.12)'"
                    onmouseout="this.style.background='rgba(255,255,255,0.08)'">
                    <span class="material-icons-round">add_circle</span>
                    Registrar Mascota
                </a>
            </div>
        </div>
    </div>

    {{-- Info Cards --}}
    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(250px, 1fr)); gap:1.5rem; margin-top:2rem;">
        <div
            style="padding:1.5rem; background:linear-gradient(135deg, rgba(59,130,246,0.15), rgba(59,130,246,0.05)); border:1px solid rgba(59,130,246,0.2); border-radius:0.75rem;">
            <div style="display:flex; align-items:center; gap:0.75rem; margin-bottom:0.5rem;">
                <span class="material-icons-round" style="color:#3b82f6;">update</span>
                <h3 style="font-weight:700; color:#3b82f6; margin:0; font-family:'Manrope',sans-serif;">Sistema
                    Actualizado</h3>
            </div>
            <p style="font-size:0.875rem; color:rgba(255,255,255,0.6); margin:0; line-height:1.5;">Tu sistema está
                corriendo con la última versión de Filament y Laravel.</p>
        </div>
        <div
            style="padding:1.5rem; background:linear-gradient(135deg, rgba(168,85,247,0.15), rgba(168,85,247,0.05)); border:1px solid rgba(168,85,247,0.2); border-radius:0.75rem;">
            <div style="display:flex; align-items:center; gap:0.75rem; margin-bottom:0.5rem;">
                <span class="material-icons-round" style="color:#a855f7;">dark_mode</span>
                <h3 style="font-weight:700; color:#a855f7; margin:0; font-family:'Manrope',sans-serif;">Modo Oscuro</h3>
            </div>
            <p style="font-size:0.875rem; color:rgba(255,255,255,0.6); margin:0; line-height:1.5;">Activado por defecto
                para reducir la fatiga visual durante el trabajo.</p>
        </div>
        <div
            style="padding:1.5rem; background:linear-gradient(135deg, rgba(34,197,94,0.15), rgba(34,197,94,0.05)); border:1px solid rgba(34,197,94,0.2); border-radius:0.75rem;">
            <div style="display:flex; align-items:center; gap:0.75rem; margin-bottom:0.5rem;">
                <span class="material-icons-round" style="color:#22c55e;">security</span>
                <h3 style="font-weight:700; color:#22c55e; margin:0; font-family:'Manrope',sans-serif;">Seguro</h3>
            </div>
            <p style="font-size:0.875rem; color:rgba(255,255,255,0.6); margin:0; line-height:1.5;">Tus datos están
                protegidos y respaldados automáticamente.</p>
        </div>
    </div>
</div>
