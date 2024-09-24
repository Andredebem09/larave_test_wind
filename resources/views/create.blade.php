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
         <p>coloque a duvida</p>
        <input type="text" placeholder="Assunto" name="subject">
        <br>
        <p>coloque a descrição sobre o assunto:</p>
        <textarea name="body" cols="30" placeholder= "Descrição"> </textarea>
        <br>
        <button type="submit">enviar</button>
    </form>
</body>
</html>