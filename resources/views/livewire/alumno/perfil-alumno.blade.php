<div class="max-w-xl mx-auto bg-white p-6 mt-20 rounded shadow">
    <h2 class="text-xl font-bold mb-4">Mi Perfil</h2>

    <div class="mb-4">
        <img src="{{ asset('storage/' . auth()->user()->photo_path) }}" class="w-24 h-24 rounded-full object-cover">
    </div>

    <p><strong>Nombre:</strong> {{ auth()->user()->name }}</p>
    <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
    <p><strong>Teléfono:</strong> 
        <a href="https://wa.me/{{ env('WHATSAPP_PREFIX') }}{{ auth()->user()->phone }}" target="_blank" class="text-green-600 hover:underline">
            {{ auth()->user()->phone }}
        </a>
    </p>
    <p><strong>Enlace Profesional:</strong> 
    <ul class="list-disc list-inside space-y-2">
        @forelse(auth()->user()->professionalUrls as $link)
            <li>
                <a href="{{ $link->url }}" target="_blank" class="text-blue-600 hover:underline">
                    {{ $link->url }}
                </a>
            </li>
        @empty
            <li class="text-gray-500">No hay enlaces profesionales aún.</li>
        @endforelse
    </ul>

    {{-- @livewire('profile-link') --}}


    {{-- <form wire:submit.prevent="save" class="mt-6">
        <label class="block mb-2 font-medium">Enlace profesional (LinkedIn, GitHub, etc.):</label>
        <input type="text" wire:model.defer="professional_url" class="w-full border rounded px-3 py-2 mb-2">
        @error('professional_url') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Guardar
        </button>
    </form> --}}

    @if (session()->has('success'))
        <div class="mt-4 text-green-600 font-medium">
            {{ session('success') }}
        </div>
    @endif
</div>
