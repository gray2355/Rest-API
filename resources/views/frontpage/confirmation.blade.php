
<x-home-layout>
    <div class="max-w-2xl mx-auto bg-white rounded-xl shadow p-8">
        <div class="text-4xl mb-4">✅</div>
        <h1 class="text-3xl font-bold">Konfirmasi Pemesanan</h1>
        <p class="mt-3 text-gray-600">
            Data pemesanan berhasil divalidasi. Berikut ringkasannya.
        </p>

        <div class="mt-7 space-y-3 border-t border-b py-5">
            <p><strong>Nama:</strong> {{ $booking['name'] }}</p>
            <p><strong>Email:</strong> {{ $booking['email'] }}</p>
            <p><strong>Pertunjukan:</strong> {{ $show['name'] }}</p>
            <p>
                <strong>Kategori:</strong>
                {{ $booking['category'] === 'domestic' ? 'Domestik' : 'Mancanegara' }}
            </p>
            <p><strong>Jumlah tiket:</strong> {{ $booking['quantity'] }}</p>
            <p>
                <strong>Harga per tiket:</strong>
                Rp{{ number_format($price, 0, ',', '.') }}
            </p>
            <p class="text-xl text-blue-800">
                <strong>Total:</strong>
                Rp{{ number_format($total, 0, ',', '.') }}
            </p>
        </div>

        <p class="mt-5 text-sm text-orange-700">
            Ini masih simulasi. Data belum disimpan ke database dan tiket
            belum diterbitkan.
        </p>

        <a href="/jadwal"
           class="inline-block mt-6 bg-blue-700 text-white px-5 py-3 rounded-lg">
            Kembali ke Jadwal
        </a>
    </div>
</x-home-layout>
