<x-adminLayouts>
    <main class="container">
        <div class="form-container">
            <h1 class="page-title">Laundry Packages</h1>
            <form action="#">
                <div class="form-group">
                    <label for="nama-pelanggan">Nama Pelanggan</label>
                    <input type="text" id="nama-pelanggan" name="nama-pelanggan">
                </div>
                <div class="form-group">
                    <label for="jenis-pesanan">Jenis Pesanan</label>
                    <input type="text" id="jenis-pesanan" name="jenis-pesanan">
                </div>
                <div class="form-group">
                    <label for="no-hp">No. Hp</label>
                    <input type="tel" id="no-hp" name="no-hp">
                </div>
                <div class="form-group">
                    <label for="layanan">Layanan</label>
                    <input type="text" id="layanan" name="layanan">
                </div>
                <div class="form-group">
                    <label for="berat">Berat /Kg</label>
                    <input type="number" id="berat" name="berat" placeholder="Isi">
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" id="harga" name="harga" placeholder="Isi">
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn-submit">
                        Konfirmasi<br>Pesanan
                    </button>
                </div>
            </form>
        </div>
    </main>

    <x-slot:javascript>
        <script>
            document.querySelectorAll('.main-nav a').forEach(link => {
                link.addEventListener('click', function() {
                    // Remove active from all
                    document.querySelectorAll('.main-nav a').forEach(l => l.classList.remove('active'));
                    // Add active to clicked link
                    this.classList.add('active');
                });
            });
        </script>
    </x-slot:javascript>

</x-adminLayouts>