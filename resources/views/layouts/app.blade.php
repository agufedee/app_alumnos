<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'App de Alumnos')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind -->
    @vite('resources/css/app.css')
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-gray-50 text-gray-800 min-h-screen flex flex-col">

    <!-- Navbar -->
    <nav class="bg-white shadow-md fixed top-0 inset-x-0 z-50">
        <div class="max-w-6xl mx-auto flex justify-between items-center px-6 py-4">
            <!-- Logo -->
            <div class="flex items-center space-x-3">
                <i class="fas fa-graduation-cap text-blue-600 text-2xl"></i>
                <span class="font-bold text-gray-800 text-xl">App-Alumnos</span>
            </div>

            <!-- Usuario / Logout -->
            @auth
                <div class="flex items-center space-x-4">
                    <!-- Nombre -->
                    <span class="text-gray-700 hidden md:inline">Hola, {{ auth()->user()->name }}</span>

                    <!-- Foto de perfil -->
                    <img src="{{ auth()->user()->photo_path 
                        ? asset('storage/' . auth()->user()->photo_path) 
                        : 'https://ui-avatars.com/api/?name=' . urlencode(auth()->user()->name) . '&background=2563eb&color=fff' }}" 
                        alt="Foto de perfil" 
                        class="w-10 h-10 rounded-full border border-gray-200 object-cover">

                    <!-- Logout -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" 
                                class="flex items-center space-x-1 text-gray-700 hover:text-blue-600 transition">
                            <i class="fas fa-sign-out-alt"></i>
                            <span class="hidden md:inline">Cerrar sesión</span>
                        </button>
                    </form>
                </div>
            @endauth
        </div>
    </nav>

    <!-- Contenido principal -->
    <main class="flex-1 container mx-auto p-6">
        {{ $slot ?? '' }}
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 py-4 mt-auto">
        <div class="container mx-auto text-center">
            <p class="text-gray-500 text-sm">© {{ date('Y') }} App de Alumnos - Todos los derechos reservados</p>
        </div>
    </footer>

</body>

</html>
