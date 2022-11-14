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
        <li><a href="user">Minha Conta</a></li>
    </div>
    <div class="mt-3 d-flex align-items-center justify-content-between">
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
                <div class="col-12 col-sm-12">
                    <div class="events-title">
                        <h2>Eventos</h2>
                        <h3>Confira a programação dos próximos eventos e programe-se!</h3>
                    </div>
                </div>
            </div> 
            <div class="event-wrapper">
                <div class="row no-gutters align-items-lg-center">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="row no-gutters align-items-center flex-lg-row-reverse">
                            <div class="col-12 col-lg-6">
                                <div class="mx-2">
                                    <div class="event-cel">
                                        <div class="event-cel-content img-cel-box">
                                            <img src="../assets/images/eventos/eventos_1.png">
                                        </div>  
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="mx-2">
                                    <div class="event-cel">
                                        <div class="event-cel-content event-data">
                                            <h5>Incrições Até</h5>
                                            <h1>08/11</h1>
                                            <h4>às 17h00</h4>
                                            <span class="bdg-artigo bdg w-100"><i class="las la-trophy"></i> Concurso</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-8">
                        <div class="row no-gutters align-items-center">
                            <div class="col-12 col-lg-8">
                                <div class="mx-2">
                                    <div class="event-cel">
                                        <div class="event-cel-content event-description">
                                            <h3>Orange Challenge</h3>
                                            <h5>Tema: Tecnologia x Estudos o que eu aprendi nesses últimos 2 anos?</h5>
                                        </div>                
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="mx-2">
                                    <div class="event-cel">
                                        <div class="event-cel-content btn-area">
                                            <a href="" class="btn btn-primary">Quero participar!</a>
                                            <a href="" class="btn btn-secondary">Saiba mais</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="event-wrapper">
                <div class="row no-gutters align-items-lg-center">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="row no-gutters align-items-center flex-lg-row-reverse">
                            <div class="col-lg-6">
                                <div class="mx-2">
                                    <div class="event-cel">
                                        <div class="event-cel-content img-cel-box">
                                            <img src="../assets/images/eventos/eventos_2.png">
                                        </div>  
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mx-2">
                                    <div class="event-cel">
                                        <div class="event-cel-content event-data">
                                            <h5>Incrições Até</h5>
                                            <h1>10/11</h1>
                                            <h4>às 18h00</h4>
                                            <span class="bdg-artigo bdg w-100"><i class="las la-video"></i> Webinar</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-8">
                        <div class="row no-gutters align-items-center">
                            <div class="col-lg-8">
                                <div class="mx-2">
                                    <div class="event-cel">
                                        <div class="event-cel-content event-description">
                                            <h3>Bate-papo com Joel</h3>
                                            <h5>Neste encontro, contamos com a presença de Joel Backschat CIO do Grupo FCamara.</h5>
                                        </div>                
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mx-2">
                                    <div class="event-cel">
                                        <div class="event-cel-content btn-area">
                                            <a href="" class="btn btn-primary">Quero participar!</a>
                                            <a href="" class="btn btn-secondary">Saiba mais</a>
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

