<div class="min-h-screen flex items-center justify-center bg-gray-50 px-4">
    <div class="w-full max-w-lg">
        <!-- Card -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden p-8">
            
            <h2 class="text-2xl font-bold text-gray-800 text-center mb-2">Registro de Alumno</h2>
            <p class="text-sm text-gray-500 text-center mb-6">Completa tus datos para registrarte</p>

            <!-- Formulario -->
            <form wire:submit.prevent="register" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Nombre -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Apellido y Nombre</label>
                        <input 
                            type="text" 
                            wire:model="name" 
                            placeholder="Tu nombre completo"
                            class="w-full rounded-xl border-gray-300 shadow-sm focus:border-blue-600 py-3 px-3 focus:ring focus:ring-blue-200"
                        >
                        @error('name') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Correo Electrónico</label>
                        <input 
                            type="email" 
                            wire:model="email" 
                            placeholder="tucorreo@ejemplo.com"
                            class="w-full rounded-xl border-gray-300 shadow-sm focus:border-blue-600 py-3 px-3 focus:ring focus:ring-blue-200"
                        >
                        @error('email') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>

                    <!-- Contraseña -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Contraseña</label>
                        <input 
                            type="password" 
                            wire:model="password" 
                            placeholder="Mínimo 8 caracteres"
                            class="w-full rounded-xl border-gray-300 shadow-sm focus:border-blue-600 py-3 px-3 focus:ring focus:ring-blue-200"
                        >
                        @error('password') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>

                    <!-- Confirmar Contraseña -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Confirmar Contraseña</label>
                        <input 
                            type="password" 
                            wire:model="password_confirmation" 
                            placeholder="Repetí tu contraseña"
                            class="w-full rounded-xl border-gray-300 shadow-sm focus:border-blue-600 py-3 px-3 focus:ring focus:ring-blue-200"
                        >
                    </div>

                    <!-- Teléfono -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Teléfono (Opcional)</label>
                        <input 
                            type="text" 
                            wire:model="phone" 
                            placeholder="370 4234-5678"
                            class="w-full rounded-xl border-gray-300 shadow-sm focus:border-blue-600 py-3 px-3 focus:ring focus:ring-blue-200"
                        >
                    </div>

                    <!-- Enlace Profesional -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Enlace Profesional (Opcional)</label>
                        <input 
                            type="text" 
                            wire:model="professional_url" 
                            placeholder="https://example.com/in/tuperfil"
                            class="w-full rounded-xl border-gray-300 shadow-sm focus:border-blue-600 py-3 px-3 focus:ring focus:ring-blue-200"
                        >
                    </div>

                    <!-- Foto de Perfil -->
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Foto de Perfil</label>
                        <input 
                            type="file" 
                            wire:model="photo" 
                            class="w-full border-gray-300 rounded-xl py-3 px-3"
                            accept="image/*"
                        >
                        @error('photo') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>
                </div>

                <!-- Botón -->
                <button 
                    type="submit" 
                    class="w-full py-3 px-4 rounded-xl bg-blue-600 text-white font-medium shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition"
                >
                    Registrarse
                </button>

                <!-- Enlace a login -->
                <p class="text-center text-sm text-gray-600 mt-4">
                    ¿Ya tenés una cuenta? 
                    <a href="{{ route('iniciar') }}" class="text-blue-600 hover:text-blue-500 font-medium">Iniciá sesión</a>
                </p>
            </form>
        </div>
    </div>
</div>
