<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - Mitologi</title>
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard_admin.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <nav class="admin-navbar">
        <div class="logo">Mitologi Clothing Store</div>
        <ul class="nav-links">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Produk</a></li>
            <li><a href="#">Cara Order</a></li>
            <li><a href="#">Portofolio</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Kontak</a></li>
        </ul>
        <div class="tagline">Website Konveksi Terpercaya dan Berkualitas</div>
    </nav>

    <!-- Hero Section -->
    <section class="admin-hero">
        <div class="text">
            <h1>TEMUKAN PAKAIAN<br>YANG COCOK<br><span>DENGAN KEBUTUHANMU</span></h1>
            <p>Jelajahi berbagai macam produk kami yang dibuat dengan cermat, dirancang untuk menciptakan individualitas. Anda akan menemukan selera gaya Anda.</p>
            <a href="{{ route('produk.index') }}" class="btn-order">Order Now</a>
        </div>
        <div class="image">
            <img src="{{ asset('assets/img/hero-kaos.png') }}" alt="Kaos Mitologi">
        </div>
    </section>

    <!-- Feature Section -->
    <section class="features">
        <div>✔ Konveksi Terpercaya</div>
        <div>✔ Bahan Berkualitas</div>
        <div>✔ Murah Dan Terpercaya</div>
    </section>

    <!-- Kategori -->
    <section class="kategori-bar">
        <a href="#">Kaos</a>
        <a href="#">Jaket</a>
        <a href="#">Hoodie</a>
        <a href="#">Kemeja</a>
        <a href="#">Jersey</a>
        <a href="#">Rompi</a>
    </section>

    <!-- Admin Panel -->
    <section class="admin-panel">
        <h2>Kelola Produk</h2>
        <a href="{{ route('produk.create') }}" class="btn-admin">+ Tambah Produk</a>
        <a href="{{ route('produk.index') }}" class="btn-admin">📋 Lihat Semua Produk</a>
    </section>

</body>
</html>
