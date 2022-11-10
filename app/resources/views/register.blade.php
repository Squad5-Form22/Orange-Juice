{{-- referencia ao layouts --}}
@extends('layouts/layout') 

{{-- titulo da página --}}
@section('titulo') Registro - Orange Juice @endsection

{{-- conteúdo principal --}}
@section('conteudo')
    <div class="register-wrapper">
        <div class="container">        
            <div class="row no-gutters justify-content-center">
                <div class="col-12 col-md-10 col-lg-6">
                    <div class="register-content-wrapper bg-light">
                        <div class="mb-3 d-flex justify-content-center">
                            <a href="./">
                                <img src="/assets/images/institucional/logotipo/logo-orange.png" class="img-fluid" style="width: 160px;">
                            </a>
                        </div>
                        <div class="title-wrapper mb-3">
                            <h5 class="text-center"><strong>A comunidade tech mais vitaminada</strong></h5>
                        </div>
                        {{-- alertas --}}
                        <div class="w-100">
                            @error('name')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Erro!</strong> {{ $message }}.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @enderror
                            @error('email')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Erro!</strong> {{ $message }}.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @enderror
                            @error('password')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Erro!</strong> {{ $message }}.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @enderror
                        </div>
                        <div class="form-content-wrapper">
                            <form id="register-form" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="row no-gutters justify-content-between align-items-center">
                                    <div class="col-12 col-md-12">
                                        <div class="m-1">
                                            <div class="form-group">
                                                <label for="name"><strong>Nome</strong></label>
                                                <input type="text" class="form-control @error('name') is-inv @enderror" data-name="Nome" name="name"  value="{{ old('name') }}"  placeholder="Digite seu nome completo">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12">
                                        <div class="m-1">
                                            <div class="form-group">
                                                <label for="email"><strong>E-mail</strong></label>
                                                <input type="email" class="form-control @error('email') is-inv @enderror" data-name="E-mail" name="email" value="{{ old('email') }}" placeholder="Digite seu e-mail">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12">
                                        <div class="m-1">
                                            <div class="form-group">
                                                <label for="password"><strong>Senha</strong></label>
                                                <input type="password" class="form-control @error('password') is-inv @enderror" data-name="Senha" name="password" value="{{ old('password') }}" placeholder="Crie sua Senha">
                                                <i class="fas fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12">
                                        <div class="m-1">
                                            <button type="submit" class="btn btn-primary w-100">Registre-se</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="mt-3 d-flex justify-content-center">
                            <p class="mb-0"><a class="link-bl" href="login">Já tenho conta</a></p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mt-3 d-flex justify-content-center">
                            <p class="mb-0"><a class="link-pk" href="./">Voltar à página inicial</a></p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mt-3">
                            <p class="mb-0 text-white text-center">© <script>document.write(new Date().getFullYear());</script> FCamara Formação e Consultoria.</p>
                            <p class="mb-0 text-white text-center">Todos os direitos reservados.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- conteúdo do footer --}}
@section('footer')
    @include('layouts/modal')
@endsection
