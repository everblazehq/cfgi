<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CFGI</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=exo:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

        @vite('resources/css/app.css')
    </head>
    <body>
        <main>
            <div class="bg-slate-950">
                <div class="container mx-auto p-4 sm:px-0 2xl:px-24">
                    @include('layout.header')

                    @yield('body')
                </div>
            </div>
        </main>

        @stack('scripts')
        @vite('resources/css/app.js')
    </body>
</html>
