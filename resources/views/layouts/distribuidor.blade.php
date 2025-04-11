<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje recibido</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans text-gray-900">
    <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-md mt-8">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">Información del Distribuidor</h1>

        <p class="text-base text-gray-700 mb-4">
            <strong class="text-red-600 font-semibold">Nombre:</strong> {{ $messageContact['nombre'] }}<br>
            <strong class="text-red-600 font-semibold">Empresa:</strong> {{ $messageContact['empresa'] }}<br>
            <strong class="text-red-600 font-semibold">Correo Electrónico:</strong> {{ $messageContact['correo'] }} <br>
            <strong class="text-red-600 font-semibold">Número de contacto:</strong> {{ $messageContact['telefono'] }} <br>
        </p>

        <h3 class="text-xl font-semibold text-gray-800 mt-4 mb-2">Información Geográfica</h3>
        <p class="text-base text-gray-700 mb-4">
            <strong class="text-red-600 font-semibold">Departamento:</strong> {{ $messageContact['depto'] }} <br>
            <strong class="text-red-600 font-semibold">Ciudad:</strong> {{ $messageContact['ciudad'] }} <br>
        </p>

        <h3 class="text-xl font-semibold text-gray-800 mt-4 mb-2">Consulta de Interés</h3>
        <p class="text-base text-gray-700 mb-4">
            <strong class="text-red-600 font-semibold">Productos Actuales:</strong> {{ $messageContact['mensaje'] }}
        </p>

        <small class="block text-center text-gray-500 mt-8">Solaris Hn</small>
    </div>
</body>

</html>
