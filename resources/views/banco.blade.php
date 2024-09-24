<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>professor</title>
</head>
<body>
    <h1>inserir dados da turma</h1>
    <form action="{{ route('index.duvidas')}}" method="POST">
        @csrf
        <p>nome professor</p>
        <input type="text" name="professor" placeholder="nome do professor">
        <br>
        <p>nome turma</p>
        <input type="text" name="turma" placeholder="nome da turma">
        <br>
        <p>total de alunos</p>
        <br>
        <input type="text" name="total_aluno" placeholder="total de estudantes">
        <br>
        <button type="submit">enviar</button>
        </form>
</body>
</html>