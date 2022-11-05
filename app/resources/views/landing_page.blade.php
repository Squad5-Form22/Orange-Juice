@extends('layouts/layout')

@section('navbar')
    @include('layouts/navbar')
@endsection

@section('conteudo')

    <div class="py-5 d-flex align-items-center" style="background-color:#dddddd; height:500px;">
        <div class="container">
            <div class="row no-gutters justify-content-center">
                <h1 class="mb-0">Sessão 1 </h1>
            </div>
        </div>
    </div>
    <div class="py-5 d-flex align-items-center" style="background-color:#fff; height:500px;">
        <div class="container">
            <div class="row no-gutters justify-content-center">
                <h1 class="mb-0">Sessão 2 </h1>
            </div>
        </div>
    </div>
    <div class="py-5 d-flex align-items-center" style="background-color:#dddddd; height:500px;">
        <div class="container">
            <div class="row no-gutters justify-content-center">
                <h1 class="mb-0">Sessão 3 </h1>
            </div>
        </div>
    </div>
    <div class="py-5 d-flex align-items-center" style="background-color:#fff; height:500px;">
        <div class="container">
            <div class="row no-gutters justify-content-center">
                <h1 class="mb-0">Sessão 4 </h1>
            </div>
        </div>
    </div>

@endsection

@section('footer')
    @include('layouts/footer')
@endsection
