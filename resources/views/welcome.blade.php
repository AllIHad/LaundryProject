<x-layouts>
    <main>
        <div class="laundry">
            <img src="img/hero.jpg" alt="hero image" class="hero-img">
        </div>
        <section class="section-title">
            <h2>IQ-LO Laundry Menyelesaikan Segala Kebutuhan Cucianmu</h2>
            <p>Kami adalah layanan laundry profesional yang siap memenuhi kebutuhan kebersihan pakaian anda dengan cepat, mudah, dan terpercaya.</p>
        </section>

        <section class="services">
            <div class="service-card">
                <img src="img/1.png" alt="Laundry Express" class="services-img">
                <h3>Laundry Express</h3>
                <p>Layanan cepat dengan hasil bersih dalam waktu singkat, cocok untuk kebutuhan mendesak.</p>
            </div>
            <div class="service-card">
                <img src="img/2.png" alt="Laundry Biasa" class="services-img">
                <h3>Laundry Biasa</h3>
                <p>Layanan dengan waktu standar, menjaga kualitas cucian Anda dengan proses yang teliti.</p>
            </div>
        </section>

        <section class="services">
            <div class="service-card">
                <img src="img/3.png" alt="Laundry Member" class="services-img">
                <h3>Laundry Member</h3>
                <p>Layanan khusus bagi anggota dengan penawaran harga lebih hemat dan praktis.</p>
            </div>
        </section>

        <button class="cta-button" onclick="alert('Terima kasih telah mendaftar sebagai member IQ-LO Laundry!')">Daftar Sekarang</button>
    </main>

    <x-slot:footer>
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
    </x-slot:footer>
    <x-slot:javascript>
        <script>
            document.getElementById('signIn').addEventListener('click', function() {
                alert('Halaman Sign In masih dalam pengembangan.');
            });
            document.getElementById('register').addEventListener('click', function() {
                alert('Silakan daftar melalui admin IQ-LO Laundry.');
            });

            function myFunction() {
                var x = document.getElementById("myLinks");
                if (x.style.display === "block") {
                    x.style.display = "none";
                } else {
                    x.style.display = "block";
                }
            }
        </script>
    </x-slot:javascript>

</x-layouts>