
<x-home-layout>
    <h1 class="text-3xl font-bold">Jadwal Pertunjukan</h1>
    <p class="text-gray-600 mt-2 mb-7">
        Pilih pertunjukan budaya yang ingin Anda kunjungi.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($shows as $show)
            <article class="bg-white rounded-xl shadow p-6">
                <h2 class="text-xl font-bold">{{ $show['name'] }}</h2>
                <p class="mt-3">📍 {{ $show['location'] }}</p>
                <p class="mt-2">📅 {{ $show['date'] }}</p>
                <p class="mt-2">🕒 {{ $show['time'] }}</p>
                <p class="mt-3 text-blue-700 font-bold">
                    Rp{{ number_format($show['price_domestic'], 0, ',', '.') }}
                    <span class="text-gray-500 text-sm font-normal">/ domestik</span>
                </p>
                <a href="{{ route('detail', $show['id']) }}"
                   class="block text-center mt-5 bg-blue-700 text-white py-2 rounded-lg">
                    Lihat Detail
                </a>
            </article>
        @endforeach
    </div>
</x-home-layout>
