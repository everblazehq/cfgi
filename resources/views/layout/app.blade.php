<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>CFGI</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=exo:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700&display=swap" rel="stylesheet">

        @livewireStyles
        @vite('resources/css/app.css')
    </head>
    <body>
        @stack('top-image')

        <main id="main">
            <div>
                <div class="container mx-auto p-4 sm:px-0 2xl:px-24">
                    @include('layout.header')

                    @yield('body')
                </div>
            </div>
        </main>

        @livewireScripts
        @stack('scripts')
        @vite('resources/js/app.js')
    </body>
    <style>
        body {
            position: relative;
            background-color: #111111;
        }

        body::before {
            content: '';
            position: absolute;
            width: 100%;
            max-width: 700px;
            height: 700px;
            left: 50%;
            top: -400px;
            transform: translateX(-50%);
            background: radial-gradient(
                circle,
                rgba(255, 255, 255, 0.6) 0%,
                rgba(255, 255, 255, 0.1) 70%
            );
            filter: blur(150px);
            box-shadow: 0 0 100px rgba(255, 255, 255, 0.5);
            z-index: -1;
            pointer-events: none;
        }
    </style>
</html>
