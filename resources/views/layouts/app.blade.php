<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const themeToggle = document.getElementById('theme-toggle');
            const currentTheme = localStorage.getItem('theme');

            // Set theme on page load based on localStorage
            if (currentTheme === 'dark') {
                document.documentElement.classList.add('dark');
                themeToggle.innerHTML = "Light Mode"

            } else {
                document.documentElement.classList.remove('dark');
                themeToggle.innerHTML = "Dark Mode"

            }

            themeToggle.addEventListener('click', function() {
                // Toggle theme and update localStorage
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('theme', 'light');
                    themeToggle.innerHTML = "Dark Mode"
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('theme', 'dark');
                    themeToggle.innerHTML = "Light Mode"

                }
            });
        });
    </script>

</body>

</html>
