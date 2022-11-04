<<<<<<< HEAD
@extends('layouts/layout')

@section('conteudo')

    <div class="register-wrapper">
        <div class="container">
            <div class="row no-gutters justify-content-center">
                <div class="col-11 col-md-10 col-lg-6">
                    <div class="title-wrapper mb-3">
                        <h1 class="text-center">Orange Evolution</h1>
                        <h3 class="text-center">A comunidade tech mais vitaminada!</h3>
                    </div>
                    <div class="form-register-wrapper">
                        <form id="register-form" method="POST">
                            @csrf
                            <div class="row no-gutters">
                                <div class="col-12 col-md-12">
                                    <div class="m-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control" data-name="Nome" name="name"  value="{{ old('name') }}"  placeholder="Nome completo">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-7">
                                    <div class="m-1">
                                        <div class="form-group">
                                            <input type="email" class="form-control" data-name="E-mail" name="email" value="{{ old('email') }}" placeholder="E-mail">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-5">
                                    <div class="m-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control" data-name="Telefone" name="phone" value="{{ old('phone') }}" placeholder="Telefone">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="m-1">
                                        <div class="form-group">
                                            <input type="password" class="form-control" data-name="Senha" name="password" value="{{ old('password') }}" placeholder="Crie sua Senha">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="m-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control" data-name="Cofirmação de Senha" name="password_confirm" value="{{ old('password_confirm') }}" placeholder="Confirme sua Senha">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="m-1">
                                        <button type="submit" class="btn btn-primary">Registrar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
=======
@extends('layout')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name"
                                class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
>>>>>>> 0ce7e3aa3886c7f127d4fa159d251de3e0ca15ae
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD

@endsection
=======
</div>
>>>>>>> 0ce7e3aa3886c7f127d4fa159d251de3e0ca15ae
