{{-- referencia ao layouts --}}
@extends('layouts/layout') 

{{-- titulo da página --}}
@section('titulo') Registro - Orange Juice @endsection

{{-- conteúdo principal --}}
@section('conteudo')
    <div class="register-wrapper">
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
                        <h1 class="text-center font-weight-bolder text-secondary">Orange Evolution</h1>
                        <h3 class="text-center text-secondary">A comunidade tech mais vitaminada</h3>
                        <br>
                        <h4 class="text-center text-secondary">Registre-se e faça parte!</h4>
                    </div>

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
                                            <input type="text" class="form-control @error('name') is-inv @enderror" data-name="Nome" name="name"  value="{{ old('name') }}"  placeholder="Nome completo">
                                        </div>
                                    </div>
                                </div>
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
                                            <input type="password" class="form-control @error('password') is-inv @enderror" data-name="Senha" name="password" value="{{ old('password') }}" placeholder="Crie sua Senha">
                                            <i class="fas fa-eye"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="m-1">
                                        <button type="submit" class="btn btn-primary w-100">Registrar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-12">
                        <div class="mt-3 d-flex justify-content-center">
                            <p class="mb-0 text-secondary">Já possui uma conta?<a href="login"> Faça seu login</a></p>
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

{{-- conteúdo do footer --}}
@section('footer')
    @include('layouts/modal')
@endsection
