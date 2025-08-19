<div class="max-w-md mx-auto bg-white p-6 rounded shadow">
    <form wire:submit.prevent="register">
        <h2 class="text-lg font-semibold mb-4">Registro de Alumno</h2>

        <input type="text" wire:model="name" placeholder="Nombre" class="w-full mb-3 p-2 border rounded">
        @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

        <input type="email" wire:model="email" placeholder="Email" class="w-full mb-3 p-2 border rounded">
        @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

        <input type="password" wire:model="password" placeholder="Contraseña" class="w-full mb-3 p-2 border rounded">
        @error('password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

        <input type="text" wire:model="phone" placeholder="Teléfono" class="w-full mb-3 p-2 border rounded">

        <input type="text" wire:model="professional_url" placeholder="Enlace profesional" class="w-full mb-3 p-2 border rounded">

        <input type="file" wire:model="photo" class="w-full mb-3">
        @error('photo') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        <div class="mt-4 text-center">
            <span class="text-sm">¿Ya tenés una cuenta?</span>
            <a href="{{ route('iniciar') }}" class="text-blue-600 hover:underline font-medium">Iniciá sesión</a>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Registrarse</button>
    </form>
</div>
