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
        <li><a href="#">Comunidade</a></li>
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
                @foreach($trails as $trail)
                    <div class="col-11 col-sm-11 col-md-6 col-lg-4">
                        <div class="m-3">
                            <a href="/trail/{{ $trail->id }}">
                                <div class="trail-card-wrapper">
                                    <img src="assets/images/trilhas/trilha_{{ $trail->name }}.png">
                                    <div class="trail-content-wrapper">
                                        <h4>{{ $trail->name }}</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

{{-- conteúdo do footer --}}
@section('footer')
    @include('layouts/footer')
@endsection

