@extends('main')

@section('content')
    <p><a href="{{route('categorias.create')}}" class="btn btn-success">Nova categoria</a></p>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Descricao</th>
            <th>-</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categorias as $categoria)
            <tr>
                <td>{{$categoria->descricao}}</a></td>
                <td>
                    <a href="{{route('categorias.edit', $categoria)}}" class="btn btn-primary" ><span class="material-icons icon-image-preview">edit</span></a>
                    <form action="{{route('categorias.destroy', $categoria)}}" style="{display: inline}" class="form-inline" method="post">
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
