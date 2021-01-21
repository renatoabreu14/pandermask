@extends('main')

@section('content')
    <h2>Cadastro de Cliente - Alterar cliente</h2>
    <form action="{{route('clientes.update', $cliente)}}" method="post">
        @csrf
        @method('PUT')
        @include('clientes.form')
    </form>
@endsection
