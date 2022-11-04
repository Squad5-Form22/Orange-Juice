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
                </div>
            </div>
        </div>
    </div>

@endsection
