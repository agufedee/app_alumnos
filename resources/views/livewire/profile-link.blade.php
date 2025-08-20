<div class="space-y-4">
    <form wire:submit.prevent="save" class="flex items-center space-x-2">
        <input type="url" wire:model.defer="url" placeholder="https://miportfolio.com"
            class="border rounded px-3 py-2 w-full" />
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Agregar
        </button>
    </form>

    <ul class="list-disc list-inside space-y-2">
        @forelse($links as $link)
            <li>
                <a href="{{ $link->url }}" target="_blank" class="text-blue-600 hover:underline">
                    {{ $link->url }}
                </a>
            </li>
        @empty
            <li class="text-gray-500">No hay enlaces aún.</li>
        @endforelse
    </ul>
</div>
