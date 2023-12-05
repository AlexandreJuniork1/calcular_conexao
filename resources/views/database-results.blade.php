<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Velocidade de conexão</title>
    <link rel="icon" href="{{ asset('database.ico') }}" type="image/x-icon"/>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200 h-screen flex items-center justify-center overflow-hidden">
    <div class="bg-opacity-50 bg-black p-8 rounded-lg text-white text-center relative max-w-md w-full">
        <h1 class="text-4xl font-bold mb-4">Resultado da Conexão</h1>
        <p class="text-lg text-white mb-4">Conexão selecionada: {{ $selectedDatabase }}</p>
        @if ($result)
            <p class="text-lg text-white">Conexão bem-sucedida!</p>
        @else
            <p class="text-lg text-red-500">Falha na conexão.</p>
        @endif
        <p class="text-lg text-white mt-4">Tempo decorrido: {{ number_format($elapsedTime, 2) }} segundos</p>
    </div>
</body>
</html>
