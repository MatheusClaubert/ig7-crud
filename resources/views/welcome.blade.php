<!DOCTYPE html>
<html>
<head>
    <title>Bem-vindo</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Gerenciamento de Escolas</h1>
        <p>Este é o sistema de gerenciamento de escolas.</p>
        <p>Acesse as funcionalidades abaixo:</p>

        <div class="card">
            <div class="card-header">Escolas</div>
            <div class="card-body">
                <a href="{{ route('escolas.index') }}" class="btn btn-primary">Ver Escolas</a>
                <a href="{{ route('escolas.create') }}" class="btn btn-success">Adicionar Escola</a>
            </div>
        </div>

        <div class="card">
            <div class="card-header">Turmas</div>
            <div class="card-body">
                <a href="{{ route('turmas.index') }}" class="btn btn-primary">Ver Turmas</a>
                <a href="{{ route('turmas.create') }}" class="btn btn-success">Adicionar Turma</a>
            </div>
        </div>

        <div class="card">
            <div class="card-header">Professores</div>
            <div class="card-body">
                <a href="{{ route('professores.index') }}" class="btn btn-primary">Ver Professores</a>
                <a href="{{ route('professores.create') }}" class="btn btn-success">Adicionar Professor</a>
            </div>
        </div>
    </div>
</body>
</html>
