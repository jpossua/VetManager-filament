<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>{{ $title ?? 'Veterinary Registration Screen' }}</title>
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
                        "primary-hover": "#0fd120",
                        "background-light": "#f6f8f6",
                        "background-dark": "#102212",
                        "forest-dark": "#0a2f1c",
                        "forest-medium": "#1a4a2e",
                        "wood-light": "#d4c5b0",
                        "wood-dark": "#5c4d3c",
                    },
                    fontFamily: {
                        "display": ["sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "2xl": "1rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>

    @livewireStyles
</head>

<body
    class="bg-background-light dark:bg-background-dark font-display antialiased text-gray-800 dark:text-gray-100 min-h-screen flex items-center justify-center p-4 lg:p-0">
    {{ $slot }}

    @livewireScripts
</body>

</html>
