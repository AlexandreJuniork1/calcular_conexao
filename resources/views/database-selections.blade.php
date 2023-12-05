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
        <h1 class="text-4xl font-bold mb-4">Qual conexão deseja visualizar?</h1>
        <form action="{{ route('connect.database') }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="database" class="text-lg text-white">Selecione o banco de dados:</label>
                <select id="database" name="database" class="p-2 bg-gray-800 text-white w-full">
                    @foreach ($databaseConnections as $connectionName => $connection)
                        <option value="{{ $connectionName }}">{{ $connectionName }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Conectar
            </button>
        </form>
    </div>
</body>
</html>
