{{-- logout --}}
<form id="logout-form" action="{{ route('logout') }}" method="post" class="d-none">
    @csrf
</form>

@extends('layouts/layout') 
@extends('layouts/navbar')

{{-- titulo da página --}}
@section('titulo') Home - Orange Juice @endsection

{{-- conteúdo menu --}}
@section('navbar')
    {{-- max-width 767.98px --}}
    @section('mobile-menu-content')
        <li><a href="#">Eventos</a></li>
        <li><a href="#">Minhas Trilhas</a></li>
        <li><a href="#r">Comunidade</a></li>
        <li><a href="#">Minha Conta</a></li>
        <li><a href="{{ route('logout') }}" class="log-out">Sair</a></li>
    @endsection

    {{-- min-width 768px --}}
    @section('menu-content')
        <li><a href="#">Eventos</a></li>
        <li><a href="main-dashboard">Minhas Trilhas</a></li>
        <li><a href="#r">Comunidade</a></li>
        <li><a href="#">Minha Conta</a></li>
        <li><a href="{{ route('logout') }}" class="log-out">Sair</a></li>
    @endsection
@endsection

{{-- conteúdo principal --}}
@section('conteudo')
    <div class="individual-trail-wrapper">
        <div class="container">

        </div>
    </div>
@endsection

{{-- conteúdo do footer --}}
@section('footer')

@endsection
