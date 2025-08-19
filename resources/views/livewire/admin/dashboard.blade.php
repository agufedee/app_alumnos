<div class="max-w-4xl mx-auto mt-10">
    <h2 class="text-2xl font-bold mb-6">Listado de Usuarios</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @foreach($users as $user)
            <div class="bg-white p-4 rounded shadow flex items-center gap-4">
                <img src="{{ asset('storage/' . $user->photo_path) }}" class="w-16 h-16 rounded-full object-cover" alt="Foto">
                <div>
                    <h3 class="text-lg font-semibold">{{ $user->name }}</h3>
                    <p class="text-sm text-gray-600">{{ $user->email }}</p>
                    @if($user->phone)
                        <a href="https://wa.me/{{ env('WHATSAPP_PREFIX') }}{{ $user->phone }}" target="_blank" class="text-green-600 text-sm hover:underline">
                            WhatsApp
                        </a>
                    @endif
                    @if($user->professional_url)
                        <a href="{{ $user->professional_url }}" target="_blank" class="text-blue-600 text-sm hover:underline ml-2">
                            Perfil Profesional
                        </a>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>
