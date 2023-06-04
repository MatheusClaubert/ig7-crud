@extends('layouts.app')

@section('content')
    <h1>Detalhes do Professor</h1>

    <p><strong>ID:</strong> {{ $professor->id }}</p>
    <p><strong>Nome:</strong> {{ $professor->nome }}</p>

    <a href="{{ route('professores.edit', $professor->id) }}">Editar</a>

    <form action="{{ route('professores.destroy', $professor->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Excluir</button>
    </form>
@endsection
