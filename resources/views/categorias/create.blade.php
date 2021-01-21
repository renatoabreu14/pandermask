@extends('main')

@section('content')
    <h2>Cadastro de Categorias - Nova categoria</h2>
    <form action="{{route('categorias.store')}}" method="post">
        @csrf
        @include('categorias.form')
    </form>
@endsection
