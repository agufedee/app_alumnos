<div class="max-w-xl mx-auto bg-white p-6 mt-20 rounded shadow">
    <a href="/dashboard"
        class="fas fa-arrow-left py-2 px-4 rounded-xl bg-blue-600 text-white font-medium shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition">
    </a>

    <h2 class="text-center text-xl font-bold mb-4">Perfil del alumno</h2>

    <div class="mb-4">
        <img src="{{ asset('storage/' . $user->photo_path) }}"
            class="mx-auto w-24 h-24 rounded-full object-cover">
    </div>

    <div>
        <h2 class="text-2xl font-bold text-gray-800">{{ $user->name }}</h2>
        <p class="text-gray-600">{{ $user->email }}</p>
        @if ($user->phone)
        <a href="https://wa.me/{{ env('WHATSAPP_PREFIX') }}{{ $user->phone }}" target="_blank"
            aria-label="Enviar mensaje por WhatsApp" class="text-green-600 text-xl hover:text-green-700">
            <i class="fab fa-whatsapp"></i>
        </a>
        @endif
    </div>

    <div class="mt-6 flex gap-4">
        @foreach ($user->professionalUrls as $link)
        @php $host = parse_url($link->url, PHP_URL_HOST); @endphp

        @if (Str::contains($host, 'linkedin'))
        <a href="{{ $link->url }}" target="_blank" class="text-blue-700 text-xl hover:text-blue-800">
            <i class="fab fa-linkedin"></i>
        </a>
        @elseif (Str::contains($host, 'github'))
        <a href="{{ $link->url }}" target="_blank" class="text-gray-800 text-xl hover:text-black">
            <i class="fab fa-github"></i>
        </a>
        @endif
        @endforeach
    </div>
</div>