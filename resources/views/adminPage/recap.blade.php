<x-adminLayouts>
    <main class="container">
        <nav class="month-tabs">
            <a href="#">Januari</a>
            <a href="#">Februari</a>
            <a href="#">Maret</a>
            <a href="#">April</a>
            <a href="#">Mei</a>
            <a href="#">Juni</a>
            <a href="#" class="active">Juli</a>
            <a href="#">Agustus</a>
        </nav>

        <div class="table-container recap-table">
            <table>
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">ID</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Tanggal</th>
                        <th class="text-center">Berat</th>
                        <th class="text-center">Pesanan</th>
                        <th class="text-center">Layanan</th>
                        <th class="text-center">Total Harga</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pesanans as $pesanan)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-center">{{ $pesanan->id }}</td>
                        <td class="text-center">{{ $pesanan->nama}}</td>
                        <td class="text-center">{{ \Carbon\Carbon::parse($pesanan->created_at)->translatedFormat('l, d-m-Y') }}</td>
                        <td class="text-center">{{ $pesanan->berat }} KG</td>
                        <td class="text-center">{{ $pesanan->jenis_pemesanan }}</td>
                        <td class="text-center">{{ $pesanan->jenis_layanan }}</td>
                        <td class="text-center">Rp. {{ number_format($pesanan->total_harga, 2, ',', '.') }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" style="text-align:center; padding: 1rem; color: #888;">
                            Tidak ada data pesanan yang tersedia.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </main>

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

</x-adminLayouts>