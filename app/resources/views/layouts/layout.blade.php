<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('titulo')</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        
        <!-- Styles -->
        <link href="/assets/css/main.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        
        @yield('navbar')
        
        @yield('conteudo')  

        @yield('footer')

        <!-- Scripts -->
        <script src="/assets/js/jquery-3.6.1.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
        <script src="/assets/js/jquery.mask.min.js"></script>
        <script src="/assets/js/main.js"></script>
    </body>
</html>