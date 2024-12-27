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
        
            <!-- Input teks untuk harga ayam -->
            <input 
                type="text" 
                name="harga_ayam" 
                placeholder="Masukkan Harga Ayam (contoh: 20000)" 
                required 
                pattern="\d+" 
                title="Masukkan hanya angka tanpa simbol atau spasi" 
                style="width: 100%; padding: 10px; border-radius: 5px; margin-bottom: 10px; border: 1px solid #ccc; font-size: 16px;"
            >
        
            <!-- Input teks untuk stok ayam -->
            <input 
                type="text" 
                name="stok_ayam" 
                placeholder="Masukkan Stok Ayam (contoh: 1000)" 
                required 
                pattern="\d+" 
                title="Masukkan hanya angka tanpa simbol atau spasi" 
                style="width: 100%; padding: 10px; border-radius: 5px; margin-bottom: 10px; border: 1px solid #ccc; font-size: 16px;"
            >
        
            <select name="nama_kandang" required>
                <option value="">Pilih Nama Kandang</option>
                <option value="Kandang A">Kandang A</option>
                <option value="Kandang B">Kandang B</option>
            </select>
        
            <button type="submit">Simpan Data</button>
            <a href="/ayambaru" class="button-pakan-baru" style="display: inline-block; background-color: #f6a600; color: white; padding: 10px 20px; border-radius: 5px; font-size: 16px; text-decoration: none; text-align: center; transition: background-color 0.3s;">
                Data Ayam Tersimpan
            </a>
        </form>
    </div>
</body>
</html>
