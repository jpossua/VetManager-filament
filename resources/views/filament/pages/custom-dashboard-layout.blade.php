<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="filament-js dark">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{ $title ?? config('app.name') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet" />

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <!-- Theme Config -->
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#13ec25",
                        "primary-dark": "#0ea319",
                        "background-light": "#f6f8f6",
                        "background-dark": "#102212",
                        "forest": "#1a3d24",
                        "forest-light": "#2a5a36",
                        "gray": {
                            50: '#f9fafb',
                            100: '#f3f4f6',
                            200: '#e5e7eb',
                            300: '#d1d5db',
                            400: '#9ca3af',
                            500: '#6b7280',
                            600: '#4b5563',
                            700: '#374151',
                            800: '#1f2937',
                            900: '#111827',
                        }
                    },
                    fontFamily: {
                        "display": ["Manrope", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "2xl": "1rem",
                        "full": "9999px"
                    },
                    boxShadow: {
                        'soft': '0 2px 10px rgba(0, 0, 0, 0.03)',
                        'glow': '0 0 15px rgba(19, 236, 37, 0.3)'
                    }
                },
            },
        }
    </script>
    <style>
        /* Filament-like table styles override */
        .filament-table-row {
            transition: background-color 0.15s ease-in-out;
        }

        .filament-table-row:hover {
            background-color: rgba(19, 236, 37, 0.03);
        }

        /* Custom scrollbar for sidebar */
        .sidebar-scroll::-webkit-scrollbar {
            width: 5px;
        }

        .sidebar-scroll::-webkit-scrollbar-track {
            background: transparent;
        }

        .sidebar-scroll::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
        }

        [x-cloak] {
            display: none !important;
        }
    </style>

    <!-- Filament Styles -->
    @filamentStyles
    @livewireStyles
</head>

