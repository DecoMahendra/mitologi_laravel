<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - Mitologi Clothing</title>
    <link rel="stylesheet" href="{{ asset('assets/css/register.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>

    <!-- Register Section -->
    <section class="register-section">
        <div class="register-box">
            <h2>Daftar Akun</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <input type="text" name="name" placeholder="Nama Lengkap" required>
                <input type="text" name="username" placeholder="Username" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required>
                <button type="submit">Daftar</button>
            </form>

            @if (session('registered'))
                <script>
                    setTimeout(() => {
                        if (confirm("Registrasi akun sudah selesai. Apakah lanjut ke login?")) {
                            window.location.href = "{{ route('login') }}";
                        }
                    }, 300);
                </script>
            @endif

            <p>Sudah punya akun? <a href="{{ route('login') }}">Masuk di sini</a></p>
        </div>
    </section>

</body>

</html>
