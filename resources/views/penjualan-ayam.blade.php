<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Penjualan Ayam</title>
    <style>
        /* Tambahkan gaya serupa dengan halaman sebelumnya untuk konsistensi */
    </style>
</head>
<body>
    <div class="header">
        <h1>Kelola Penjualan Ayam</h1>
        <div class="nav-links">
            <a href="/">Home</a>
            <a href="/penjualan-pakan">Penjualan Pakan</a>
        </div>
    </div>

    <div class="post-container">
        <!-- Form Tambah Penjualan Ayam -->
        <form action="/create-penjualan-ayam" method="POST">
            @csrf
            <label for="jumlah_penjualan">Jumlah Penjualan:</label>
            <input type="number" name="jumlah_penjualan" id="jumlah_penjualan" placeholder="Masukkan jumlah penjualan..." required>
            
            <label for="harga">Harga:</label>
            <input type="number" name="harga" id="harga" placeholder="Masukkan harga..." required>

            <button type="submit">Tambah Penjualan Ayam</button>
        </form>

        <!-- Daftar Penjualan Ayam -->
        <div class="post-list">
            <h2>Data Penjualan Ayam</h2>
            @foreach ($penjualanAyam as $ayam)
            <div class="post">
                <h3>Jumlah: {{ $ayam->jumlah_penjualan }}</h3>
                <p>Harga: Rp {{ $ayam->harga }}</p>
                <div class="post-actions">
                    <!-- Edit -->
                    <a href="/edit-penjualan-ayam/{{ $ayam->id }}">Edit</a>
                    <!-- Delete -->
                    <form action="/delete-penjualan-ayam/{{ $ayam->id }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
