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
    <div class="trail-head-wrapper">
        <div class="container">
            <div class="row no-gutters align-items-center">
                <div class="col-lg-4">
                    <img src="assets/images/trilhas/trilha_fullstack.png" class="img-fluid">
                </div>
                <div class="col-lg-8">
                    <div class="m-3">
                        <div class="trail-head-content">
                            <p>Trilha do Conhecimento</p>
                            <h1>Desenvolvimento Full Stack</h1>
                            <h5>Por <a href="">Rodrigo Carvalho</a> e <a href="">Allan Qualtieri</a></h5>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
    </div>
    <div class="individual-trail-wrapper">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="intro-text">
                        <h3>Se você chegou até aqui, é porque quer aprender mais sobre tecnologia, especialmente sobre <strong>Desenvolvimento Full Stack</strong>!</h3>
                        <p>Essa trilha foi montada pensando em quem está começando na área, ou passando por uma migração de carreira e ainda não sabe exatamente o que é esse mundo. Então, aperta o cinto e vem com a gente nessa jornada!</p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="accordion mb-3" id="cardInicio">
                        <div class="card">
                            <div class="card-header" id="headingInicio">
                                <div class="mb-0 d-flex align-items-center justify-content-between">
                                    <h4 class="d-inline mb-0"><strong>Início</strong></h4>
                                    <button class="btn" type="button" data-toggle="collapse" data-target="#Inicio" aria-expanded="true" aria-controls="collapseOne">
                                        <i class="fas fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                            <div id="Inicio" class="collapse" aria-labelledby="headingInicio" data-parent="#cardInicio">
                                <div class="card-body">
                                    <div class="card-item">
                                        <h5>Guia definitivo de como migrar para UX Design: 5 passos para virar um UX</h5>
                                        <div class="d-flex">                                             
                                            <span class="bdg-artigo"><i class="las la-book-open"></i>Artigo</span> <p class="ml-2">Tema: Migração de Carreira  |  Fonte: Orange Juice  |  Duração: 6 min</p>
                                        </div>
                                    </div>    
                                    <div class="card-item">
                                        <h5>Guia definitivo de como migrar para UX Design: 5 passos para virar um UX</h5>
                                        <div class="d-flex">                                             
                                            <span class="bdg-video"><i class="lab la-youtube"></i>Vídeo</span> <p class="ml-2">Tema: Migração de Carreira  |  Fonte: Orange Juice  |  Duração: 6 min</p>
                                        </div>
                                    </div>                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion mb-3" id="cardConceitosBasicos">
                        <div class="card">
                            <div class="card-header" id="headingConceitosBasicos">
                                <div class="mb-0 d-flex align-items-center justify-content-between">
                                    <h4 class="d-inline mb-0"><strong>Conceitos Básicos</strong></h4>
                                    <button class="btn" type="button" data-toggle="collapse" data-target="#ConceitosBasicos" aria-expanded="true" aria-controls="collapseOne">
                                        <i class="fas fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                            <div id="ConceitosBasicos" class="collapse" aria-labelledby="headingConceitosBasicos" data-parent="#cardConceitosBasicos">
                                <div class="card-body">
                                    <div class="card-item">
                                        <h5>Guia definitivo de como migrar para UX Design: 5 passos para virar um UX</h5>
                                        <div class="d-flex">                                             
                                            <span data-color="#8B18D1"><i class="las la-book-open"></i>Artigo</span> <p class="ml-2">Tema: Migração de Carreira  |  Fonte: Orange Juice  |  Duração: 6 min</p>
                                        </div>
                                    </div>    
                                    <div class="card-item">
                                        <h5>Guia definitivo de como migrar para UX Design: 5 passos para virar um UX</h5>
                                        <div class="d-flex">                                             
                                            <span class="bdg-video"><i class="lab la-youtube"></i>Vídeo</span> <p class="ml-2">Tema: Migração de Carreira  |  Fonte: Orange Juice  |  Duração: 6 min</p>
                                        </div>
                                    </div>                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion mb-3" id="CardOpcioanl">
                        <div class="card">
                            <div class="card-header" id="headingOpcional">
                                <div class="mb-0 d-flex align-items-center justify-content-between">
                                    <h4 class="d-inline mb-0"><strong>Opcional</strong></h4>
                                    <button class="btn" type="button" data-toggle="collapse" data-target="#Opcional" aria-expanded="true" aria-controls="collapseOne">
                                        <i class="fas fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                            <div id="Opcional" class="collapse" aria-labelledby="headingOpcional" data-parent="#CardOpcioanl">
                                <div class="card-body">
                                    <div class="card-item">
                                        <h5>Guia definitivo de como migrar para UX Design: 5 passos para virar um UX</h5>
                                        <div class="d-flex">                                             
                                            <span data-color="#8B18D1"><i class="las la-book-open"></i>Artigo</span> <p class="ml-2">Tema: Migração de Carreira  |  Fonte: Orange Juice  |  Duração: 6 min</p>
                                        </div>
                                    </div>    
                                    <div class="card-item">
                                        <h5>Guia definitivo de como migrar para UX Design: 5 passos para virar um UX</h5>
                                        <div class="d-flex">                                             
                                            <span class="bdg-video"><i class="lab la-youtube"></i>Vídeo</span> <p class="ml-2">Tema: Migração de Carreira  |  Fonte: Orange Juice  |  Duração: 6 min</p>
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