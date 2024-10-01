@extends('layout')

@section('corpo')

<div class="container">
    <h1>Detalhes da Consulta</h1>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Assunto</th>
                        <th scope="col">Status</th>
                        <th scope="col">Conteúdo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($suportes as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->subject }}</td>
                            <td>{{ $item->status }}</td>
                            <td>{{ $item->body }}</td>
                        </tr>
                    @endforeach
                 
                </tbody>
            </table>

        </div>
    </div>
</div>
<a href="{{route('index.site')}}" class="btn btn-outline-info">Voltar</a>
@endsection
