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
            <div class="brand">Miologi Clothing</div>
            <h2>Selamat Datang</h2>
            <p>Masuk untuk melanjutkan ke dashboard</p>
            <input type="text" id="username" placeholder="Username" />
            <input type="password" id="password" placeholder="Password" />
            <div class="error" id="error">Username atau password salah!</div>
            <button onclick="login()">Masuk</button>
            <p style="margin-top: 15px; font-size: 14px;">
                Belum punya akun?
                <a href="register.blade.php" style="color: #007bff; text-decoration: none;">Daftar di sini</a>
            </p>

        </div>
    </div>

    <script>
        function login() {
            const username = document.getElementById("username").value.trim();
            const password = document.getElementById("password").value.trim();

            const formData = new URLSearchParams();
            formData.append("username", username);
            formData.append("password", password);

            fetch("login_process.php", {
                method: "POST",
                body: formData
            })

                .then(response => response.json())
                .then(data => {
                    if (data.status === "success") {
                        localStorage.setItem("role", data.role);
                        window.location.href = "dashboard.blade.php";
                    } else {
                        document.getElementById("error").style.display = "block";
                        document.getElementById("error").innerText = data.message;
                    }
                })
                .catch(error => {
                    console.error("Error:", error);
                    alert("Gagal login.");
                });
        }
    </script>


</body>

</html>
