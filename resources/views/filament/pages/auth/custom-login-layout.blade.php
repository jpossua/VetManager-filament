<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>{{ $title ?? 'Veterinary Login' }}</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#13ec25",
                        "primary-dark": "#0db81b",
                        "background-light": "#f6f8f6",
                        "background-dark": "#102212",
                        "forest-dark": "#1a4d2e",
                        "forest-light": "#e8f5e9",
                        "sage": "#8da399",
                        "earth-brown": "#8B5E3C",
                        "earth-light": "#D2B48C",
                    },
                    fontFamily: {
                        "display": ["sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        .text-gradient {
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
    @livewireStyles
</head>

<body
    class="bg-background-light dark:bg-background-dark font-display text-gray-800 dark:text-gray-200 h-screen overflow-hidden flex items-center justify-center">
    {{ $slot }}

    @livewireScripts
</body>

</html>
