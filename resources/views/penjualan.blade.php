<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Penjualan</title>
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
            grid-template-columns: 1fr 2fr;
            gap: 15px;
            margin-bottom: 20px;
            align-items: center;
        }

        label {
            font-weight: bold;
            margin-right: 10px;
        }

        input[type="text"],
        select,
        button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 2px solid #ccc;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        select:focus {
            border-color: #f6a600; /* Focus border color */
            outline: none;
        }

        button {
            grid-column: span 2;
            background-color: #f6a600; /* Button color */
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #db9b00; /* Darker shade on hover */
        }

        /* Styling for post list */
        .post-list {
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
        }

        .post h3 {
            margin: 0;
        }

        /* Styling for edit and delete links */
        .post-actions {
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
        <h1>Halaman Penjualan</h1>
        <div class="nav-links">
            <a href="/">Home</a>
            <a href="/ayam">Ayam</a>
            <a href="/pakan">Pakan</a>
        </div>
    </div>

    <div class="post-container">
        <form action="/create-penjualan" method="POST">
            @csrf
            <label for="jumlah_penjualan">Jumlah Penjualan:</label>
            <select name="jumlah_penjualan" id="jumlah_penjualan" required>
                @for ($i = 1; $i <= 5000; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
            
            <label for="metode_penjualan">Jenis Penjualan:</label>
            <input type="text" name="metode_penjualan" id="metode_penjualan" placeholder="Masukkan jenis penjualan..." required>
            
            <button type="submit">Simpan Data</button>
        </form>
        
        <div class="post-list">
            <h2>Data Yang Tersimpan</h2>
            @foreach ($penjualans as $penjualan)
            <div class="post">
                <h3>{{ $penjualan['jumlah_penjualan'] }}</h3>
                <p>{{ $penjualan['metode_penjualan'] }}</p>

                <div class="post-actions">
                    <a href="/edit-penjualan/{{ $penjualan->id_penjualan }}">Edit</a>
                    <form class="delete-penjualan" action="/delete-penjualan/{{ $penjualan->id_penjualan }}" method="POST" onsubmit="return confirm('Tekan Oke Kalau Yakin Post Di Hapus')">
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
