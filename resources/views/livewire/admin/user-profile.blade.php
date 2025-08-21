<div class="max-w-3xl mx-auto mt-10 px-4">
    <div class="bg-white rounded-xl shadow p-6">
        <div class="flex items-center gap-6">
            <img src="{{ $user->photo_path ? asset('storage/' . $user->photo_path) : asset('images/default-avatar.png') }}"
                class="w-24 h-24 rounded-full object-cover border border-gray-300" alt="Foto de {{ $user->name }}">

            <div>
                <h2 class="text-2xl font-bold text-gray-800">{{ $user->name }}</h2>
                <p class="text-gray-600">{{ $user->email }}</p>
                @if ($user->phone)
                    <p class="text-gray-600">📞 {{ $user->phone }}</p>
                @endif
            </div>
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
</div>
