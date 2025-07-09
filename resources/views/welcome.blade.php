<x-layouts>
    <div class="contaner">
        <img src="img/hero.jpg" alt="hero image" class="hero-img">
    </div>
    <section class="hero">
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

    <x-slot:java>
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
    </x-slot:java>

</x-layouts>