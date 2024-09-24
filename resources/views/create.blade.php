<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>envio de fomulario</title>
</head>
<body>
    <h1>nova duvida</h1>
    <form action="{{ route('index.envios')}}" method="POST">
         <!-- <input type="hidden" value="{{csrf_token()}}" name="_token">  -->
         @csrf() 
        <input type="text" placeholder="Assunto" name="subject">
        <textarea name="body" cols="30" placeholder= "Descrição"> </textarea>
        <button type="submit">enviar</button>
    </form>
</body>
</html>