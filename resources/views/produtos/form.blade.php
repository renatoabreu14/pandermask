<div class="row">
    <div class="col-12">
        <label for="descricao">Descricao:</label>
        <input type="text" name="descricao" id="" class="form-control" value="{{isset($produto)?$produto->descricao:old('descricao', '')}}">
    </div>
</div>
<div class="row">
    <div class="col-4">
        <label for="categoria">Categoria</label>
        <select name="categoria_id" id="categoria" class="form-control">
            <option value="0" selected="true">Selecione...</option>
            @foreach($categorias as $categoria)
                @isset($produto)
                    @if($categoria->id == $produto->categoria->id)
                        <option value="{{$categoria->id}}" selected="true">{{$categoria->descricao}}</option>
                    @else
                        <option value="{{$categoria->id}}">{{$categoria->descricao}}</option>
                    @endif
                @else
                    <option value="{{$categoria->id}}">{{$categoria->descricao}}</option>
                @endisset
            @endforeach
        </select>
    </div>
    <div class="col-4">
        <label for="tamanho">Tamanho</label>
        <select name="tamanho" id="tamanho" class="form-control">
            <option value="0" selected="true">Selecione...</option>
            @foreach(\App\Models\Produto::TAMANHO as $key => $value)
                @isset($produto)
                    @if($produto->tamanho == $value)
                        <option value="{{$key}}" selected="true">{{$value}}</option>
                    @else
                        <option value="{{$key}}">{{$value}}</option>
                    @endif
                @else
                    <option value="{{$key}}">{{$value}}</option>
                @endisset
            @endforeach
        </select>
    </div>
    <div class="col-4">
        <label for="generomasc">Genero</label>
        <select name="generomasc" id="generomasc" class="form-control">
            @isset($produto)
                @if($produto->genero == "0")
                    <option value="0" selected="true">Feminino</option>
                    <option value="1">Masculino</option>
                @else
                    <option value="0" >Feminino</option>
                    <option value="1" selected="true">Masculino</option>
                @endif
            @else
                <option value="0">Feminino</option>
                <option value="1">Masculino</option>
            @endisset
        </select>
    </div>
</div>
<div class="row">
    <div class="col-4">
        <label for="vlrproduto">Valor do produto:</label>
        <input type="number" step="0.01" name="vlrproduto" id="vlrproduto" class="form-control" value="{{isset($produto)?$produto->vlrproduto:old('vlrproduto', '')}}">
    </div>
    <div class="col-4">
        <label for="estoque">Estoque:</label>
        <input type="number" step="1" name="estoque" id="estoque" class="form-control" value="{{isset($produto)?$produto->estoque:old('estoque', '')}}">
    </div>
    <div class="col-4">
        <label for="imagem">Imagem</label>
        <input type="file" name="imagem" id="" class="form-control">
    </div>
</div>
<div class="row" style="margin-top: 10px">
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{route('produtos.index')}}" class="btn btn-danger">Cancelar</a>
    </div>
</div>
