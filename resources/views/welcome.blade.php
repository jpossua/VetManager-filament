<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VetManager</title>
    <!-- Tailwind CSS desde CDN para la landing page -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-color: #f3f4f6;
        }
    </style>
</head>

<body class="antialiased">
    <div class="relative min-h-screen flex flex-col items-center justify-center">
        <div class="w-full max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex flex-col items-center justify-center text-center">
                <!-- Icono / Logo -->
                <div class="p-6 rounded-full bg-green-100 mb-8 shadow-sm">
                    <div style="font-size: 60px;">🐾</div>
                </div>

                <!-- Títulos -->
                <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl mb-4">
                    VetManager <span class="text-green-600">System</span>
                </h1>

                <p class="mt-4 text-xl text-gray-500 max-w-2xl mx-auto">
                    Gestión integral para clínicas veterinarias. Control de pacientes, dueños y citas de forma eficiente
                    y ecológica.
                </p>

                <!-- Botones de Acción -->
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="{{ filament()->getLoginUrl() }}"
                        class="rounded-md bg-green-600 px-6 py-3 text-lg font-semibold text-white shadow-sm hover:bg-green-500 transition-colors">
                        Iniciar Sesión
                    </a>

                    <a href="{{ filament()->getRegistrationUrl() }}"
                        class="text-lg font-semibold leading-6 text-gray-900 hover:text-green-600 transition-colors">
                        Registrarse <span aria-hidden="true">→</span>
                    </a>
                </div>

                <div class="mt-16 text-sm text-gray-400">
                    &copy; {{ date('Y') }} VetManager System. All rights reserved.
                </div>
            </div>
        </div>
    </div>
</body>

</html>
