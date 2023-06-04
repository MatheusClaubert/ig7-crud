@extends('layouts.app')

@section('content')
    <h1>Detalhes da Escola</h1>

    <p><strong>ID:</strong> {{ $escola->id }}</p>
    <p><strong>Status:</strong> {{ $escola->status }}</p>
    <p><strong>INEP:</strong> {{ $escola->inep }}</p>
    <p><strong>Endereço:</strong> {{ $escola->endereco }}</p>
    <p><strong>Nome:</strong> {{ $escola->nome }}</p>

    <a href="{{ route('escolas.edit', $escola->id) }}">Editar</a>

    <form action="{{ route('escolas.destroy', $escola->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Excluir</button>
    </form>
@endsection
