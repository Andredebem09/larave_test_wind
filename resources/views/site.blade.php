<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testando laravel</title>
</head>
<body>
    <h1>Bem vindo</h1>

    <p>crie sua duvida abaixo:</p>

    <a href="{{ route('index.create')}}">criar duvida</a>

    <br>

    <p>links para paginas:</p>


    <a href="{{ route('andre.laravel')}}">acessar pagina</a>

    <br>

    <a href="{{ route('local.bd')}}">acessar banco de dados</a>

    

    


    
</body>
</html>