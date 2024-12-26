<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Ayam</title>
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

        .ayam-list {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .post {
            background-color: #f6a600;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 8px;
            color: white;
        }

        .post h3 {
            margin: 0;
            font-size: 20px;
        }

        .post p {
            margin: 5px 0;
        }

        .post-actions {
            margin-top: 10px;
        }

        .post-actions a,
        .post-actions button {
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 5px;
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Data Ayam</h1>
    </div>

    <div class="ayam-list">
        <h2>Daftar Data Ayam</h2>
        @foreach ($ayams as $ayam)
            <div class="post">
                <h3>{{ $ayam->kategori_ayam }}</h3>
                <p>Harga: Rp {{ number_format($ayam->harga_ayam, 0, ',', '.') }}/kg</p>
                <p>Stok: {{ $ayam->stok_ayam }} ekor</p>
                <p>Kandang: {{ $ayam->nama_kandang }}</p>
                <p>Tanggal Ditambahkan: {{ \Carbon\Carbon::parse($ayam->created_at)->format('d-m-Y') }}</p>
                <div class="post-actions">
                    <a href="/edit-ayam/{{ $ayam->id }}">Edit</a>
                    <form action="/delete-ayam/{{ $ayam->id }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
    <style>
        .back-button a {
            background-color: #f6a600; /* Sama dengan tombol simpan data */
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            text-decoration: none;
            display: inline-block;
            text-align: center;
            transition: background-color 0.3s, transform 0.2s;
        }

        .back-button a:hover {
            background-color: #db9b00; /* Sama dengan tombol simpan data */
            transform: scale(1.05);
        }
    </style>

    <div class="back-button">
        <a href="/ayam">Kembali ke Halaman Ayam</a>
</body>
</html>

