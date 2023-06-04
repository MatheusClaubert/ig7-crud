@extends('layouts.app')

@section('content')
    <h1>Lista de Professores</h1>

    <a href="{{ route('professores.create') }}" class="btn btn-primary">Adicionar Professor</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($professores as $professor)
            <tr>
                <td>{{ $professor->id }}</td>
                <td>{{ $professor->nome }}</td>
                <td>
                    <a href="{{ route('professores.show', $professor->id) }}">Detalhes</a>
                    <a href="{{ route('professores.edit', $professor->id) }}">Editar</a>
                    <form action="{{ route('professores.destroy', $professor->id) }}" method="POST">
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
