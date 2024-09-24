<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>forum </title>
</head>
<body>
    
</body>
<h1>Forum</h1>
<h2>nova publicação</h2>
    <form action="{{ route('index.envios')}}" method="POST">
        @csrf
        <p>digite qual assunto:</p> 
        <br>
         <input type="text" placeholder="insira as informaçoes" name="Assunto:">
         <br>
         <p>digite sobre o assunto:</p>
         <textarea name="body" cols="30" placeholder= "Descrição"> </textarea>
         <br>
         <button type="submit">enviar</button>
</body>
</html>