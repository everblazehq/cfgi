<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CFGI</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=exo:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700&display=swap" rel="stylesheet">

        @vite('resources/css/app.css')
    </head>
    <body>
        <main>
            <div>
                <div class="container mx-auto p-4 sm:px-0 2xl:px-24">
                    @include('layout.header')

                    @yield('body')
                </div>
            </div>
        </main>

        @stack('scripts')
        @vite('resources/css/app.js')
    </body>
    <style>
        body {
            position: relative; /* Ensure the body is positioned to contain the pseudo-element */
            background-color: #000; /* Dark background for contrast */
        }

        body::before {
            content: '';
            position: absolute;
            width: 700px; /* Adjust size for focus */
            height: 700px; /* Adjust size for focus */
            left: 50%;
            top: -400px; /* Adjust position for focus */
            transform: translateX(-50%);
            background: radial-gradient(
            circle,
            rgba(255, 255, 255, 0.6) 0%, /* Brighter center */
            rgba(255, 255, 255, 0.1) 70%
            );
            filter: blur(150px); /* Adjust blur for focus */
            box-shadow: 0 0 100px rgba(255, 255, 255, 0.5);
            z-index: -1;
            pointer-events: none;
        }
    </style>
</html>
