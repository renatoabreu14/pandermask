@extends('main')

@section('content')
    <p><a href="{{route('clientes.create')}}" class="btn btn-success">Novo cliente</a></p>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>-</th>
        </tr>
        </thead>
        <tbody>
        @foreach($clientes as $cliente)
            <tr>
                <td><a href="{{route('clientes.show', $cliente)}}" alt="Visualizar" title="Visualizar">{{$cliente->nome}}</a></td>
                <td>{{$cliente->email}}</td>
                <td>{{$cliente->telefone}}</td>
                <td>
                    <a href="{{route('clientes.edit', $cliente)}}" class="btn btn-primary" ><span class="material-icons icon-image-preview">edit</span></a>
                    <form action="{{route('clientes.destroy', $cliente)}}" style="{display: inline}" class="form-inline" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" alt="Excluir" title="Excluir"><span class="material-icons icon-image-preview">delete</span></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
