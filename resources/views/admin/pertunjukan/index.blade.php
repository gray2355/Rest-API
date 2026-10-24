
<x-admin-layout>
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold">Data Pertunjukan Bali</h1>

        <a href="{{ route('admin.pertunjukan.create') }}"
           class="bg-blue-700 text-white px-4 py-2 rounded">
            + Tambah Pertunjukan
        </a>
    </div>

    @if (session('success'))
        <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="bg-red-100 text-red-800 p-3 rounded mb-4">
            Periksa kembali data yang dimasukkan.
        </div>
    @endif

    <div class="bg-white rounded-lg shadow overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead class="bg-blue-900 text-white">
                <tr>
                    <th class="p-3">No.</th>
                    <th class="p-3">Nama Pertunjukan</th>
                    <th class="p-3">Lokasi</th>
                    <th class="p-3">Tanggal</th>
                    <th class="p-3">Harga Domestik</th>
                    <th class="p-3">Kuota</th>
                    <th class="p-3">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pertunjukans as $pertunjukan)
                    <tr class="border-b">
                        <td class="p-3">{{ $loop->iteration }}</td>
                        <td class="p-3">{{ $pertunjukan->name }}</td>
                        <td class="p-3">{{ $pertunjukan->location }}</td>
                        <td class="p-3">{{ $pertunjukan->date }}</td>
                        <td class="p-3">
                            Rp{{ number_format($pertunjukan->price_domestic, 0, ',', '.') }}
                        </td>
                        <td class="p-3">{{ $pertunjukan->quota }}</td>
                        <td class="p-3 whitespace-nowrap">
                            <a href="{{ route('admin.pertunjukan.edit', $pertunjukan->id) }}"
                               class="text-blue-700 mr-2">
                                Edit
                            </a>

                            <form action="{{ route('admin.pertunjukan.destroy', $pertunjukan->id) }}"
                                  method="POST"
                                  class="inline"
                                  onsubmit="return confirm('Yakin ingin menghapus pertunjukan ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="p-5 text-center">
                            Belum ada data pertunjukan.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <a href="{{ route('admin.dashboard') }}"
       class="inline-block mt-5 text-blue-700">
        ← Kembali ke Dashboard
    </a>
</x-admin-layout>
