<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Produk - {{ $produk->nama }}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/detail.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>

    <div class="detail-container">
        <div class="detail-card">
            <img src="{{ asset('images/produk/' . $produk->gambar) }}" alt="{{ $produk->nama }}">
            <div class="detail-info">
                <h2>{{ $produk->nama }}</h2>
                <p class="harga">Rp {{ number_format($produk->harga, 0, ',', '.') }}</p>
                <p class="deskripsi">Deskripsi produk bisa ditambahkan di sini...</p>
                <a href="{{ route('produk.static') }}" class="btn-back">← Kembali ke Produk</a>
            </div>
        </div>
    </div>

</body>
</html>
