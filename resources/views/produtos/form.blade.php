<div class="row">
    <div class="col-12">
        <label for="descricao">Descricao:</label>
        <input type="text" name="descricao" id="" class="form-control" value="">
    </div>
</div>
<div class="row">
    <div class="col-4">
        <label for="categoria">Categoria</label>
        <select name="categoria_id" id="categoria" class="form-control">
            <option value="0" selected="true">Selecione...</option>
            @foreach($categorias as $categoria)
                <option value="{{$categoria->id}}">{{$categoria->descricao}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-4">
        <label for="tamanho">Tamanho</label>
        <select name="tamanho" id="tamanho" class="form-control">
            <option value="0" selected="true">Selecione...</option>
            @foreach(\App\Models\Produto::TAMANHO as $key => $value)
                <option value="{{$key}}">{{$value}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-4">
        <label for="generomasc">Genero</label>
        <select name="generomasc" id="generomasc" class="form-control">
            <option value="0" selected="true">Feminino</option>
            <option value="1" >Masculino</option>
        </select>
    </div>
</div>
<div class="row">
    <div class="col-4">
        <label for="vlrproduto">Valor do produto:</label>
        <input type="number" step="0.01" name="vlrproduto" id="vlrproduto" class="form-control" value="">
    </div>
    <div class="col-4">
        <label for="estoque">Estoque:</label>
        <input type="number" step="1" name="estoque" id="estoque" class="form-control" value="">
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
