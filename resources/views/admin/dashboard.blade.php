
<x-admin-layout>
    <h1 class="text-2xl font-bold mb-6">
        Dashboard Admin
    </h1>

    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-lg font-semibold">
            Sistem Informasi Pertunjukan Bali
        </h2>

        <p class="mt-2 text-gray-600">
            Selamat datang di halaman administrasi.
        </p>

        <a href="{{ route('admin.pertunjukan.index') }}"
           class="inline-block mt-5 bg-blue-700 text-white px-5 py-2 rounded">
            Kelola Pertunjukan
        </a>
    </div>
</x-admin-layout>
