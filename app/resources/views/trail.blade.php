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
                    {{-- verificar caminho da imagem --}}
                    <img src="../assets/images/trilhas/trilha_{{ $trail['name'] }}.png" class="img-fluid">
                </div>
                <div class="col-lg-8">
                    <div class="m-3">
                        <div class="trail-head-content">
                            <p>Trilha do Conhecimento</p>
                            <h1>{{ $trail['name'] }}</h1>
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
                        <h3>Se você chegou até aqui, é porque quer aprender mais sobre tecnologia, especialmente sobre <strong>{{ $trail['name'] }}</strong>!</h3>
                        <p>Essa trilha foi montada pensando em quem está começando na área, ou passando por uma migração de carreira e ainda não sabe exatamente o que é esse mundo. Então, aperta o cinto e vem com a gente nessa jornada!</p>
                    </div>
                </div>

                <div class="col-12">
                    @foreach($topics_contents as $topic)
                    <div class="accordion mb-3" id="accordion{{ $topic['name'] }}">
                        
                     
                        <div class="card">
                            <div class="card-header" id="heading{{ $topic['name'] }}">
                                <div class="mb-0 d-flex align-items-center justify-content-between">
                                    <h4 class="d-inline mb-0"><strong>{{ $topic['name'] }}</strong></h4>
                                    <button class="btn" type="button" data-toggle="collapse" data-target="#collapse{{ $topic['name'] }}" aria-expanded="true" aria-controls="collapse{{ $topic['name'] }}">
                                        <i class="fas fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                            <div id="collapse{{ $topic['name'] }}" class="collapse" aria-labelledby="heading{{ $topic['name'] }}" data-parent="#accordion{{ $topic['name'] }}">
                                <div class="card-body">
                                    @foreach($topic['contents'] as $content)
                                    <div class="card-item">
                                        <label class="card-title">
                                            <input id="{{ $content['id'] }}" type="checkbox" class="mr-2"  @checked($content['status'] == '1') value="{{$content['status']}}" >
                                            <a href="https://www.google.com.br/" class="text-dark" target="_blank"><h5>{{$content['name']}}</h5></a>
                                        </label>
                                        <div class="d-flex">                                             
                                            <span class="bdg-artigo"><i class="las la-book-open"></i> Artigo</span><p class="ml-2">Tema: Migração de Carreira  |  Fonte: Orange Juice  |  Duração: 6 min</p>
                                        </div>
                                    </div>
                                    @endforeach              
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

 
{{-- conteúdo do footer --}}
@section('footer')
    @include('layouts/footer')
@endsection

