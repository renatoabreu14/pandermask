@extends('main')

@section('content')
    <h2>Cadastro de Cliente - Novo cliente</h2>
    <form action="{{route('clientes.store')}}" method="post">
        @csrf
        @include('clientes.form')
    </form>
@endsection
