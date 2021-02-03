<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vitrine Pandermask</title>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
</head>
<body>
    <div class="superior">
        <div class="row">
            <div class="col col-sm-6">
                HELP | CONTACT | DELIVERY INFORMATION
            </div>
            <div class="col col-sm-6">
                CALL US: 64-3632-6548
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col col-6">
                logo
            </div>
            <div class="col col-6">
                login
            </div>
        </div>
        <div class="row">
            <div class="col col-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                @foreach($categorias as $categoria)
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="{{route('categorias.vitrine', $categoria)}}">{{$categoria->descricao}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <main class="principal">
        <div class="container">
            <div class="row">
                    @foreach($produtos as $produto)
                    <div class="col col-3">
                        <div class="card" style="width: 18rem; height: 480px">
                            <img src="{{asset('/storage/produtos/'.$produto->imagem)}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$produto->descricao}}</h5>
                                <p class="card-text">
                                    <b>Tamanho:</b>{{$produto->tamanho}}<br>
                                    <b>Categoria:</b>{{$produto->categoria->descricao}}<br>
                                    <b>Valor:</b>{{$produto->vlrproduto}}
                                </p>
                                <a href="#" class="btn btn-primary">Detalhes</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
    </main>

</body>
</html>
