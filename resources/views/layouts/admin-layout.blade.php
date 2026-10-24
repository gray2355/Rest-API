
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin - Sistem Informasi Pertunjukan Bali</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="bg-gray-100">
    <div class="min-h-screen flex">

        <aside class="w-64 bg-blue-900 text-white p-6">
            <h1 class="text-2xl font-bold mb-8">Admin Bali</h1>

            <nav class="space-y-3">
                <a href="{{ route('admin.dashboard') }}"
                   class="block rounded px-4 py-3 hover:bg-blue-700">
                    Dashboard
                </a>

                <a href="{{ route('admin.pertunjukan.index') }}"
                   class="block rounded px-4 py-3 hover:bg-blue-700">
                    Data Pertunjukan
                </a>

                <a href="{{ route('home') }}"
                   class="block rounded px-4 py-3 hover:bg-blue-700">
                    Halaman Pengunjung
                </a>

                <form method="POST" action="{{ route('logout') }}" class="mt-6">
                    @csrf
                    <button type="submit"
                        class="w-full text-left rounded px-4 py-3 bg-red-600 hover:bg-red-700">
                        Logout
                    </button>
                </form>
                
            </nav>
        </aside>

        <div class="flex-1">
            <header class="bg-white shadow p-5">
                <h2 class="text-xl font-semibold">Panel Administrasi</h2>
            </header>

            <main class="p-6">
                {{ $slot }}
            </main>
        </div>

    </div>
</body>
</html>
