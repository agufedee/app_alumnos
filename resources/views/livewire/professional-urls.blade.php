<div class="space-y-4">
    {{-- Listado de enlaces --}}
    <ul class="space-y-2">
        @foreach ($urls as $url)
            <li class="flex justify-between items-center bg-gray-100 px-3 py-2 rounded">
                <a href="{{ $url->url }}" target="_blank" class="text-blue-600 underline">
                    {{ $url->url }}
                </a>
                <button wire:click="deleteUrl({{ $url->id }})" class="text-red-500 hover:underline">
                    Eliminar
                </button>
            </li>
        @endforeach
    </ul>
    {{-- Formulario para agregar enlace --}}
    <strong>Agregar Enlace Profesional</strong>
    <form wire:submit.prevent="addUrl" class="flex gap-2">
        <input type="url" wire:model="url" placeholder="https://..." class="border rounded px-3 py-2 w-full" />
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Agregar</button>
    </form>

    
</div>
