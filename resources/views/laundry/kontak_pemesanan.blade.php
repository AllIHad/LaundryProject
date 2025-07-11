<x-layouts>

    <main class="contact-main">
        <div class="order-form-container">
            <h2>ORDER<br>DISINI</h2>
            <form action="#">
                <div class="form-group">
                    <input type="text" placeholder="Masukkan Nama Anda">
                </div>
                <div class="form-group">
                    <input type="tel" placeholder="Masukkan No. Telp Anda">
                </div>
                <div class="form-group">
                    <input type="email" placeholder="Masukkan Email Anda">
                </div>

                {{-- tambahan form dari page selanjutnya --}}
                <div class="form-group">
                    <input type="text" placeholder="Masukkan Alamat Penjemputan">
                </div>
                <div class="form-group">
                    <select>
                        <option disabled selected>Pilih Jenis Pesanan</option>
                        <option>Cuci Setrika</option>
                        <option>Cuci Kering</option>
                        <option>Setrika Saja</option>
                        <option>Layanan Sepatu</option>
                        <option>Layanan Tas</option>
                    </select>
                </div>
                <div class="form-group">
                     <select>
                        <option disabled selected>Jenis Layanan</option>
                        <option>Biasa</option>
                        <option>Express</option>
                        <option>Member</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Tanggal Penjemputan" onfocus="(this.type='date')">
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Jam Penjemputan" onfocus="(this.type='time')">
                </div>
                 <div class="form-group">
                    <label>Jenis Pengiriman</label>
                    <div class="inline-radio-group">
                        <div class="radio-option">
                            <input type="radio" id="antar" name="pengiriman" value="antar" checked>
                            <label for="antar">Antar</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="ambil" name="pengiriman" value="ambil">
                            <label for="ambil">Ambil di Laundry</label>
                        </div>
                    </div>
                </div>

                <div class="form-action">
                    <button type="submit" class="btn-finish">Pesan</button>
                </div>
            </form>
        </div>
    </main>

</x-layouts>