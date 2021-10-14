<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>@yield('titulo')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset("css/style_basic.css")}}">
    </head>

    <body>
        @include('app.layouts._partials.nav')
        @yield('conteudo')
    </body>
</html>