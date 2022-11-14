{{-- referencia ao layouts --}}
@extends('layouts/layout') 
@extends('layouts/navbar')

{{-- titulo da página --}}
@section('titulo') Minha Conta - Orange Juice @endsection

{{-- conteúdo menu --}}
@section('navbar')
    {{-- max-width 767.98px --}}
    @section('mobile-menu-content')
    <div class="mobile-navigation">
        <li><a href="https://discord.com/invite/NtESsDFGx5" target="_blank">Comunidade</a></li>
        <li><a href="eventos">Eventos</a></li>
        <li><a href="user">Minha Conta</a></li>
    </div>
    <div class="d-flex align-items-center justify-content-between">
        <li><a href="user">Minha Conta</a></li>
        <li><a href="login" class="btn btn-outline-primary">Login</a></li>
    </div>
    @endsection

    {{-- min-width 768px --}}
    @section('menu-content')
        <li><a href="https://discord.com/invite/NtESsDFGx5" target="_blank">Comunidade</a></li>
        <li><a href="eventos">Eventos</a></li>
        <li><a href="https://digital.fcamara.com.br/orangejuice" target="_blank">Sobre a Orange Juice</a></li>
        <li><a href="user">Minha Conta</a></li>
        <li><a href="login" class="btn btn-outline-primary">Login</a></li>
    @endsection
@endsection

{{-- conteúdo principal --}}
@section('conteudo')
    <div class="events-wrapper">
        <div class="container">
            <div class="row no-gutters align-items-center">

            </div>   
        </div>
    </div>
@endsection

 
{{-- conteúdo do footer --}}
@section('footer')
    @include('layouts/footer')
@endsection