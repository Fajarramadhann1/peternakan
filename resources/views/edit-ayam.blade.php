<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Ayam</title>
    <style>
        body {
            font-family: 'Verdana', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #444;
        }

        .header {
            background-color: #8b4513;
            padding: 20px;
            text-align: center;
        }

        .header h1 {
            color: white;
            margin: 0;
            font-size: 28px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
        }

        h1 {
            text-align: center;
            color: #a0522d;
            margin: 30px 0;
            font-size: 32px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
        }

        .edit-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.15);
            transition: box-shadow 0.3s;
        }

        .edit-container:hover {
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.25);
        }

        form {
            display: grid;
            grid-template-columns: 1fr;
            grid-gap: 15px;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            color: #a0522d;
        }

        select, 
        button {
            padding: 15px;
            border-radius: 8px;
            border: 2px solid #ccc;
            font-size: 16px;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        select:focus,
        button:focus {
            border-color: #a0522d;
            outline: none;
            box-shadow: 0 0 8px rgba(160, 82, 45, 0.4);
        }

        button {
            background-color: #8b4513;
            color: white;
            cursor: pointer;
            text-transform: uppercase;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.3s;
        }

        button:hover {
            background-color: #a0522d;
            transform: translateY(-3px);
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Edit Data Ayam</h1>
    </div>

    <h1>Edit Data Ayam</h1>

    <div class="edit-container">
        <form action="/edit-ayam/{{ $ayam->id }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Dropdown for Kategori Ayam -->
            <label for="kategori_ayam">Kategori Ayam</label>
            <select id="kategori_ayam" name="kategori_ayam" required>
                <option value="Ayam Kecil" {{ $ayam->kategori_ayam == 'Ayam Kecil' ? 'selected' : '' }}>Ayam Kecil</option>
                <option value="Ayam Sedang" {{ $ayam->kategori_ayam == 'Ayam Sedang' ? 'selected' : '' }}>Ayam Sedang</option>
                <option value="Ayam Besar" {{ $ayam->kategori_ayam == 'Ayam Besar' ? 'selected' : '' }}>Ayam Besar</option>
            </select>

            <!-- Dropdown for Harga Ayam -->
            <label for="harga_ayam">Harga Ayam (per kg)</label>
            <select id="harga_ayam" name="harga_ayam" required>
                @for ($i = 18000; $i <= 30000; $i += 1000)
                    <option value="{{ $i }}" {{ $ayam->harga_ayam == $i ? 'selected' : '' }}>Rp {{ number_format($i, 0, ',', '.') }}</option>
                @endfor
            </select>

            <!-- Dropdown for Stok Ayam -->
            <label for="stok_ayam">Stok Ayam (ekor)</label>
            <select id="stok_ayam" name="stok_ayam" required>
                <option value="0" {{ $ayam->stok_ayam == 0 ? 'selected' : '' }}>Stok Habis</option>
                @for ($i = 1; $i <= 5000; $i += 500)
                    <option value="{{ $i }}" {{ $ayam->stok_ayam == $i ? 'selected' : '' }}>{{ $i }} ekor</option>
                @endfor
            </select>

            <!-- Dropdown for Nama Kandang -->
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
</body>
</html>
