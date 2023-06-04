@extends('layouts.app')

@section('content')
    <h1>Lista de Turmas</h1>

    <a href="{{ route('turmas.create') }}" class="btn btn-primary">Adicionar Turma</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>ID da Escola</th>
                <th>Status</th>
                <th>Turno</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($turmas as $turma)
            <tr>
                <td>{{ $turma->id }}</td>
                <td>{{ $turma->id_escola }}</td>
                <td>{{ $turma->status }}</td>
                <td>{{ $turma->turno }}</td>
                <td>{{ $turma->nome }}</td>
                <td>
                    <a href="{{ route('turmas.show', $turma->id) }}">Detalhes</a>
                    <a href="{{ route('turmas.edit', $turma->id) }}">Editar</a>
                    <form action="{{ route('turmas.destroy', $turma->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
