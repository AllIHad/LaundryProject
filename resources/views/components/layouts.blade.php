<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IQ-LO Laundry</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header>
        <h1>IQ-LO LAUNDRY</h1>
        <nav>
            <a href="#" >Beranda</a>
            <a href="#">Katalog Harga</a>
            <a href="#">Kontak & Pemesanan</a>
            <a href="{{ route('login') }}">Sign in</a>
            <a href="{{ route('register') }}">Register</a>
        </nav>
    </header>

    {{ $slot }}

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section layanan-kami">
                <h4>Pelayanan Kami:</h4>
                <ul>
                    <li>> Laundry Express</li>
                    <li>> Laundry Member</li>
                    <li>> Laundry Kiloan</li>
                    <li>> Laundry Tas</li>
                    <li>> Laundry Sepatu</li>
                    <li>> Laundry Jas</li>
                    <li>> Laundry Bedcover dan sprey</li>
                    <li>> Laundry Handuk</li>
                </ul>
            </div>

            <div class="footer-section kontak">
                <div class="kontak-item">
                    <img src="img/map.png" alt="">
                    <p>Ruko Petak 3, Jl.Perkasa No 59 B, Kel, Jl. Bambu Kuning, Rejosari, Kec. Tenayan Raya, Kota Pekanbaru, Riau 28151</p>
                </div>
                <div class="kontak-item">
                    <img src="img/phone.png" alt="">
                    <p>+62 812-3456-7890 (Contoh)</p>
                </div>
                <div class="kontak-item">
                    <img src="img/email.png" alt="">
                    <p>info@laundryanda.com (Contoh)</p>
                </div>
            </div>
        </div>
    </footer>

    {{$java}}
</body>

</html>