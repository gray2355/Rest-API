
<x-home-layout>
    <div class="max-w-2xl mx-auto bg-white rounded-xl shadow p-8">
        <h1 class="text-3xl font-bold">Pemesanan Tiket</h1>
        <p class="text-gray-600 mt-2">{{ $show['name'] }}</p>

        <form action="{{ route('booking.store', $show['id']) }}"
              method="POST" class="mt-7 space-y-5">
            @csrf

            <div>
                <label for="name" class="block font-semibold mb-2">
                    Nama pemesan
                </label>
                <input id="name" name="name" type="text"
                       value="{{ old('name') }}" required
                       class="w-full border border-gray-300 rounded-lg p-3">
                @error('name')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="email" class="block font-semibold mb-2">
                    Email
                </label>
                <input id="email" name="email" type="email"
                       value="{{ old('email') }}" required
                       class="w-full border border-gray-300 rounded-lg p-3">
                @error('email')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="category" class="block font-semibold mb-2">
                    Kategori wisatawan
                </label>
                <select id="category" name="category" required
                        class="w-full border border-gray-300 rounded-lg p-3">
                    <option value="domestic"
                        {{ old('category') === 'domestic' ? 'selected' : '' }}>
                        Domestik
                    </option>
                    <option value="foreign"
                        {{ old('category') === 'foreign' ? 'selected' : '' }}>
                        Mancanegara
                    </option>
                </select>
                @error('category')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="quantity" class="block font-semibold mb-2">
                    Jumlah tiket (maksimal 10)
                </label>
                <input id="quantity" name="quantity" type="number"
                       min="1" max="10" value="{{ old('quantity', 1) }}"
                       required
                       class="w-full border border-gray-300 rounded-lg p-3">
                @error('quantity')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="bg-blue-50 rounded-lg p-4">
                <p class="text-sm text-gray-600">Harga per tiket domestik</p>
                <p class="font-bold">
                    Rp{{ number_format($show['price_domestic'], 0, ',', '.') }}
                </p>
                <p class="text-sm text-gray-600 mt-2">Harga per tiket mancanegara</p>
                <p class="font-bold">
                    Rp{{ number_format($show['price_foreign'], 0, ',', '.') }}
                </p>
            </div>

            <button type="submit"
                    class="w-full bg-blue-700 text-white font-bold p-3 rounded-lg hover:bg-blue-800">
                Lanjutkan Pemesanan
            </button>
        </form>
    </div>
</x-home-layout>
