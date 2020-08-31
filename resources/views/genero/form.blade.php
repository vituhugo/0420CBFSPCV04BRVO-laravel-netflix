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
        <h1>Criar novo genero</h1>

        @if (session('message'))
            <p class="alert alert-success">{{ session('message') }}</p>
        @endif
        <form action="/genero" method="POST">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nome</label>
                        <input type="text" 
                                class="form-control" 
                                id="exampleFormControlInput1" 
                                placeholder="nome" 
                                name="nome">
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
