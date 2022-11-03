@extends('layouts/layout')

{{-- navbar --}}
@include('layouts/navbar')

{{-- conteúdo principal da página --}}
@section('conteudo')

    <div class="container">
        <div class="py-5">
            <h1 class="text-center mb-0">página do usuário</h1>
        </div>
    </div>

    @include('layouts/footer')
@endsection
