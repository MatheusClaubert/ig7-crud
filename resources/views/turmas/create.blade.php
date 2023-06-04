@extends('layouts.app')

@section('content')
    <h1>Criar Nova Turma</h1>

    <form action="{{ route('turmas.store') }}" method="POST">
        @csrf
        <label for="id_escola">ID da Escola</label>
        <input type="text" name="id_escola" id="id_escola">

        <label for="status">Status</label>
        <input type="text" name="status" id="status">

        <label for="turno">Turno</label>
        <input type="text" name="turno" id="turno">

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <button type="submit">Salvar</button>
    </form>
@endsection
