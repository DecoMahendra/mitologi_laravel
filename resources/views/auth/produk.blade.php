<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Produk - Mitologi Clothing</title>
    <link rel="stylesheet" href="{{ asset('assets/css/produk.css') }}">
</head>
<body>

    <div class="produk-header">
        <div class="logo">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo">
        </div>
        <h1>Produk Kami</h1>
    </div>

    <div class="produk-grid">
        @foreach ($produks as $produk)
            <div class="produk-card">
                <img src="{{ asset('assets/img/' . $produk->gambar) }}" alt="{{ $produk->nama }}">
                <p class="nama">{{ $produk->nama }}</p>
                <a href="{{ route('produk.show', $produk->id) }}" class="btn-detail">Lihat Detail</a>
            </div>
        @endforeach
    </div>

    <div class="back-wrapper">
        <a href="{{ route('dashboard') }}" class="btn-back">← Kembali ke Dashboard</a>
    </div>

</body>
</html>
