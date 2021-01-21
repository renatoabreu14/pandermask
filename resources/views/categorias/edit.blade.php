@extends('main')

@section('content')
    <h2>Cadastro de Categorias - Alterar categoria</h2>
    <form action="{{route('categorias.update', $categoria)}}" method="post">
        @csrf
        @method('PUT')
        @include('categorias.form')
    </form>
@endsection
