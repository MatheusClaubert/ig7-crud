<!DOCTYPE html>
<html>
<head>
    <title>G7 SCHOOL</title>
    <!-- Adicione os links para os arquivos CSS aqui -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">

        @yield('content')

    </div>

    <!-- Adicione os scripts JavaScript aqui -->
    <script src="{{ asset('js/app.js') }}"></script>
    
</body>
</html>
