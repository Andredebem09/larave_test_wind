@extends('layout')

@section('corpo')

<div class="container">
    <div class="row">
        <div class="col">
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
                <button type="submit" class="btn btn-success">enviar</button>
                </form>
        </div>
    
    </div>
</div>

@endsection