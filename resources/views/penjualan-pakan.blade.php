<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelola Penjualan Pakan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fbe8a6;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #f6a600;
            padding: 15px;
            text-align: center;
            color: white;
            font-size: 24px;
        }

        .nav-links {
            margin-top: 10px;
            text-align: center;
        }

        .nav-links a {
            color: #333;
            text-decoration: none;
            margin: 0 10px;
            font-weight: bold;
        }

        .nav-links a:hover {
            color: #f6a600;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        label {
            font-weight: bold;
        }

        input, button {
            padding: 10px;
            font-size: 16px;
        }

        button {
            background-color: #f6a600;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        button:hover {
            background-color: #db9b00;
        }

        .data-list {
            margin-top: 20px;
        }

        .data-item {
            background-color: #f6a600;
            color: white;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 4px;
        }

        .data-item a {
            color: white;
            margin-right: 10px;
            text-decoration: none;
            font-weight: bold;
        }

        .data-item a:hover {
            text-decoration: underline;
        }

        .delete-button {
            background-color: red;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
        }

        .delete-button:hover {
            background-color: darkred;
        }
    </style>
</head>
<body>
    <div class="header">
        Kelola Penjualan Pakan
    </div>

    <!-- Navigation Links -->
    <div class="nav-links">
        <a href="/">Home</a>
        <a href="/penjualan-ayam">Penjualan Ayam</a>
    </div>

    <div class="container">
        <!-- Form Tambah Data Penjualan -->
        <form action="/penjualan-pakan" method="POST">
            @csrf
            <label for="jumlah_penjualan">Jumlah Penjualan:</label>
            <input type="number" name="jumlah_penjualan" id="jumlah_penjualan" placeholder="Masukkan jumlah penjualan..." required>

            <label for="harga">Harga:</label>
            <input type="number" name="harga" id="harga" placeholder="Masukkan harga..." required>

            <button type="submit">Simpan</button>
        </form>

        <!-- Daftar Data Penjualan -->
        <div class="data-list">
            <h3>Data Penjualan Pakan</h3>
            @foreach ($penjualanPakan as $pakan)
            <div class="data-item">
                <p>Jumlah: {{ $pakan->jumlah_penjualan }}</p>
                <p>Harga: Rp{{ number_format($pakan->harga, 0, ',', '.') }}</p>
                <div>
                    <!-- Link Edit -->
                    <a href="/edit-penjualan-pakan/{{ $pakan->id }}">Edit</a>
                    <!-- Tombol Hapus -->
                    <form action="/delete-penjualan-pakan/{{ $pakan->id }}" method="POST" style="display: inline;" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-button">Hapus</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
