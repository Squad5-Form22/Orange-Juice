@section('titulo') Nova Senha - Orange Juice @endsection

@extends('layouts/layout')

@section('conteudo')
    <div class="redefinir-wrapper">
        <div class="container">
            <div class="row no-gutters justify-content-center">
                <div class="col-12 col-md-10 col-lg-6">
                    <div class="redfinir-content-wrapper bg-light">
                        <div>
                            <div class="mb-3 d-flex justify-content-center">
                                <a href="./">
                                    <img src="/assets/images/logotipo/logo-orange.png" class="img-fluid" style="width: 160px;">
                                </a>
                            </div>
                            <div class="title-wrapper mb-3">
                                <h5 class="text-center"><strong>A comunidade tech mais vitaminada</strong></h5>
                            </div>
                            {{-- alertas --}}
                            <div class="w-100">
                                @error('email')
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Erro!</strong> {{ $message }}.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true"><i class="las la-times"></i></span>
                                    </button>
                                </div>
                                @enderror
                                @error('password')
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Erro!</strong> {{ $message }}.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true"><i class="las la-times"></i></span>
                                    </button>
                                </div>
                                @enderror
                            </div>
                            <div class="form-content-wrapper">
                                <form id="redefinir-form" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="row no-gutters justify-content-between align-items-center">
                                        <div class="col-12 col-md-12">
                                            <div class="m-1">
                                                <div class="form-group">
                                                    <label for="password"><strong>Nova Senha</strong></label>
                                                    <input type="password" class="form-control @error('password') is-inv @enderror" data-name="Senha" name="password" value="{{ old('password') }}" placeholder="Crie sua Senha">
                                                    <i class="fas fa-eye"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-12">
                                            <div class="m-1">
                                                <div class="form-group">
                                                    <label for="password"><strong>Confirme sua Nova Senha</strong></label>
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
                                <div>
                                    <p class="mb-3"><a class="link-bl" href="register">Faça seu login</a></p>
                                </div>
                            </div>
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

@section('footer')
    @include('layouts/modal')
@endsection