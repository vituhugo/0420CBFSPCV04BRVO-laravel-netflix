<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Styles -->
</head>
<body>
    <div class="container">
        <br>
        <h1>Criar novo filme</h1>
        @if (session('mensagem'))
            <p class="alert alert-success">{{ session('mensagem') }}</p>
        @endif
        <form action="/filme/guardar" method="POST">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nome</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Exemplo BLABLA" name="nome">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Duração</label>
                        <input type="numeric" class="form-control" id="exampleFormControlInput1" placeholder="Em minutos..." name="duracao">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Descrição</label>
                        <textarea class="form-control" id="exampleFormControlInput1" placeholder="Exemplo BLABLA" name="descricao">
                        </textarea>
                    </div>
                </div>

                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger"> {{ $error }} </div>
                    @endforeach
                @endif

                <div class="col-12 text-right">
                    <button class="btn btn-primary">Enviar!</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
