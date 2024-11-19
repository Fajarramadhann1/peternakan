<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Pakan</title>
    <style>
        /* General styles */
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #fbe8a6, #f6a600);
            margin: 0;
            padding: 0;
            color: #333;
            line-height: 1.6;
            overflow-x: hidden;
        }

        .header {
            background: rgba(246, 166, 0, 0.9);
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            position: relative;
            animation: slideDown 0.5s ease;
            z-index: 1;
        }

        @keyframes slideDown {
            0% { transform: translateY(-20px); opacity: 0; }
            100% { transform: translateY(0); opacity: 1; }
        }

        .header h1 {
            color: #fff;
            margin: 0;
            font-size: 36px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        .nav-links a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.2s;
            font-size: 18px;
            background-color: rgba(0, 0, 0, 0.2);
        }

        .nav-links a:hover {
            background-color: rgba(255, 255, 255, 0.4);
            transform: scale(1.1);
        }

        .post-container {
            max-width: 800px;
            margin: 40px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            animation: fadeIn 0.5s ease;
            position: relative;
            z-index: 1;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        h2 {
            color: #333;
            text-align: center;
            padding-bottom: 10px;
            margin-bottom: 25px;
            font-size: 28px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-bottom: 3px solid #f6a600;
        }

        form {
            display: flex;
            flex-direction: column;
            margin-bottom: 30px;
        }

        label {
            font-size: 18px;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="number"], select {
            padding: 15px;
            margin: 10px 0;
            border-radius: 5px;
            border: 2px solid #ccc;
            font-size: 16px;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        input[type="number"]:focus, select:focus {
            border-color: #f6a600;
            box-shadow: 0 0 5px rgba(246, 166, 0, 0.5);
            outline: none;
        }

        button {
            background-color: #f6a600;
            color: white;
            border: none;
            padding: 15px;
            margin-top: 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s, transform 0.2s;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
        }

        button:hover {
            background-color: #db9b00;
            transform: scale(1.05);
            animation: pulse 0.6s infinite alternate;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            100% { transform: scale(1.1); }
        }

        .post-list {
            margin-top: 30px;
            padding: 30px;
            background-color: #f9f9f9;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        .post {
            background-color: #f6a600;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
            color: white;
            font-size: 18px;
            position: relative;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .post:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
        }

        .post h3 {
            margin: 0;
            font-size: 22px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        .post-actions {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 10px;
        }

        .post-actions a, .post-actions form button {
            background-color: #333;
            color: #fff;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 4px;
            font-size: 16px;
            width: 100px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 40px;
            transition: background-color 0.3s, transform 0.2s;
            position: relative;
            overflow: hidden;
        }

        .post-actions form button {
            background-color: red;
        }

        .post-actions a:hover, .post-actions form button:hover {
            background-color: darkred;
            transform: scale(1.1);
            animation: shake 0.5s;
        }

        @keyframes shake {
            0% { transform: translateX(0); }
            25% { transform: translateX(-2px); }
            50% { transform: translateX(2px); }
            75% { transform: translateX(-2px); }
            100% { transform: translateX(0); }
        }

        /* Responsive Styles */
        @media (max-width: 600px) {
            .post-container {
                padding: 20px;
            }

            h2 {
                font-size: 24px;
            }

            button, .post-actions a, .post-actions form button {
                font-size: 14px;
                padding: 10px;
            }

            input[type="number"], select {
                font-size: 14px;
            }
        }

    </style>
</head>
<body>
    <div class="header">
        <h1>Halaman Pakan</h1>
        <div class="nav-links">
            <a href="/">Home</a>
            <a href="/ayam">Ayam</a>
            <a href="/jual">Penjualan</a>
        </div>
    </div>

    <div class="post-container">
        <h2>Silahkan Edit Data Pakan</h2>
        <form action="/create-post" method="POST">
            @csrf
            <label for="pakan">Merk Pakan:</label>
            <select name="pakan" id="pakan" required>
                <option value="Japfa Comfeed">Japfa Comfeed</option>
                <option value="Charoen Pokphand">Charoen Pokphand</option>
                <option value="Malindo Feedmill">Malindo Feedmill</option>
                <option value="Sierad Produce">Sierad Produce</option>
                <option value="New Hope">New Hope</option>
                <option value="Wonokoyo">Wonokoyo</option>
                <option value="Gold Coin">Gold Coin</option>
                <option value="Feedmill Inti Prima">Feedmill Inti Prima</option>
                <option value="Sentra Profeed">Sentra Profeed</option>
                <option value="CJ Feed">CJ Feed</option>
                <option value="Prima Feedmill">Prima Feedmill</option>
                <option value="Cargill Feed">Cargill Feed</option>
                <option value="Bisi International">Bisi International</option>
                <option value="Lautan Luas">Lautan Luas</option>
                <option value="Sinta Prima Feedmill">Sinta Prima Feedmill</option>
                <option value="Trouw Nutrition">Trouw Nutrition</option>
                <option value="Patriot Feed">Patriot Feed</option>
                <option value="Eka Farm">Eka Farm</option>
                <option value="Gofeed">Gofeed</option>
                <option value="Greenfields Feed">Greenfields Feed</option>
            </select>

            <label for="stok">Tambah Stok:</label>
            <input type="number" name="stok" id="stok" min="1" max="100" placeholder="Tambahkan stok (1-100)" required>

            <label for="harga">Harga Pakan:</label>
            <select name="harga" id="harga" required>
                @for($i = 1000; $i <= 500000; $i += 1000)
                    <option value="{{ $i }}">Rp {{ number_format($i, 0, ',', '.') }}</option>
                @endfor
            </select>

            <button type="submit">Simpan Data</button>
        </form>

        <div class="post-list">
            <h2>Data Yang Tersimpan</h2>
            @foreach ($posts as $post)
            <div class="post">
                <h3>{{ $post['title'] }}</h3>
                <p>{{ $post['body'] }}</p>
                <p>Harga Pakan: Rp {{ number_format($post['harga'], 0, ',', '.') }}</p>
                <p><span>Tanggal Ditambahkan:</span> {{ \Carbon\Carbon::parse($post['created_at'])->format('d-m-Y') }}</p>

                <div class="post-actions">
                    <a href="/edit-post/{{ $post->id }}">Edit</a>
                    <form class="delete-post" action="/delete-post/{{ $post->id }}" method="POST" onsubmit="return confirm('Tekan Oke Jika Data Ingin Di Hapus')">
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