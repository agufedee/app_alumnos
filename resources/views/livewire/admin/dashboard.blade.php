<div class="max-w-5xl mx-auto mt-15 px-4">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Lista de Usuarios</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @foreach ($users as $user)
            <a href="{{ route('admin.user-profile', $user) }}" class="block">
                <div class="bg-white rounded-2xl shadow-lg p-6 flex items-center gap-4 hover:shadow-xl transition">
                    <!-- Foto de perfil -->
                    <img src="{{ $user->photo_path ? asset('storage/' . $user->photo_path) : asset('images/default-avatar.png') }}"
                        class="w-20 h-20 rounded-full object-cover border border-gray-200" alt="Foto de {{ $user->name }}">

                    <!-- Información del usuario -->
                    <div class="flex-1">
                        <h3 class="text-lg font-semibold text-gray-800">{{ $user->name }}</h3>
                        <p class="text-sm text-gray-500 mb-1">{{ $user->email }}</p>

                        <div class="flex flex-wrap items-center gap-2">
                            @if ($user->phone)
                                <a href="https://wa.me/{{ env('WHATSAPP_PREFIX') }}{{ $user->phone }}" target="_blank"
                                    aria-label="Enviar mensaje por WhatsApp" class="text-green-600 text-xl hover:text-green-700">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            @endif
                            @foreach ($user->professionalUrls as $link)
                                @php
                                    $host = parse_url($link->url, PHP_URL_HOST);
                                @endphp

                                @if (Str::contains($host, 'linkedin'))
                                    <a href="{{ $link->url }}" target="_blank"
                                        class="text-blue-700 text-xl hover:text-blue-800">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                @elseif (Str::contains($host, 'github'))
                                    <a href="{{ $link->url }}" target="_blank"
                                        class="text-gray-800 text-xl hover:text-black">
                                        <i class="fab fa-github"></i>
                                    </a>
                                @endif
                            @endforeach

                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
