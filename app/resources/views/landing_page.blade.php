{{-- referencia ao layouts --}}
@extends('layouts/layout') 
@extends('layouts/navbar')

{{-- titulo da página --}}
@section('titulo') Home - Orange Juice @endsection

{{-- conteúdo menu --}}
@section('navbar')
    {{-- max-width 767.98px --}}
    @section('mobile-menu-content')
    <div class="mobile-navigation">
        <li><a href="">Trilhas de Conhecimento</a></li>
        <li><a href="">Comunidade</a></li>
        <li><a href="">Eventos</a></li>
        <li><a href="">Sobre a Orange Juice</a></li>
    </div>
    <div class="d-flex align-items-center justify-content-between">
        <li><a href="login" class="btn btn-outline-primary">Login</a></li>
        <li><a href="register" class="btn btn-primary">cadastre-se</a></li>
    </div>
    @endsection

    {{-- min-width 768px --}}
    @section('menu-content')
        <li><a href="">Trilhas de Conhecimento</a></li>
        <li><a href="">Comunidade</a></li>
        <li><a href="">Eventos</a></li>
        <li><a href="">Sobre a Orange Juice</a></li>
        <li><a href="login" class="btn btn-outline-primary">Login</a></li>
        <li><a href="register" class="btn btn-primary">cadastre-se</a></li>
    @endsection
@endsection

{{-- conteúdo principal --}}
@section('conteudo')
    <div class="banner-wrapper">
        <div class="container">
            <div class="row no-gutters justify-content-end align-items-center">
                <div class="banner-content-wrapper">
                    <div class="banner-content">
                        <h1>A Comunidade tech mais vitaminada!</h1>
                        <div class="text-banner-content">
                            <p>A Orange Juice é um espaço para tech lovers se conectarem, aprenderem e explorarem possibilidades de carreira.</p>
                        </div>
                        <a href="register" class="btn btn-primary w-100">Faça parte!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="landing-content">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="my-3">
                        <div class="section-trail">
                            <div class="row no-gutters section-content-wrapper">                        
                                <div class="col-lg-5">
                                    <div class="btn-wrapper">
                                        <a href="" class="btn btn-secondary w-75">Iniciar Trilha</a>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="content-wrapper">
                                        <div class="content">
                                            <h2>Inicie uma Nova Carreira</h2>
                                            <p>Quer ingressar na área tech e não sabe por onde começar?</p>
                                            <p>Aprenda com <strong>conteúdos gratuitos</strong> de qualidade!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="my-3">
                        <div class="section-discord">
                            <div class="row no-gutters section-content-wrapper">                        
                                <div class="col-12 col-lg-7">
                                    <div class="content-wrapper">
                                        <div class="content">
                                            <h2>Junte-se à Comunidade Orange</h2>
                                            <p><strong>Amplie seu networking.</strong></p>
                                            <p>Faça amigos e interaja com profissionais da área tech.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-5">
                                    <div class="btn-wrapper">
                                        <a href="" class="btn btn-secondary w-75">Acesse o Discord</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="my-3">
                        <div class="section-portfolio">
                            <div class="row no-gutters section-content-wrapper"> 
                                <div class="col-lg-5">
                                    <div class="btn-wrapper">
                                        <a href="" class="btn btn-secondary w-75">Iniciar Trilha</a>
                                    </div>
                                </div>                       
                                <div class="col-lg-7">
                                    <div class="content-wrapper">
                                        <div class="content">
                                            <h2>Turbine o seu portfólio</h2>
                                            <p>Coloque a mão na massa!</p>
                                            <p><strong>Encare nossos desafios</strong> e concorra a prêmios!</p>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- conteúdo do footer --}}
@section('footer')
    @include('layouts/footer')
@endsection

