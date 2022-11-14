{{-- referencia ao layouts --}}
@extends('layouts/layout') 
@extends('layouts/navbar')

{{-- titulo da página --}}
@section('titulo') Eventos - Orange Juice @endsection

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
                <div class="col-11 col-sm-12">
                    <div class="events-title">
                        <h2>Eventos</h2>
                        <h3>Confira a programação dos próximos eventos e programe-se!</h3>
                    </div>
                </div>
            </div> 
            <div class="event-wrapper mt-5">
                <div class="row no-gutters align-items-center border">
                    <div class="col-lg-2">
                        <div class="m-1">
                            <div class="border">
                                <h5>Incrições Até</h5>
                                <h1>08/11</h1>
                                <h5>às 17h00</h5>
                                <span class="bdg-artigo bdg"><i class="las la-trophy"></i> Concurso</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="m-1">
                            <div class="border">
                                <img src="../assets/images/eventos/eventos_1.png" class="w-100" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="m-1">
                            <div class="border">
                                <h2><strong>Orange Challenge</strong></h2>
                                <h5>Tema: Tecnologia x Estudos</h5>
                                <h5>o que eu aprendi nesses últimos 2 anos?</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="m-1">
                            <div class="border">
                                <a href="" class="btn btn-primary">Quero participar!</a>
                                <a href="" class="btn btn-secondary">Saiba mais</a>
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