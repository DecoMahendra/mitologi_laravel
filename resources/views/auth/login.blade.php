<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <title>Login - Mitologi Clothing</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" />
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
</head>

<body>

    <div class="login-container">
        <div class="login-image"></div>
        <div class="login-form">
            <div class="brand">Mitologi Clothing</div>
            <h2>Selamat Datang</h2>
            <p>Masuk untuk melanjutkan ke dashboard</p>
            @if(session('status'))
                <div style="color: green;">{{ session('status') }}</div>
            @endif

            @if ($errors->has('email'))
                <div style="color: red;">{{ $errors->first('email') }}</div>
            @endif

            @if ($errors->has('password'))
                <div style="color: red;">{{ $errors->first('password') }}</div>
            @endif


            <form method="POST" action="{{ route('login') }}">
                @csrf

                <input type="email" name="email" placeholder="Email" />
                <input type="password" name="password" placeholder="Password" required />

                @if ($errors->any())
                    <div class="error" style="color:red;">{{ $errors->first() }}</div>
                @endif

                <button type="submit">Masuk</button>
            </form>

            <p style="margin-top: 15px; font-size: 14px;">
                Belum punya akun?
                <a href="{{ route('register') }}">Daftar di sini</a>
            </p>

        </div>
    </div>
