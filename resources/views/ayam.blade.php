<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Ayam</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #fbe8a6;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .header {
            background-color: #f6a600;
            padding: 15px 20px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .header h1 {
            color: #ffffff;
            margin: 0;
            font-size: 28px;
        }

        .post-container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        h2 {
            color: #333;
            margin-bottom: 15px;
            border-bottom: 2px solid #f6a600;
            padding-bottom: 5px;
        }

        form select,
        form button {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        form button {
            background-color: #f6a600;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        form button:hover {
            background-color: #db9b00;
        }

        .success-btn {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .success-btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Tambah Data Ayam</h1>
    </div>

    <div class="post-container">
        <h2>Silahkan Tambah Data Ayam</h2>

        <!-- Tampilkan tombol jika session success ada -->
        @if(session('success'))
            <div style="text-align: center; margin-bottom: 15px;">
                <button
                    class="success-btn"
                    onclick="window.location.href='/ayambaru'">
                    Data Ayam Tersimpan - Klik untuk Melihat
                </button>
            </div>
        @endif

        <form action="/create-ayam" method="POST">
            @csrf
            <select name="kategori_ayam" required>
                <option value="">Pilih Kategori Ayam</option>
                <option value="Ayam Kecil">Ayam Kecil</option>
                <option value="Ayam Sedang">Ayam Sedang</option>
                <option value="Ayam Besar">Ayam Besar</option>
            </select>

            <select name="harga_ayam" required>
                <option value="">Pilih Harga Ayam</option>
                <option value="18000">Rp 18.000/kg</option>
                <option value="20000">Rp 20.000/kg</option>
                <option value="22000">Rp 22.000/kg</option>
                <option value="30000">Rp 30.000/kg</option>
            </select>

            <select name="stok_ayam" required>
                <option value="">Pilih Stok Ayam</option>
                <option value="1000">1.000 ekor</option>
                <option value="2000">2.000 ekor</option>
                <option value="5000">5.000 ekor</option>
            </select>

            <select name="nama_kandang" required>
                <option value="">Pilih Nama Kandang</option>
                <option value="Kandang A">Kandang A</option>
                <option value="Kandang B">Kandang B</option>
            </select>

            <button type="submit">Simpan Data</button>
        </form>
    </div>
</body>
</html>
