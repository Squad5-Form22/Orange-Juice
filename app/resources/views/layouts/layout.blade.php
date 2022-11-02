<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    {{--links e navbar da aplicação --}}
    @include('layouts/header')

    @yield('conteudo')

    {{-- scripts e footer da aplicação --}}
    @include('layouts/footer')

</html>
