<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
        <link rel="manifest" href="assets/images/favicon/site.webmanifest">
        <link rel="mask-icon" href="assets/images/favicon/afari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

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