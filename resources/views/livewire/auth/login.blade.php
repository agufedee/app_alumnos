<div class="min-h-screen flex items-center justify-center bg-gray-50 px-4">
    <div class="w-full max-w-md">
        <!-- Card -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
            
            <!-- Header -->
            <div class="text-center py-6 px-8 border-b border-gray-100">
                <h2 class="text-2xl font-bold text-gray-800">Iniciar Sesión</h2>
                <p class="text-sm text-gray-500 mt-1">Accedé con tu cuenta para continuar</p>
            </div>
            
            <!-- Formulario -->
            <form wire:submit.prevent="iniciar" class="p-8 space-y-6">
                
                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Correo Electrónico</label>
                    <input 
                        type="email" 
                        wire:model.defer="email" 
                        placeholder="tucorreo@ejemplo.com"
                        class="w-full rounded-xl border-gray-300 shadow-sm focus:border-blue-600 py-3 px-3 focus:ring focus:ring-blue-200"
                    >
                    @error('email')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Contraseña -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Contraseña</label>
                    <input 
                        type="password" 
                        wire:model.defer="password" 
                        placeholder="••••••••"
                        class="w-full rounded-xl border-gray-300 shadow-sm focus:border-blue-600 py-3 px-3 focus:ring focus:ring-blue-200"
                    >
                    @error('password')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Recordarme -->
                <div class="flex items-center justify-between text-sm">
                    <label class="flex items-center space-x-2 text-gray-600">
                        <input 
                            type="checkbox" 
                            wire:model="remember" 
                            class="rounded border-gray-300 text-blue-600 focus:ring-blue-500"
                        >
                        <span>Recordar sesión</span>
                    </label>
                    <a href="#" class="text-blue-600 hover:text-blue-500">¿Olvidaste tu contraseña?</a>
                </div>

                <!-- Botón -->
                <button 
                    type="submit" 
                    class="w-full py-2 px-4 rounded-xl bg-blue-600 text-white font-medium shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition"
                >
                    Ingresar
                </button>
            </form>

            <!-- Footer -->
            <div class="px-8 py-4 bg-gray-50 border-t border-gray-100 text-center">
                <p class="text-sm text-gray-600">
                    ¿No tenés cuenta? 
                    <a href="/registro" class="text-blue-600 font-medium hover:underline">Registrate aquí</a>
                </p>
            </div>
        </div>
    </div>
</div>
