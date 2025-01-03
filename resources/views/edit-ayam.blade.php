<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Ayam</title>
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
            color: white;
            margin: 0;
            font-size: 28px;
        }

        .edit-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .edit-container h2 {
            text-align: center;
            color: #f6a600;
            margin-bottom: 20px;
            font-size: 24px;
        }

        form {
            display: grid;
            grid-template-columns: 1fr;
            gap: 15px;
        }

        label {
            font-weight: bold;
            color: #333;
        }

        select,
        button {
            padding: 12px;
            border-radius: 8px;
            border: 2px solid #ccc;
            font-size: 16px;
        }

        select:focus {
            border-color: #f6a600;
            outline: none;
        }

        button {
            background-color: #f6a600;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
            transition: background-color 0.3s, transform 0.2s;
        }

        button:hover {
            background-color: #db9b00;
            transform: scale(1.05);
        }

        .back-button {
            text-align: center;
            margin-top: 20px;
        }

        .back-button a {
            background-color: #f6a600;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            transition: background-color 0.3s, transform 0.2s;
        }

        .back-button a:hover {
            background-color: #db9b00;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Edit Data Ayam</h1>
    </div>

    <div class="edit-container">
        <h2>Edit Informasi Ayam</h2>
        <form action="/edit-ayam/{{ $ayam->id }}" method="POST">
            @csrf
            @method('PUT')

            <label for="kategori_ayam">Kategori Ayam</label>
            <select id="kategori_ayam" name="kategori_ayam" required>
                <option value="Ayam Kecil" {{ $ayam->kategori_ayam == 'Ayam Kecil' ? 'selected' : '' }}>Ayam Kecil</option>
                <option value="Ayam Sedang" {{ $ayam->kategori_ayam == 'Ayam Sedang' ? 'selected' : '' }}>Ayam Sedang</option>
                <option value="Ayam Besar" {{ $ayam->kategori_ayam == 'Ayam Besar' ? 'selected' : '' }}>Ayam Besar</option>
            </select>

            <label for="harga_ayam">Harga Ayam (per kg)</label>
            <select id="harga_ayam" name="harga_ayam" required>
                @for ($i = 18000; $i <= 30000; $i += 1000)
                    <option value="{{ $i }}" {{ $ayam->harga_ayam == $i ? 'selected' : '' }}>Rp {{ number_format($i, 0, ',', '.') }}</option>
                @endfor
            </select>

            <label for="stok_ayam">Stok Ayam </label>
            <input 
            type="text" 
            name="stok_ayam" 
            placeholder="Masukkan Stok Ayam (contoh: 1000)" 
            required 
            pattern="\d+" 
            title="Masukkan hanya angka tanpa simbol atau spasi" 
            style="width: 100%; padding: 10px; border-radius: 5px; margin-bottom: 10px; border: 1px solid #ccc; font-size: 16px;"
        >
            <label for="nama_kandang">Nama Kandang</label>
            <select id="nama_kandang" name="nama_kandang" required>
                <option value="Kandang A" {{ $ayam->nama_kandang == 'Kandang A' ? 'selected' : '' }}>Kandang A</option>
                <option value="Kandang B" {{ $ayam->nama_kandang == 'Kandang B' ? 'selected' : '' }}>Kandang B</option>
                <option value="Kandang C" {{ $ayam->nama_kandang == 'Kandang C' ? 'selected' : '' }}>Kandang C</option>
                <option value="Kandang D" {{ $ayam->nama_kandang == 'Kandang D' ? 'selected' : '' }}>Kandang D</option>
                <option value="Kandang E" {{ $ayam->nama_kandang == 'Kandang E' ? 'selected' : '' }}>Kandang E</option>
            </select>

            <button type="submit">Save Changes</button>
        </form>
    </div>

    <div class="back-button">
        <a href="/ayam">Kembali ke Halaman Ayam</a>
    </div>
</body>
</html>
