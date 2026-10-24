<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisata Budaya Bali</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body { margin: 0; background: #f5f8fb; font-family: Arial, sans-serif; color: #172033; }
        .topbar { display:flex; justify-content:space-between; align-items:center; padding:18px 5%; background:white; }
        .brand { font-size:22px; font-weight:bold; color:#26354d; text-decoration:none; }
        .navlinks { display:flex; gap:24px; }
        .navlinks a { color:#64748b; text-decoration:none; font-size:14px; }
        .navlinks a:hover { color:#7c3aed; }
        .container { max-width:1120px; margin:30px auto; padding:0 20px; }
        .content { background:white; padding:30px; border-radius:8px; }
        footer { text-align:center; color:#94a3b8; padding:25px; font-size:13px; }
        @media(max-width:600px) {
            .topbar { align-items:flex-start; gap:15px; flex-direction:column; }
            .navlinks { gap:14px; flex-wrap:wrap; }
            .container { padding:0 12px; }
            .content { padding:18px; }
        }
    </style>
</head>
<body>
    <header class="topbar">
        <a href="/" class="brand">Bali Culture</a>
        <nav class="navlinks">
            <a href="/">Dashboard</a>
            <a href="/jadwal">Promo</a>
            <a href="/about">Tentang</a>
            <a href="/contact">Kontak</a>
            <a href="/login">Login</a>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>

    <footer>
        &copy; {{ date('Y') }} Bali Culture — Sistem Informasi Wisata Budaya Bali
    </footer>
</body>
</html>