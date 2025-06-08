<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontak - Mitologi</title>
  <link rel="stylesheet" href="{{ asset('assets/css/kontak.css') }}">
</head>
<body>
  <header class="contact-header">
  <img src="../assets/img/logo-mitologi.png" alt="Logo Mitologi" class="logo-header">
  <div class="header-content">
    <h1>Kontak</h1>
  </div>
</header>


  <div class="contact-container">
    <div class="contact-left">
      <h2>Mitologi Clothing<br>Store</h2>
      <p>Jl. Lama blok pasar senggol<br>
         Desa Leuwigede Kec. Widasari<br>
         Kab. Indramayu, Jawa Barat<br>
         Indonesia.</p>

      <h3><em>Hubungi Kami</em></h3>
      <p>
        Nama Perusahaan: MITOLOGI CLOTHING (MICLO)<br>
        Alamat: Jl. By Pass Widasari Lama Blok Pasar Senggol RT 012/RW 006 Desa Leuwigede, Kec. Widasari, Kab. Indramayu<br>
        Bidang Perusahaan: Vendor / Broker / Brand<br>
        NPWP: 99.149.537.5-437.000<br>
        Nomor Telepon Perusahaan: (+62) 831-2217-0902<br>
        E-mail Perusahaan: mitologiclothing@gmail.com<br>
        bit.ly: www.bit.ly/ordermiclo<br>
        NMID: ID1024309638855
      </p>
    </div>

    <div class="contact-right">
      <img src="{{ asset('assets/img/tshirt.png') }}" alt="T-shirt">
    </div>
  </div>

  <div class="back-wrapper">
        <a href="{{ route('dashboard') }}" class="btn-back">← Kembali ke Dashboard</a>
    </div>

  <footer class="footer-thanks">
    <h2>Terima Kasih</h2>
  </footer>
</body>
</html>
