@extends('layouts/layout')

@section('conteudo')
    <div class="register-wrapper">
        <div class="container">
            <div class="row no-gutters justify-content-center">
                <div class="col-12">
                    <div class="mb-3 d-flex justify-content-center">
                        <a href="./">
                            <img src="https://dummyimage.com/100/000/fff" class="img-fluid" style="border-radius: 50%;">
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
                    <div class="form-content-wrapper">
                        <form id="register-form" method="POST">
                            @csrf
                            <div class="row no-gutters justify-content-between align-items-center">
                                <div class="col-12 col-md-12">
                                    <div class="m-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control" data-name="Nome" name="name"  value="{{ old('name') }}"  placeholder="Nome completo">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class="m-1">
                                        <div class="form-group">
                                            <input type="email" class="form-control" data-name="E-mail" name="email" value="{{ old('email') }}" placeholder="E-mail">
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-12 col-md-5">
                                    <div class="m-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control telefone" data-name="Telefone" name="phone" value="{{ old('phone') }}" placeholder="Telefone">
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="col-12 col-md-8">
                                    <div class="m-1">
                                        <div class="form-group">
                                            <input type="password" class="form-control" data-name="Senha" name="password" value="{{ old('password') }}" placeholder="Crie sua Senha">
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

@section('footer')
    @include('layouts/modal')
@endsection