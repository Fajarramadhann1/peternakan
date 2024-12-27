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

        .button-pakan-baru {
            color: #fff;
            background-color: #f6a600;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 18px;
            transition: background-color 0.3s, transform 0.2s;
        }

        .button-pakan-baru:hover {
            background-color: #db9b00;
            transform: scale(1.05);
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

        /* Tombol tambah merk pakan baru */
        .add-button {
            background-color: #f6a600;
            color: white;
            border: none;
            padding: 10px 10px; /* Ubah padding untuk memperkecil tombol */
            margin-left: 10px; /* Jarak antara input dan tombol */
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px; /* Ukuran font lebih kecil */
            transition: background-color 0.3s, transform 0.2s;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        .add-button:hover {
            background-color: #db9b00;
            transform: scale(1.05);
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
            <a href="/penjualan">Penjualan</a>
        </div>
    </div>

    <div class="post-container">
        <h2>DATA PAKAN</h2>
        <form action="/pakanbaru" method="POST">
            @csrf
            <label for="pakan">Merk Pakan:</label>
            <select name="pakan" id="pakan" required>
                <option value="">Pilih Merk Pakan</option>
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

            <!-- Input untuk menambahkan merk pakan baru -->
            <div>
                <label for="new-pakan">Tambah Merk Pakan Baru:</label>
                <input type="text" id="new-pakan" placeholder="Nama merk pakan baru">
                <button type="button" class="add-button" onclick="addNewPakan()">Tambah Merk</button>
            </div>

            <label for="stok">Tambah Stok:</label>
            <input type="number" name="stok" id="stok" min="1" max="100" placeholder="Tambahkan stok (1-100)" required>

            <label for="harga">Harga Pakan:</label>
            <select name="harga" id="harga" required>
                @for($i = 1000; $i <= 500000; $i += 1000)
                    <option value="{{ $i }}">Rp {{ number_format($i, 0, ',', '.') }}</option>
                @endfor
            </select>

            <button type="submit">Simpan Data</button>
            <!-- Tombol Pakan Baru -->
            <a href="/pakanbaru" class="button-pakan-baru">Data Pakan Tersimpan</a>
        </form>
    </div>

    <script>
        function addNewPakan() {
            const newPakan = document.getElementById('new-pakan').value.trim();
            const select = document.getElementById('pakan');

            if (newPakan) {
                for (let option of select.options) {
                    if (option.value.toLowerCase() === newPakan.toLowerCase()) {
                        alert('Merk pakan ini sudah ada!');
                        return;
                    }
                }

                const option = document.createElement('option');
                option.value = newPakan;
                option.textContent = newPakan;
                select.appendChild(option);
                select.value = newPakan;
                document.getElementById('new-pakan').value = '';
            } else {
                alert('Silahkan masukkan nama merk pakan baru');
            }
        }
    </script>
</body>
</html>
