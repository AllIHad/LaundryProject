<x-adminLayouts>
    <main class="container">
        <nav class="month-tabs">
            <a href="#" class="active">Januari</a>
            <a href="#">Februari</a>
            <a href="#">Maret</a>
            <a href="#">April</a>
            <a href="#">Mei</a>
            <a href="#">Juni</a>
            <a href="#">Juli</a>
            <a href="#">Agustus</a>
        </nav>

        <div class="table-container recap-table">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Tanggal</th>
                        <th>Berat</th>
                        <th>Pesanan</th>
                        <th>Layanan</th>
                        <th>Total Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>001</td>
                        <td>Ani</td>
                        <td>12-01-2025</td>
                        <td>5kg</td>
                        <td>Cuci Setrika Pakaian</td>
                        <td>Member</td>
                        <td>Rp 48.000</td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>002</td>
                        <td>Dimas</td>
                        <td>13-01-2025</td>
                        <td>2kg</td>
                        <td>Cuci Setrika Jas</td>
                        <td>Express</td>
                        <td>Rp 48.000</td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>003</td>
                        <td>Sari</td>
                        <td>15-01-2025</td>
                        <td>8kg</td>
                        <td>Cuci Kering Selimut</td>
                        <td>Reguler</td>
                        <td>Rp 48.000</td>
                    </tr>
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