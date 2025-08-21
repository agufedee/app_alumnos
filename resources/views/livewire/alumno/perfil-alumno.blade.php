<div class="max-w-xl mx-auto bg-white p-6 mt-20 rounded shadow">
    <h2 class="text-center text-xl font-bold mb-4">Mi Perfil</h2>

    <div class="mb-4">
        <img src="{{ asset('storage/' . auth()->user()->photo_path) }}"
            class="mx-auto w-24 h-24 rounded-full object-cover">
    </div>

    <p class="mb-1"><strong>Nombre:</strong> {{ auth()->user()->name }}</p>
    <p class="mb-1"><strong>Email:</strong> {{ auth()->user()->email }}</p>
    <p class="mb-1"><strong>Teléfono:</strong>
        <a href="https://wa.me/{{ env('WHATSAPP_PREFIX') }}{{ auth()->user()->phone }}" target="_blank"
            class="text-green-600 hover:underline">
            {{ auth()->user()->phone }}
        </a>
    </p>
    <p class="mb-1"><strong>Enlace Profesional:</strong></p>

    @livewire('professional-urls')


    @if (session()->has('success'))
        <div class="mt-4 text-green-600 font-medium">
            {{ session('success') }}
        </div>
    @endif
</div>
