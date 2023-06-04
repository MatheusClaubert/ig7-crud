@extends('layouts.app')

@section('content')
    <h1>Detalhes da Turma</h1>

    <p><strong>ID:</strong> {{ $turma->id }}</p>
    <p><strong>ID da Escola:</strong> {{ $turma->id_escola }}</p>
    <p><strong>Status:</strong> {{ $turma->status }}</p>
    <p><strong>Turno:</strong> {{ $turma->turno }}</p>
    <p><strong>Nome:</strong> {{ $turma->nome }}</p>

    <a href="{{ route('turmas.edit', $turma->id) }}">Editar</a>

    <form action="{{ route('turmas.destroy', $turma->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Excluir</button>
    </form>
@endsection
