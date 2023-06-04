@extends('layouts.app')

@section('content')
    <h1>Editar Professor</h1>

    <form action="{{ route('professores.update', $professor->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="{{ $professor->nome }}">

        <button type="submit">Salvar</button>
    </form>
@endsection
