<aside id="custom-sidebar-overlay"
    style="display:none; flex-direction:column; width:18rem; background:#1a3d24; border-right:1px solid rgba(255,255,255,0.1); height:100vh; color:#fff; position:fixed; inset:0; z-index:50; font-family:'Manrope',sans-serif; box-shadow:4px 0 15px rgba(0,0,0,0.3);">

    {{-- Logo Area --}}
    <div
        style="height:5rem; display:flex; align-items:center; padding:0 2rem; border-bottom:1px solid rgba(255,255,255,0.1);">
        <div style="display:flex; align-items:center; gap:0.75rem;">
            <div style="background:rgba(19,236,37,0.2); padding:0.5rem; border-radius:0.5rem;">
                <span class="material-icons-round" style="color:#13ec25; font-size:1.5rem;">pets</span>
            </div>
            <div>
                <h1 style="font-weight:700; font-size:1.125rem; letter-spacing:-0.025em; margin:0;">Vet<span
                        style="color:#13ec25;">Admin</span></h1>
                <p
                    style="font-size:0.7rem; color:rgba(255,255,255,0.5); text-transform:uppercase; letter-spacing:0.1em; font-weight:600; margin:0;">
                    Gestión</p>
            </div>
        </div>
    </div>

    {{-- Navigation --}}
    <nav style="flex:1; overflow-y:auto; padding:1.5rem 1rem; display:flex; flex-direction:column; gap:0.25rem;">
        <p
            style="padding:0 1rem; font-size:0.7rem; font-weight:700; color:rgba(255,255,255,0.4); text-transform:uppercase; letter-spacing:0.1em; margin-bottom:1rem;">
            Resumen</p>
        <a href="{{ filament()->getHomeUrl() }}"
            style="display:flex; align-items:center; gap:0.75rem; padding:0.75rem 1rem; background:rgba(19,236,37,0.2); color:#13ec25; border-radius:0.5rem; text-decoration:none; font-weight:500;">
            <span class="material-icons-round">dashboard</span>
            <span>Dashboard</span>
        </a>

        <p
            style="padding:0 1rem; font-size:0.7rem; font-weight:700; color:rgba(255,255,255,0.4); text-transform:uppercase; letter-spacing:0.1em; margin-top:2rem; margin-bottom:1rem;">
            Recursos</p>
        <a href="/admin/mascotas"
            style="display:flex; align-items:center; gap:0.75rem; padding:0.75rem 1rem; color:rgba(255,255,255,0.7); border-radius:0.5rem; text-decoration:none; font-weight:500; transition:background 0.15s;"
            onmouseover="this.style.background='rgba(255,255,255,0.05)';this.style.color='#fff'"
            onmouseout="this.style.background='transparent';this.style.color='rgba(255,255,255,0.7)'">
            <span class="material-icons-round">pets</span>
            <span>Pacientes (Mascotas)</span>
        </a>
        <a href="/admin/duenos"
            style="display:flex; align-items:center; gap:0.75rem; padding:0.75rem 1rem; color:rgba(255,255,255,0.7); border-radius:0.5rem; text-decoration:none; font-weight:500; transition:background 0.15s;"
            onmouseover="this.style.background='rgba(255,255,255,0.05)';this.style.color='#fff'"
            onmouseout="this.style.background='transparent';this.style.color='rgba(255,255,255,0.7)'">
            <span class="material-icons-round">people</span>
            <span>Dueños</span>
        </a>
        <a href="/admin/veterinarios"
            style="display:flex; align-items:center; gap:0.75rem; padding:0.75rem 1rem; color:rgba(255,255,255,0.7); border-radius:0.5rem; text-decoration:none; font-weight:500; transition:background 0.15s;"
            onmouseover="this.style.background='rgba(255,255,255,0.05)';this.style.color='#fff'"
            onmouseout="this.style.background='transparent';this.style.color='rgba(255,255,255,0.7)'">
            <span class="material-icons-round">medical_services</span>
            <span>Veterinarios</span>
        </a>

        <p
            style="padding:0 1rem; font-size:0.7rem; font-weight:700; color:rgba(255,255,255,0.4); text-transform:uppercase; letter-spacing:0.1em; margin-top:2rem; margin-bottom:1rem;">
            Sistema</p>
        <a href="https://www.notion.so/Sistema-de-Gesti-n-de-Mascotas-FilamentPHP-303e2f960ea180e3896fd9fa56f648cc?source=copy_link"
            target="_blank"
            style="display:flex; align-items:center; gap:0.75rem; padding:0.75rem 1rem; color:rgba(255,255,255,0.7); border-radius:0.5rem; text-decoration:none; font-weight:500; transition:background 0.15s;"
            onmouseover="this.style.background='rgba(255,255,255,0.05)';this.style.color='#fff'"
            onmouseout="this.style.background='transparent';this.style.color='rgba(255,255,255,0.7)'">
            <span class="material-icons-round">menu_book</span>
            <span>Documentación</span>
        </a>
        <a href="https://github.com" target="_blank"
            style="display:flex; align-items:center; gap:0.75rem; padding:0.75rem 1rem; color:rgba(255,255,255,0.7); border-radius:0.5rem; text-decoration:none; font-weight:500; transition:background 0.15s;"
            onmouseover="this.style.background='rgba(255,255,255,0.05)';this.style.color='#fff'"
            onmouseout="this.style.background='transparent';this.style.color='rgba(255,255,255,0.7)'">
            <span class="material-icons-round">code</span>
            <span>Github</span>
        </a>
    </nav>

    {{-- User Profile --}}
    <div style="padding:1rem; border-top:1px solid rgba(255,255,255,0.1);">
        <div
            style="display:flex; align-items:center; gap:0.75rem; padding:0.5rem; border-radius:0.5rem; background:rgba(255,255,255,0.05);">
            <div
                style="width:2.5rem; height:2.5rem; border-radius:50%; background:rgba(19,236,37,0.2); display:flex; align-items:center; justify-content:center; color:#13ec25; font-weight:700;">
                {{ substr(auth()->user()->name ?? 'A', 0, 1) }}
            </div>
            <div style="flex:1; min-width:0;">
                <p
                    style="font-size:0.875rem; font-weight:500; color:#fff; margin:0; overflow:hidden; text-overflow:ellipsis; white-space:nowrap;">
                    {{ auth()->user()->name ?? 'Admin' }}</p>
                <p
                    style="font-size:0.75rem; color:rgba(255,255,255,0.5); margin:0; overflow:hidden; text-overflow:ellipsis; white-space:nowrap;">
                    {{ auth()->user()->email ?? '' }}</p>
            </div>
            <form action="{{ filament()->getLogoutUrl() }}" method="post" style="display:contents;">
                @csrf
                <button type="submit"
                    style="color:rgba(255,255,255,0.4); background:none; border:none; cursor:pointer; padding:0;"
                    title="Cerrar Sesión">
                    <span class="material-icons-round">logout</span>
                </button>
            </form>
        </div>
    </div>
</aside>

<script>
    // Show sidebar only on md+ screens
    (function() {
        var sidebar = document.getElementById('custom-sidebar-overlay');

        function updateSidebar() {
            if (window.innerWidth >= 768) {
                sidebar.style.display = 'flex';
            } else {
                sidebar.style.display = 'none';
            }
        }
        updateSidebar();
        window.addEventListener('resize', updateSidebar);
    })();
</script>
