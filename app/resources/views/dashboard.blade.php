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
        <li><a href="#">Minhas Trilhas</a></li>
        <li><a href="#r">Comunidade</a></li>
        <li><a href="#">Minha Conta</a></li>
        <li><a href="{{ route('logout') }}" class="log-out">Sair</a></li>
    @endsection
@endsection

{{-- conteúdo principal --}}
@section('conteudo')
    <div class="dashboard-wrapper">
        <div class="container">
            <div class="row no-gutters justify-content-center">
                <div class="col-11 col-sm-12">
                    <div class="my-2">
                       <div class="dashboard-title">
                            <h2>Bem vinda(o): {{ $user->name }}</h2>
                            <h3>Escolha sua Trilha de Conhecimento</h3>
                        </div>
                    </div>
                </div>
                <div class="col-11 col-sm-11 col-md-4">
                    <div class="m-3">
                        <a href="trail">
                            <div class="trail-card-wrapper">
                                <img src="assets/images/trilhas/trilha_ux-ui-design.png">
                                <div class="trail-content-wrapper">
                                    <h4>UX / UI Design</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-11 col-sm-11 col-md-4">
                    <div class="m-3">
                        <a href="trail">
                            <div class="trail-card-wrapper">
                                <img src="assets/images/trilhas/trilha_fullstack.png">
                                <div class="trail-content-wrapper">
                                    <h4>Desenvolvimento Full Stack</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-11 col-sm-11 col-md-4">
                    <div class="m-3">
                        <a href="trail">
                            <div class="trail-card-wrapper">
                                <img src="assets/images/trilhas/trilha_quality-assurance.png">
                                <div class="trail-content-wrapper">
                                    <h4>Quality Assurance</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
