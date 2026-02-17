{{-- Desktop Topbar --}}
<header id="custom-header-overlay"
    style="display:none; height:5rem; align-items:center; justify-content:space-between; padding:0 2rem; border-bottom:1px solid rgba(255,255,255,0.1); z-index:40; position:fixed; top:0; right:0; left:18rem; font-family:'Manrope',sans-serif; transition:all 0.3s; background:#102212;">

    {{-- Page title area --}}
    <div></div>

    {{-- Actions --}}
    <div style="display:flex; align-items:center; gap:1rem;">
        <button onclick="toggleTheme()"
            style="padding:0.5rem; border-radius:50%; border:none; cursor:pointer; background:transparent; color:rgba(255,255,255,0.6); transition:background 0.15s;"
            onmouseover="this.style.background='rgba(255,255,255,0.05)'" onmouseout="this.style.background='transparent'"
            title="Cambiar tema">
            <span class="material-icons-round" id="theme-icon-dark" style="display:none;">dark_mode</span>
            <span class="material-icons-round" id="theme-icon-light">light_mode</span>
        </button>
    </div>
</header>

<script>
    // Dark Mode Management
    function toggleTheme() {
        var html = document.documentElement;
        var iconDark = document.getElementById('theme-icon-dark');
        var iconLight = document.getElementById('theme-icon-light');
        if (html.classList.contains('dark')) {
            html.classList.remove('dark');
            localStorage.setItem('theme', 'light');
            if (iconDark) iconDark.style.display = 'block';
            if (iconLight) iconLight.style.display = 'none';
        } else {
            html.classList.add('dark');
            localStorage.setItem('theme', 'dark');
            if (iconDark) iconDark.style.display = 'none';
            if (iconLight) iconLight.style.display = 'block';
        }
    }

    // Force dark mode on page load
    (function() {
        var html = document.documentElement;
        var stored = localStorage.getItem('theme');
        // Default to dark if not explicitly set to light
        if (stored !== 'light') {
            html.classList.add('dark');
            localStorage.setItem('theme', 'dark');
        }

        // Show header on md+ screens
        var header = document.getElementById('custom-header-overlay');

        function updateHeader() {
            if (window.innerWidth >= 768) {
                header.style.display = 'flex';
            } else {
                header.style.display = 'none';
            }
        }
        updateHeader();
        window.addEventListener('resize', updateHeader);

        // Update theme icons
        var iconDark = document.getElementById('theme-icon-dark');
        var iconLight = document.getElementById('theme-icon-light');
        if (html.classList.contains('dark')) {
            if (iconDark) iconDark.style.display = 'none';
            if (iconLight) iconLight.style.display = 'block';
        } else {
            if (iconDark) iconDark.style.display = 'block';
            if (iconLight) iconLight.style.display = 'none';
        }
    })();
</script>
