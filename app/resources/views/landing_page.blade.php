{{-- referencia ao layouts --}}
@extends('layouts/layout') 
@extends('layouts/navbar')

{{-- titulo da página --}}
@section('titulo') Home - Orange Juice @endsection

{{-- conteúdo menu --}}
@section('navbar')
    {{-- max-width 767.98px --}}
    @section('mobile-menu-content')
    <div class="d-flex align-items-center justify-content-between">
        <li><a href="login" class="btn btn-outline-primary">Login</a></li>
        <li><a href="register" class="btn btn-primary">cadastre-se</a></li>
    </div>
    @endsection

    {{-- min-width 768px --}}
    @section('menu-content')
        <li><a href="login" class="btn btn-outline-primary">Login</a></li>
        <li><a href="register" class="btn btn-primary">cadastre-se</a></li>
    @endsection
@endsection

{{-- conteúdo principal --}}
@section('conteudo')
    <div class="py-5 d-flex align-items-center" style="background-color:#dddddd; height:500px;">
        <div class="container">
            <div class="row no-gutters justify-content-center">
                <h1 class="mb-0">Sessão 1 </h1>
            </div>
        </div>
    </div>
    <div class="py-5 d-flex align-items-center" style="background-color:#fff; height:500px;">
        <div class="container">
            <div class="row no-gutters justify-content-center">
                <h1 class="mb-0">Sessão 2 </h1>
            </div>
        </div>
    </div>
    <div class="py-5 d-flex align-items-center" style="background-color:#dddddd; height:500px;">
        <div class="container">
            <div class="row no-gutters justify-content-center">
                <h1 class="mb-0">Sessão 3 </h1>
            </div>
        </div>
    </div>
    <div class="py-5 d-flex align-items-center" style="background-color:#fff; height:500px;">
        <div class="container">
            <div class="row no-gutters justify-content-center">
                <h1 class="mb-0">Sessão 4 </h1>
            </div>
        </div>
    </div>
@endsection

{{-- conteúdo do footer --}}
@section('footer')
    @include('layouts/footer')
@endsection
