
<x-home-layout>
    <div class="bg-white rounded-xl shadow p-8">
        <p class="text-blue-700 font-semibold">Detail Pertunjukan</p>
        <h1 class="text-3xl font-bold mt-2">{{ $show['name'] }}</h1>

        <p class="mt-5 text-gray-600">{{ $show['description'] }}</p>

        <div class="mt-6 space-y-3">
            <p><strong>Lokasi:</strong> {{ $show['location'] }}</p>
            <p><strong>Jadwal:</strong> {{ $show['date'] }}</p>
            <p><strong>Waktu:</strong> {{ $show['time'] }}</p>
            <p><strong>Kuota contoh:</strong> {{ $show['quota'] }} tiket</p>
        </div>

        <div class="grid sm:grid-cols-2 gap-4 mt-7">
            <div class="bg-blue-50 rounded-lg p-4">
                <p>Harga wisatawan domestik</p>
                <p class="text-xl font-bold text-blue-800">
                    Rp{{ number_format($show['price_domestic'], 0, ',', '.') }}
                </p>
            </div>
            <div class="bg-yellow-50 rounded-lg p-4">
                <p>Harga wisatawan mancanegara</p>
                <p class="text-xl font-bold text-yellow-800">
                    Rp{{ number_format($show['price_foreign'], 0, ',', '.') }}
                </p>
            </div>
        </div>

        <a href="{{ route('booking', $show['id']) }}"
           class="inline-block mt-7 bg-blue-700 text-white px-6 py-3 rounded-lg">
            Pesan Tiket
        </a>

        <a href="/jadwal" class="inline-block mt-7 ml-3 text-blue-700">
            Kembali
        </a>
    </div>
</x-home-layout>
