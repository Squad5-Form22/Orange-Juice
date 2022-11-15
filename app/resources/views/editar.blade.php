
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
    @endsection

    {{-- min-width 768px --}}
    @section('menu-content')
        <li><a href="#">Eventos</a></li>
        <li><a href="#">Minhas Trilhas</a></li>
        <li><a href="#r">Comunidade</a></li>
        <li><a href="#">Minha Conta</a></li>

    @endsection
@endsection

{{-- conteúdo principal --}}
@section('conteudo')
    <div class="dashboard-wrapper">
        <div class="container my-5">
            <div class="row no-gutters justify-content-center">
                <div class="col-12 col-sm-6">
                    <div class="my-2">
                        <div class="dashboard-title">
                             <h2>Editar/Cadastrar Usuário</h2>
                        </div>
                    </div>
                    <div class="form-content-wrapper">
                        <form id="register-form" method="POST" action="">
                            @csrf
                            <div class="row no-gutters justify-content-between align-items-center">
                                <div class="col-12 col-md-12">
                                    <div class="m-1">
                                        <div class="form-group">
                                            <label for="name"><strong>Nome do Usuário</strong></label>
                                            <input type="text" class="form-control" data-name="Nome" name="name"  value=""  placeholder="...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class="m-1">
                                        <div class="form-group">
                                            <label for="email"><strong>E-mail do Usuário</strong></label>
                                            <input type="email" class="form-control" data-name="E-mail" name="email" value="" placeholder="...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-8">
                                    <div class="m-1">
                                        <div class="form-group">
                                            <label for="password"><strong>Senha</strong></label>
                                            <input type="password" class="form-control" data-name="Senha" name="password" value="" placeholder="Crie sua Senha">
                                            <i class="fas fa-eye"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="m-1">
                                        <div class="form-group">
                                            <label for="name"><strong>Credencial</strong></label>
                                            <select class="form-control">
                                                <option>Administrador</option>
                                                <option>Usuário da comunidade</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class="m-1">
                                        <button type="submit" class="btn btn-primary w-100">Atualizar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br>
            <div class="row no-gutters justify-content-center">
                <div class="col-12 col-sm-6">
                    <div class="my-2">
                        <div class="dashboard-title">
                             <h2>Editar/Cadastrar Trilha - [nome_da_trilha]</h2>
                        </div>
                    </div>
                    <div class="form-content-wrapper">
                        <form id="register-form" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row no-gutters justify-content-between align-items-center">
                                <div class="col-12 col-md-12">
                                    <div class="m-1">
                                        <div class="form-group">
                                            <label for="name"><strong>Nome da Trilha</strong></label>
                                            <input type="text" class="form-control" data-name="Nome" name="name" value=""  placeholder="...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class="m-1">
                                        <button type="submit" class="btn btn-primary w-100">Atualizar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br>
            <div class="row no-gutters justify-content-center">
                <div class="col-12 col-sm-6">
                    <div class="my-2">
                        <div class="dashboard-title">
                             <h2>Editar/Cadastrar Tópico - [nome_do_tópico]</h2>
                        </div>
                    </div>
                    <div class="form-content-wrapper">
                        <form id="register-form" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row no-gutters justify-content-between align-items-center">
                                <div class="col-12 col-md-12">
                                    <div class="m-1">
                                        <div class="form-group">
                                            <label for="name"><strong>Nome do Tópico</strong></label>
                                            <input type="text" class="form-control" data-name="Nome" name="name" value=""  placeholder="...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class="m-1">
                                        <div class="form-group">
                                            <label for="name"><strong>Tema Tópico</strong></label>
                                            <input type="text" class="form-control" data-name="Nome" name="name" value=""  placeholder="...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-8">
                                    <div class="m-1">
                                        <div class="form-group">
                                            <label for="name"><strong>Fonte</strong></label>
                                            <input type="text" class="form-control" data-name="Nome" name="name" value=""  placeholder="...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="m-1">
                                        <div class="form-group">
                                            <label for="name"><strong>Tipo</strong></label>
                                            <select class="form-control">
                                                <option>Artigo</option>
                                                <option>Webinar</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class="m-1">
                                        <button type="submit" class="btn btn-primary w-100">Atualizar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
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

