<x-layouts>

    <main class="contact-main">
        <div class="order-form-container">
            <h2>DAFTAR<br>MEMBER</h2>
            <form action="#">
                <div class="form-group">
                    <label for="nama-lengkap">Nama Lengkap</label>
                    <input type="text" id="nama-lengkap" placeholder="Masukkan Nama Anda">
                </div>
                <div class="form-group">
                    <label for="email">Alamat Email</label>
                    <input type="email" id="email" placeholder="Email@example.com">
                </div>
                <div class="form-group">
                    <label for="password">Kata Sandi</label>
                    <input type="password" id="password" placeholder="Masukkan Kata Sandi Anda">
                </div>
                <div class="form-group">
                    <label for="confirm-password">Konfirmasi Kata Sandi</label>
                    <input type="password" id="confirm-password" placeholder="Ulangi Kata Sandi">
                </div>
                <div class="form-group">
                    <label>Pilih Paket Member</label>
                    <div class="radio-option">
                        <input type="radio" id="paket1" name="paket_member" value="30kg" checked>
                        <label for="paket1">30 kg / Rp 150.000</label>
                    </div>
                    <div class="radio-option">
                        <input type="radio" id="paket2" name="paket_member" value="50kg">
                        <label for="paket2">50 kg / Rp 250.000</label>
                    </div>
                </div>
                <div class="form-action">
                    <button type="submit" class="btn-finish">Selesai</button>
                </div>
            </form>
        </div>
    </main>

</x-layouts>