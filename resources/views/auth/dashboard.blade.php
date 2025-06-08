<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mitologi Clothing</title>
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script>
    function confirmLogout(event) {
        if (!confirm("Yakin ingin logout?")) {
            event.preventDefault();
        }
    }
</script>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">Mitologi <span>Clothing</span></div>
        <ul class="nav-links">
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('produk.static') }}">Produk</a></li>
            <li><a href="{{ route('portofolio') }}">Portofolio</a></li>
            <li><a href="{{ route('caraorder') }}">Cara Order</a></li>
            <li><a href="{{ route('faq') }}">FAQ</a></li>
            <li><a href="{{ route('kontak') }}">Kontak</a></li>
        </ul>
        <div class="user-box">
            <a href="{{ route('profile.show') }}" class="profile-link">👤 {{ Auth::user()->name }}</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="logout-btn" onclick="confirmLogout(event)">Logout</button>
            </form>
        </div>

    </nav>


    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-text">
            <h1><span>TEMUKAN</span> PAKAIAN<br> YANG COCOK DENGANMU</h1>
            <p>Desain modern, bahan berkualitas, dan harga terjangkau.<br>Pas untuk individu maupun komunitas.</p>
            <a href="{{ route('produk.static') }}" class="order-btn">Order Sekarang</a>

            <div class="features">
                <div>✔ Konveksi Terpercaya</div>
                <div>✔ Bahan Premium</div>
                <div>✔ Harga Terjangkau</div>
            </div>
        </div>

        <div class="hero-image">
            <img src="{{ asset('assets/img/tshirt.png') }}" alt="T-shirt">
        </div>
    </section>

    <!-- Category Bar -->
    <section class="categories">
        <li><a href="{{ route('produk.static') }}">Kaos</a></li>
        <li><a href="{{ route('produk.static') }}">Jaket</a></li>
        <li><a href="{{ route('produk.static') }}">Hoodie</a></li>
        <li><a href="{{ route('produk.static') }}">Kemeja</a></li>
        <li><a href="{{ route('produk.static') }}">Jersey</a></li>
        <li><a href="{{ route('produk.static') }}">Rompi</a></li>
    </section>

</body>
</html>
