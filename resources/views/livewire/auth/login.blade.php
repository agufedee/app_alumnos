<div class="max-w-md mx-auto mt-10">
    <form wire:submit.prevent="iniciar" class="bg-white p-6 rounded shadow">
        <h2 class="text-xl font-bold mb-4">Iniciar sesión</h2>

        <div class="mb-4">
            <label class="block text-sm font-medium">Email</label>
            <input type="email" wire:model.defer="email" class="w-full border rounded px-3 py-2">
            @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium">Contraseña</label>
            <input type="password" wire:model.defer="password" class="w-full border rounded px-3 py-2">
            @error('password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4 flex items-center">
            <input type="checkbox" wire:model="remember" class="mr-2">
            <label>Recordarme</label>
        </div>

        <div class="mt-4 text-center">
            <span class="text-sm">¿No tenés cuenta?</span>
            <a href="/registro" class="text-blue-600 hover:underline font-medium">Registrate</a>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Ingresar
        </button>
    </form>
</div>
