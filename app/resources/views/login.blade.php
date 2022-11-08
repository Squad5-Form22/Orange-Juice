@section('titulo') Login - Orange Juice @endsection

@extends('layouts/layout')

@section('conteudo')
    <div class="login-wrapper">
        <div class="container">
            <div class="row no-gutters justify-content-center">
                <div class="col-12">
                    <div class="mb-3 d-flex justify-content-center">
                        <a href="./">
                            <img src="/assets/images/institucional/logo-orange.png" class="img-fluid" style="width: 60px;">
                        </a>
                    </div>
                </div>
                <div class="col-11 col-md-10 col-lg-6">
                    <div class="title-wrapper mb-3">
                        <h4 class="text-center text-secondary">Faça seu login</h4>
                        <p class="text-center text-secondary"><em>e aproveite todos os benefícios da nosso ambiente</em></p>
                    </div>
                    <div class="w-100">
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
                        <form id="register-form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row no-gutters justify-content-between align-items-center">
                                <div class="col-12 col-md-12">
                                    <div class="m-1">
                                        <div class="form-group">
                                            <input type="email" class="form-control @error('email') is-inv @enderror" data-name="E-mail" name="email" value="{{ old('email') }}" placeholder="E-mail">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-8">
                                    <div class="m-1">
                                        <div class="form-group">
                                            <input type="password" class="form-control @error('password') is-inv @enderror" data-name="Senha" name="password" value="{{ old('password') }}" placeholder="Informe sua Senha">
                                            <i class="fas fa-eye"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="m-1">
                                        <button type="submit" class="btn btn-primary w-100">Entrar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-12">
                        <div class="mt-3 d-flex justify-content-center">
                            <p class="mb-0 text-secondary">Esqueceu sua Senha?<a href="login"> Redefina aqui</a></p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mt-5">
                            <small class="mb-0 text-secondary text-center">© Copyright <script>document.write(new Date().getFullYear());</script> - Grupo fCamara | Squad 5 - Todos direitos reservados.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('layouts/modal')
@endsection