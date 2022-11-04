<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    @include('layouts/header')
    @include('layouts/modal')
    @yield('conteudo')

</html>