<body
    class="bg-background-light dark:bg-background-dark font-display text-gray-800 dark:text-gray-100 antialiased h-screen flex overflow-hidden selection:bg-primary selection:text-black">
    <!-- Sidebar -->
    <aside
        class="hidden md:flex flex-col w-72 bg-forest dark:bg-background-dark border-r border-gray-200 dark:border-gray-800 h-full text-white transition-all duration-300 shadow-xl z-20">
        <!-- Logo Area -->
        <div class="h-20 flex items-center px-8 border-b border-white/10">
            <div class="flex items-center gap-3">
                <div class="bg-primary/20 p-2 rounded-lg">
                    <span class="material-icons-round text-primary text-2xl">pets</span>
                </div>
                <div>
                    <h1 class="font-bold text-lg tracking-tight">Vet<span class="text-primary">Admin</span></h1>
                    <p class="text-xs text-white/50 uppercase tracking-wider font-semibold">Gestión</p>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <nav class="flex-1 overflow-y-auto sidebar-scroll py-6 px-4 space-y-1">
            <p class="px-4 text-xs font-bold text-white/40 uppercase tracking-widest mb-4">Resumen</p>
            <a class="flex items-center gap-3 px-4 py-3 bg-primary/20 text-primary rounded-lg transition-colors group relative overflow-hidden"
                href="{{ filament()->getHomeUrl() }}">
                <div class="absolute inset-0 bg-primary/10 w-0 group-hover:w-full transition-all duration-300"></div>
                <span class="material-icons-round relative z-10">dashboard</span>
                <span class="font-medium relative z-10">Dashboard</span>
            </a>

            <p class="px-4 text-xs font-bold text-white/40 uppercase tracking-widest mt-8 mb-4">Recursos</p>
            <a class="flex items-center gap-3 px-4 py-3 text-white/70 hover:text-white hover:bg-white/5 rounded-lg transition-colors group"
                href="/admin/mascotas">
                <span class="material-icons-round group-hover:text-primary transition-colors">pets</span>
                <span class="font-medium">Pacientes (Mascotas)</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-white/70 hover:text-white hover:bg-white/5 rounded-lg transition-colors group"
                href="/admin/duenos">
                <span class="material-icons-round group-hover:text-primary transition-colors">people</span>
                <span class="font-medium">Dueños</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-white/70 hover:text-white hover:bg-white/5 rounded-lg transition-colors group"
                href="/admin/veterinarios">
                <span class="material-icons-round group-hover:text-primary transition-colors">medical_services</span>
                <span class="font-medium">Veterinarios</span>
            </a>

            <p class="px-4 text-xs font-bold text-white/40 uppercase tracking-widest mt-8 mb-4">Sistema</p>
            <a class="flex items-center gap-3 px-4 py-3 text-white/70 hover:text-white hover:bg-white/5 rounded-lg transition-colors group"
                href="https://filamentphp.com/docs" target="_blank">
                <span class="material-icons-round group-hover:text-primary transition-colors">menu_book</span>
                <span class="font-medium">Documentación</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-white/70 hover:text-white hover:bg-white/5 rounded-lg transition-colors group"
                href="https://github.com" target="_blank">
                <span class="material-icons-round group-hover:text-primary transition-colors">code</span>
                <span class="font-medium">Github</span>
            </a>
        </nav>

        <!-- User Profile -->
        <div class="p-4 border-t border-white/10">
            <div
                class="flex items-center gap-3 p-2 rounded-lg bg-white/5 hover:bg-white/10 transition-colors cursor-pointer">
                <div
                    class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center text-primary font-bold">
                    {{ substr(auth()->user()->name ?? 'A', 0, 1) }}
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-sm font-medium text-white truncate">{{ auth()->user()->name ?? 'Admin' }}</p>
                    <p class="text-xs text-white/50 truncate">{{ auth()->user()->email ?? '' }}</p>
                </div>
                <form action="{{ filament()->getLogoutUrl() }}" method="post" class="contents">
                    @csrf
                    <button type="submit" class="text-white/40 hover:text-white transition-colors"
                        title="Cerrar Sesión">
                        <span class="material-icons-round">logout</span>
                    </button>
                </form>
            </div>
        </div>
    </aside>

    <!-- Main Content Wrapper -->
    <div class="flex-1 flex flex-col min-w-0 overflow-hidden relative">
        <!-- Mobile Header -->
        <header class="md:hidden bg-forest text-white h-16 flex items-center justify-between px-4 shadow-md z-30">
            <div class="flex items-center gap-2">
                <button class="p-2 -ml-2 rounded-lg active:bg-white/10">
                    <span class="material-icons-round">menu</span>
                </button>
                <span class="font-bold text-lg">VetAdmin</span>
            </div>
        </header>

        <!-- Desktop Topbar -->
        <header
            class="hidden md:flex h-20 items-center justify-between px-8 bg-background-light dark:bg-background-dark border-b border-gray-200 dark:border-gray-800 z-10">
            <!-- Search Removed (Empty Container for Spacing) -->
            <div class="relative w-96 group">
            </div>

            <!-- Actions -->
            <div class="flex items-center gap-4">
                <!-- Theme Toggle Script to Force Dark Mode Default -->
                <script>
                    function toggleTheme() {
                        if (document.documentElement.classList.contains('dark')) {
                            document.documentElement.classList.remove('dark');
                            localStorage.theme = 'light';
                        } else {
                            document.documentElement.classList.add('dark');
                            localStorage.theme = 'dark';
                        }
                    }
                    // Force Dark Mode Default
                    if (localStorage.theme === 'light') {
                        document.documentElement.classList.remove('dark');
                    } else {
                        // Default to dark
                        document.documentElement.classList.add('dark');
                        localStorage.theme = 'dark';
                    }
                </script>

                <button onclick="toggleTheme()"
                    class="relative p-2 text-gray-500 hover:bg-gray-100 dark:hover:bg-white/5 rounded-full transition-colors">
                    <span class="material-icons-round dark:hidden">dark_mode</span>
                    <span class="material-icons-round hidden dark:block">light_mode</span>
                </button>
            </div>
        </header>

        <!-- Main Scrollable Area -->
        <main class="flex-1 overflow-y-auto p-4 md:p-8 scroll-smooth">
            {{ $slot }}
            <!-- Footer area -->
            <div class="pb-6 text-center text-xs text-gray-400 mt-8">
                © {{ date('Y') }} Sistema de Gestión Veterinaria. Todos los derechos reservados.
            </div>
        </main>
    </div>

    @filamentScripts
    @livewireScripts
</body>

</html>
