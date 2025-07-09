<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet" href="css/loginStyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="background-overlay"></div>
    <div class="login-container">
        <div class="login-card">
            <h2>Form Login</h2>

            <form action="#" method="POST" class="login-form">
                <div class="input-group">
                    <input type="email" id="email" name="email" placeholder="Masukkan Email" required>
                </div>
                <div class="input-group">
                    <input type="password" id="password" name="password" placeholder="Masukkan Password" required>
                </div>
                <a href="#" class="forgot-password">Lupa Password?</a>

                <button type="submit" class="btn-login">Login</button>
            </form>

            <p class="register-link">Belum punya akun? <a href="{{ route('register') }}">Daftar sekarang</a></p>

        </div>
    </div>
</body>

</html>