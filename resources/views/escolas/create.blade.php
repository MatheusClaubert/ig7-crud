@extends('layouts.app')

@section('content')
    <h1>Criar Nova Escola</h1>

    <form action="{{ route('escolas.store') }}" method="POST">
        @csrf
        <label for="status">Status</label>
        <input type="text" name="status" id="status">

        <label for="inep">INEP</label>
        <input type="text" name="inep" id="inep">

        <label for="endereco">Endereço</label>
        <input type="text" name="endereco" id="endereco">

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <button type="submit">Salvar</button>
    </form>
@endsection

