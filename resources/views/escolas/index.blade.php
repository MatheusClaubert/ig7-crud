@extends('layouts.app')
@section('content')

    <h1>Lista de Escolas</h1>

    <a href="{{ route('escolas.create') }}" class="btn btn-primary">Adicionar Escola</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Status</th>
                <th>Inep</th>
                <th>Endereço</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($escolas as $escola)
            <tr>
                <td>{{ $escola->id }}</td>
                <td>{{ $escola->status }}</td>
                <td>{{ $escola->inep }}</td>
                <td>{{ $escola->endereco }}</td>
                <td>{{ $escola->nome }}</td>
                <td>
                    <a href="{{ route('escolas.show', $escola->id) }}">Detalhes</a>
                    <a href="{{ route('escolas.edit', $escola->id) }}">Editar</a>
                    <form action="{{ route('escolas.destroy', $escola->id) }}" method="POST">
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
