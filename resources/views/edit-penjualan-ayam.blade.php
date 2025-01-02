<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Penjualan Ayam</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fbe8a6;
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

        .container {
            max-width: 600px;
            margin: 30px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-weight: bold;
        }

        input, select, button {
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
    </style>
</head>
<body>
    <div class="header">
        Edit Penjualan Ayam
    </div>
    <div class="container">
        <form action="{{ route('update-penjualan-ayam', $penjualanAyam->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- Menggunakan metode PUT untuk pembaruan data -->

            <!-- Input untuk jumlah penjualan -->
            <label for="jumlah_penjualan">Jumlah Penjualan:</label>
            <input type="number" name="jumlah_penjualan" id="jumlah_penjualan" value="{{ $penjualanAyam->jumlah_penjualan }}" required>


            <!-- Input untuk harga -->
            <label for="nama_pelanggan">Nama Pelanggan: </label>
            <input type="text" name="nama_pelanggan" id="nama_pelanggan" value="{{ $penjualanAyam->nama_pelanggan }}" required>

            <!-- Input untuk harga -->
            <label for="id_ayam">Data Ayam: {{ $penjualanAyam->kategori_ayam }}, {{ $penjualanAyam->harga }}, {{ $penjualanAyam->nama_kandang }}</label>
            <select name="id_ayam" id="id_ayam" required>
                <option value="">Pilih Kategori</option>
                @foreach ($ayam as $ayams)
                    <option value="{{ $ayams->id }}">{{ $ayams->kategori_ayam }}, {{ $ayams->harga_ayam }}, {{ $ayams->nama_kandang }},{{ $ayams->stok_ayam }}</option>
                @endforeach
            </select>

            <!-- Input untuk nomor HP pelanggan -->
            <label for="nomor_hp">Nomor HP Pelanggan:</label>
            <input type="text" name="nomor_hp" id="nomor_hp" value="{{ $penjualanAyam->nomor_hp ?? '' }}" required>

            <!-- Tombol untuk menyimpan perubahan -->
            <button type="submit">Simpan Perubahan</button>
        </form>
    </div>
</body>
</html>
