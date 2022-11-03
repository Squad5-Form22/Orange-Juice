@extends('layouts/layout')

@section('conteudo')
    <div class="register-wrapper">
        <div class="container">
            <div class="row no-gutters justify-content-center">
                <div class="col-7 border">
                    <div class="title-wrapper mb-3">
                        <h1 class="text-center">Orange Evolution</h1>
                        <h3 class="text-center">A comunidade tech mais vitaminada!</h3>
                    </div>
                </div>
                <div class="col-7 border">
                    <div class="form-register-wrapper my-4">
                        <form>
                            <div class="row no-gutters">
                                <div class="col-12">
                                    <div class="m-1">
                                        <div class="form-group mb-0">
                                            <input type="text" id="" class="form-control" data-name="" name="" placeholder="Nome completo">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="m-1">
                                        <div class="form-group mb-0">
                                            <input type="text" id="" class="form-control" data-name="" name="" placeholder="Cidade">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="m-1">
                                        <div class="form-group mb-0">
                                            <input type="text" id="" class="form-control" data-name="" name="" placeholder="Estado">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="m-1">
                                        <div class="form-group mb-0">
                                            <input type="email" id="" class="form-control" data-name="" name="" placeholder="E-mail">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="m-1">
                                        <div class="form-group mb-0">
                                            <input type="text" id="" class="form-control" data-name="" name="" placeholder="Telefone/WhatsApp">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="m-1">
                                        <div class="form-group mb-0">
                                            <input type="text" id="" class="form-control" data-name="" name="" placeholder="Crie sua Senha">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="m-1">
                                        <div class="form-group mb-0">
                                            <input type="text" id="" class="form-control" data-name="" name="" placeholder="Confirme sua Senha">
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
