@extends('layouts.app')

@section('content')
    <h1>Editar Escola</h1>

    <form action="{{ route('escolas.update', $escola->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="status">Status</label>
        <input type="text" name="status" id="status" value="{{ $escola->status }}">

        <label for="inep">INEP</label>
        <input type="text" name="inep" id="inep" value="{{ $escola->inep }}">

        <label for="endereco">Endereço</label>
        <input type="text" name="endereco" id="endereco" value="{{ $escola->endereco }}">

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="{{ $escola->nome }}">

        <button type="submit">Salvar</button>
    </form>
@endsection
