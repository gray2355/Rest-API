
<x-admin-layout>
    <h1 class="text-2xl font-bold mb-6">Tambah Pertunjukan</h1>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.pertunjukan.store') }}" method="POST"
          class="bg-white p-6 rounded-lg shadow space-y-4">
        @csrf

        <div>
            <label class="block mb-1">Nama Pertunjukan</label>
            <input type="text" name="name" value="{{ old('name') }}"
                   class="w-full border rounded p-2" required>
        </div>

        <div>
            <label class="block mb-1">Lokasi</label>
            <input type="text" name="location" value="{{ old('location') }}"
                   class="w-full border rounded p-2" required>
        </div>

        <div>
            <label class="block mb-1">Tanggal atau Jadwal</label>
            <input type="text" name="date" value="{{ old('date') }}"
                   placeholder="Contoh: Setiap Hari"
                   class="w-full border rounded p-2" required>
        </div>

        <div>
            <label class="block mb-1">Waktu</label>
            <input type="text" name="time" value="{{ old('time') }}"
                   placeholder="Contoh: 18.00 WITA"
                   class="w-full border rounded p-2" required>
        </div>

        <div>
            <label class="block mb-1">Harga Domestik (Rp)</label>
            <input type="number" name="price_domestic"
                   value="{{ old('price_domestic') }}"
                   min="0" class="w-full border rounded p-2" required>
        </div>

        <div>
            <label class="block mb-1">Harga Wisatawan Asing (Rp)</label>
            <input type="number" name="price_foreign"
                   value="{{ old('price_foreign') }}"
                   min="0" class="w-full border rounded p-2" required>
        </div>

        <div>
            <label class="block mb-1">Kuota</label>
            <input type="number" name="quota" value="{{ old('quota') }}"
                   min="0" class="w-full border rounded p-2" required>
        </div>

        <div>
            <label class="block mb-1">Deskripsi</label>
            <textarea name="description" rows="4"
                      class="w-full border rounded p-2"
                      required>{{ old('description') }}</textarea>
        </div>

        <div>
            <label class="block mb-1">Nama file gambar (opsional)</label>
            <input type="text" name="image" value="{{ old('image') }}"
                   placeholder="Contoh: kecak.jpg"
                   class="w-full border rounded p-2">
        </div>

        <div class="flex gap-3">
            <button type="submit"
                    class="bg-blue-700 text-white px-5 py-2 rounded">
                Simpan Pertunjukan
            </button>

            <a href="{{ route('admin.pertunjukan.index') }}"
               class="bg-gray-200 px-5 py-2 rounded">
                Batal
            </a>
        </div>
    </form>
</x-admin-layout>
