<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- css e javascript --}}
    @vite(['resources/css/app.css', 'resource/js/app.js'])
</head>

<body>

    {{-- conteudo principal --}}
    @yield('content')

</body>

</html>
