{{-- logout --}}
<form id="logout-form" action="{{ route('logout') }}" method="post" class="d-none">
    @csrf
</form>

@extends('layouts/layout') 
@extends('layouts/navbar')

{{-- titulo da página --}}
@section('titulo') Trilha - Orange Juice @endsection

{{-- conteúdo menu --}}
@section('navbar')
    {{-- max-width 767.98px --}}
    @section('mobile-menu-content')
        <li><a href="eventos">Eventos</a></li>
        <li><a href="{{ route('dashboard') }}">Trilhas</a></li>
        <li><a href="https://discord.com/invite/NtESsDFGx5" target="_blank">Comunidade</a></li>
        <li><a href="user">Minha Conta</a></li>
        <li><a href="{{ route('logout') }}" class="log-out">Sair</a></li>
    @endsection

    {{-- min-width 768px --}}
    @section('menu-content')
        <li><a href="eventos">Eventos</a></li>
        <li><a href="{{ route('dashboard') }}">Trilhas</a></li>
        <li><a href="https://discord.com/invite/NtESsDFGx5" target="_blank">Comunidade</a></li>
        <li><a href="user">Minha Conta</a></li>
        <li><a href="{{ route('logout') }}" class="log-out">Sair</a></li>
    @endsection
@endsection

{{-- conteúdo principal --}}
@section('conteudo')
    <div class="trail-head-wrapper">
        <div class="container">
            <div class="row no-gutters align-items-center">
                <div class="col-12">
                    <div class="bread-crumb">
                        <ul class="d-flex align-items-center">
                            <li class="bread-crumb-item"><a href="../">Dashboard</a></li>
                            <li class="bread-crumb-item">{{ $trail['name'] }}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="img-trail-head-box">
                        <img src="../assets/images/trilhas/trilha_{{ $trail['image_name'] }}.png" class="img-fluid">
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-8">
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
                        <p>{{ $trail['description'] }}</p>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    @if($user['role'] === 'admin')
                    <div class="d-flex justify-content-end">
                        <a href="from" class="btn edit-btn"><i class="las la-edit"></i> Editar</a>
                    </div>
                    @endif
                </div>
                <div class="col-12">
                    @foreach($topics_contents as $topic)
                    <div class="accordion mb-3" id="accordion{{ $topic['id'] }}">
                        <div class="card">
                            <div class="card-header" id="heading{{ $topic['id'] }}">
                                <div class="mb-0 d-flex align-items-center justify-content-between">
                                    <h4 class="d-inline mb-0"><strong>{{ $topic['name'] }}</strong></h4>
                                    <div class="w-25 d-flex align-items-center justify-content-end">       
                                        @if($user['role'] === 'admin')
                                        <span class="edit"><a href=""><i class="las la-edit"></i> Editar</a></span>                       
                                        <span class="trash"><a href=""><i class="las la-trash-alt"></i> Deletar</a></span>
                                        @endif
                                        <button class="btn" type="button" data-toggle="collapse" data-target="#collapse{{ $topic['id'] }}" aria-expanded="true" aria-controls="collapse{{ $topic['id'] }}">
                                            <i class="fas fa-chevron-right"></i>
                                        </button>
                                    </div>
                                    
                                </div>
                            </div>
                            <div id="collapse{{ $topic['id'] }}" class="collapse" aria-labelledby="heading{{ $topic['id'] }}" data-parent="#accordion{{ $topic['id'] }}">
                                <div class="card-body">
                                    @foreach($topic['contents'] as $content)
                                    <div class="card-item">
                                        <label class="card-title">
                                            <input id="{{ $content['id'] }}" type="checkbox" class="mt-1 mr-2" @if(in_array($content['id'], $completed_contents_id)) checked @endif value="{{$content['status']}}" >
                                            <a href="{{ $content['url'] }}" class="text-dark" target="_blank"><h5>{{$content['name']}}</h5></a>
                                        </label>
                                        <div class="d-flex align-items-center justify-content-between">           
                                            <div class="d-flex" style="width:85%">                     
                                                <span class="bdg-artigo bdg"><i class="las la-book-open"></i> {{ $content['type']}}</span><p class="ml-2">Tema: {{ $content['theme'] }}  |  Fonte: {{ $content['author'] }}  |  Duração: {{ $content['duration'] }}</p>
                                            </div> 
                                            @if($user['role'] === 'admin')    
                                            <div>       
                                                <span class="edit"><a href=""><i class="las la-edit"></i></a></span>                       
                                                <span class="trash"><a href=""><i class="las la-trash-alt"></i></a></span>
                                            </div> 
                                            @endif
                                        </div>
                                    </div>
                                    @endforeach              
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-12 mt-5">
                    @if($user['role'] === 'admin')
                    <div class="d-flex justify-content-start">
                        <a href="from" class="btn edit-btn d-flex align-items-center justify-conten-between"><i class="las la-plus-square"></i> Novo</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

 
{{-- conteúdo do footer --}}
@section('footer')
    @include('layouts/footer')
@endsection