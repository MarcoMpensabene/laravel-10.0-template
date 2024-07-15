<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title')</title>

    @yield('head-cdn') {{-- Aggiungi CDN a qualsiasi pagina estesa con @section()--}}
    @vite('resources/js/app.js')
</head>
<body>
    {{--! Importo l'Header  --}}
    @include('partials.header')


    @yield('main-content') {{-- Estendere questo layout per riempire main-content --}}

    {{--? Importo il Footer  --}}
    @include('partials.footer')

    @yield('custom-scripts') {{-- Aggiunta di script a qualsiasi pagina estesa tramite @section() --}}
</body>
</html>
