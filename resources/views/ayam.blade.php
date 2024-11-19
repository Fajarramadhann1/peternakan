<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Ayam</title>
    <style>
        /* General styles for the body */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #fbe8a6; /* Warm yellow background */
            margin: 0;
            padding: 0;
            color: #333;
        }

        /* Header styles */
        .header {
            background-color: #f6a600; /* Deep yellow-orange */
            padding: 15px 20px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .header h1 {
            color: #ffffff;
            margin: 0;
            font-size: 28px;
        }

        .nav-links {
            margin-top: 10px;
        }

        .nav-links a {
            color: #ffffff;
            text-decoration: none;
            margin: 0 15px;
            padding: 5px 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .nav-links a:hover {
            background-color: #db9b00; /* Darker shade for hover */
        }

        /* Container for the form */
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
            border-bottom: 2px solid #f6a600; /* Match header color */
            padding-bottom: 5px;
        }

        /* Styling the form */
        form {
            display: grid;
            grid-template-columns: 1fr 1fr; /* Two-column layout */
            grid-gap: 15px;
            margin-bottom: 20px;
        }

        form select,
        form button {
            grid-column: span 2; /* Full width for select and button */
        }

        select, button {
            padding: 15px;
            border-radius: 5px;
            border: 2px solid #ccc;
            font-size: 16px;
            transition: border-color 0.3s;
            width: 100%;
            box-sizing: border-box;
        }

        select:focus {
            border-color: #f6a600; /* Focus border color */
            outline: none;
        }

        button {
            background-color: #f6a600; /* Button color */
            color: white;
            border: none;
            padding: 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
            width: 100%;
        }

        button:hover {
            background-color: #db9b00; /* Darker shade on hover */
        }

        /* Styling for post list */
        .ayam-list {
            margin-top: 20px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .post {
            background-color: #f6a600; /* Post background color */
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 8px;
            color: white;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 10px;
        }

        .post h3 {
            grid-column: span 2;
            margin: 0;
            font-size: 20px;
            font-weight: bold;
        }

        .post p {
            margin: 5px 0;
        }

        .post span {
            font-weight: bold;
        }

        .post:nth-child(even) {
            background-color: #f7c04c; /* Slightly different shade for alternating posts */
        }

        /* Styling for edit and delete links */
        .post-actions {
            grid-column: span 2;
            margin-top: 10px;
            display: flex;
            justify-content: space-between;
        }

        .post-actions a,
        .post-actions form button {
            background-color: #333;
            color: #fff;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .post-actions a:hover,
        .post-actions form button:hover {
            background-color: #555;
        }

        form.delete-post {
            display: inline;
        }

        form.delete-post button {
            background-color: red;
        }

        form.delete-post button:hover {
            background-color: darkred;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Halaman Ayam</h1>
        <div class="nav-links">
            <a href="/">Home</a>
            <a href="/pakan">Pakan</a>
            <a href="/penjualan">Penjualan</a>
        </div>
    </div>

    <div class="post-container">
        <h2>Silahkan Tambah Data Ayam</h2>
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
                <option value="24000">Rp 24.000/kg</option>
                <option value="26000">Rp 26.000/kg</option>
                <option value="28000">Rp 28.000/kg</option>
                <option value="30000">Rp 30.000/kg</option>
            </select>

            <select name="stok_ayam" required>
                <option value="">Pilih Stok Ayam</option>
                <option value="0">Stok Habis</option>
                <option value="1000">1.000 ekor</option>
                <option value="2000">2.000 ekor</option>
                <option value="3000">3.000 ekor</option>
                <option value="4000">4.000 ekor</option>
                <option value="5000">5.000 ekor</option>
            </select>

            <select name="nama_kandang" required>
                <option value="">Pilih Nama Kandang</option>
                <option value="Kandang A">Kandang A</option>
                <option value="Kandang B">Kandang B</option>
                <option value="Kandang C">Kandang C</option>
                <option value="Kandang D">Kandang D</option>
                <option value="Kandang E">Kandang E</option>
            </select>
{{-- buat tampilan yang lebih dinamis agar mudah dikembangkan --}}
            <button type="submit">Simpan Data</button>
        </form>

        <div class="ayam-list">
            <h2>Data Yang Tersimpan</h2>
            @foreach ($ayams as $ayam)
            <div class="post">
                <h3>{{ $ayam['kategori_ayam'] }}</h3>
                <p><span>Harga:</span> Rp {{ number_format($ayam['harga_ayam'], 0, ',', '.') }}/kg</p>
                <p><span>Stok:</span> {{ $ayam['stok_ayam'] }} ekor</p>
                <p><span>Kandang:</span> {{ $ayam['nama_kandang'] }}</p>
                <p><span>Tanggal Ditambahkan:</span> {{ \Carbon\Carbon::parse($ayam['created_at'])->format('d-m-Y') }}</p>
                {{-- buat tanggalnya bisa menjadi back date --}}


                <div class="post-actions">
                    <a href="/edit-ayam/{{ $ayam->id }}">Edit</a>
                    <form class="delete-post" action="/delete-ayam/{{ $ayam->id }}" method="POST" onsubmit="return confirm('Tekan Oke Kalau Yakin Post Di Hapus')">
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
