<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'App de Alumnos')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind-->
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800">

    <nav class="bg-white shadow p-4 relative flex items-center">
        <h1 class="text-xl font-bold absolute left-1/2 transform -translate-x-1/2">📚 App de Alumnos</h1>
    
        @auth
            <form method="POST" action="/logout" class="ml-auto">
                @csrf
                <button class="text-red-500 hover:underline">Cerrar sesión</button>
            </form>
        @endauth
    </nav>

    <main class="p-6">
        {{ $slot ?? '' }}
    </main>

</body>
</html>
