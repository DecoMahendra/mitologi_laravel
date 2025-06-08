<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Mitologi Clothing</title>
    <link rel="stylesheet" href="{{ asset('assets/css/portofolio.css') }}">
</head>

<body>

    <header>
        <div class="logo">
            <img src="../assets/img/logo-mitologi.png" alt="Logo Mitologi" class="logo-portofolio">
        </div>
        <h1 class="page-title">Portofolio</h1>
    </header>

    <section class="portfolio-top">
        <div class="top-gallery">
            <img src="../assets/img/desain1.jpg" alt="Desain 1">
            <img src="../assets/img/desain2.jpg" alt="Desain 2">
            <img src="../assets/img/desain3.jpg" alt="Desain 3">
            <img src="../assets/img/desain4.jpg" alt="Desain 4">
            <img src="../assets/img/desain5.jpg" alt="Desain 5">
        </div>
    </section>

    <section class="headline">
        <h2>PORTOFOLIO <br> MITOLOGI CLOTHING</h2>
        <p>OFFICIAL MERCHANDISE</p>
    </section>

    <section class="portfolio-bottom">
        <div class="bottom-gallery">
            <img src="../assets/img/desain6.jpg" alt="Desain 6">
            <img src="../assets/img/desain7.jpg" alt="Desain 7">
            <img src="../assets/img/desain8.jpg" alt="Desain 8">
            <img src="../assets/img/desain9.jpg" alt="Desain 9">
        </div>
    </section>

    <div class="back-wrapper">
        <a href="{{ route('dashboard') }}" class="btn-back">← Kembali ke Dashboard</a>
    </div>

</body>

</html>
