@extends('layouts.app')

@section('content')
    <h1>Editar Turma</h1>

    <form action="{{ route('turmas.update', $turma->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="id_escola">ID da Escola</label>
        <input type="text" name="id_escola" id="id_escola" value="{{ $turma->id_escola }}">

        <label for="status">Status</label>
        <input type="text" name="status" id="status" value="{{ $turma->status }}">

        <label for="turno">Turno</label>
        <input type="text" name="turno" id="turno" value="{{ $turma->turno }}">

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="{{ $turma->nome }}">

        <button type="submit">Salvar</button>
    </form>
@endsection
