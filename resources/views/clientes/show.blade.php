@extends('main')

@section('content')
    <h2>Cadastro de Cliente - Visualizar cliente</h2>
    <form>
        <div class="row">
            <div class="col-12">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="" class="form-control" value="{{$cliente->nome}}" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <label for="email">Email:</label>
                <input type="email" name="email" id="" class="form-control" value="{{$cliente->email}}" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <label for="cpf">CPF:</label>
                <input type="text" name="cpf" id="" class="form-control" value="{{$cliente->cpf}}" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <label for="endereco">Endereco:</label>
                <input type="text" name="endereco" id="" class="form-control" value="{{$cliente->endereco}}" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <label for="bairro">Bairro:</label>
                <input type="text" name="bairro" id="" class="form-control" value="{{$cliente->bairro}}" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <label for="cidade">Cidade:</label>
                <input type="text" name="cidade" id="" class="form-control"  value="{{$cliente->cidade}}" disabled>
            </div>
            <div class="col-6">
                <label for="uf">UF:</label>
                <input type="text" name="uf" id="" class="form-control" value="{{$cliente->uf}}" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <label for="telefone">Telefone:</label>
                <input type="text" name="telefone" id="" class="form-control"  value="{{$cliente->telefone}}" disabled>
            </div>
        </div>
        <div class="row" style="margin-top: 10px">
            <div class="col-12 text-left">
                <a href="{{route('clientes.index')}}" class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </form>
@endsection
