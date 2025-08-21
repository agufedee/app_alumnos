<div>
    {{-- Listado de enlaces --}}
    <ul class="mb-1">
        @foreach ($urls as $url)
            <li class="mb-2 flex justify-between items-center bg-gray-100 px-3 py-2 rounded">
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
    <p class="mb-1"><strong>Agregar Enlace Profesional</strong></p>
    <form wire:submit.prevent="addUrl" class="flex gap-2">
        <input type="url" wire:model="url" placeholder="https://..."
            class="w-full rounded-xl border-gray-300 shadow-sm focus:border-blue-600 py-3 px-3 focus:ring focus:ring-blue-200" />
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-xl">Agregar</button>
    </form>


</div>
