<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Pakan</title>
    <style>
        /* General Styles */
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
            background-color: #db9b00;
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
            text-align: center;
        }

        form select,
        form button,
        form input[type="number"] {
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

        .add-button {
            background-color: #f6a600;
            color: white;
            border: none;
            padding: 10px 10px;
            margin-left: 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s, transform 0.2s;
        }

        .add-button:hover {
            background-color: #db9b00;
            transform: scale(1.05);
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
        <h2>Tambah Data Pakan</h2>
        
        <!-- Display success message if session success exists -->
        @if(session('success'))
            <div style="text-align: center; margin-bottom: 15px;">
                <button
                    class="success-btn"
                    onclick="window.location.href='/pakanbaru'">
                    Data Pakan Tersimpan - Klik untuk Melihat
                </button>
            </div>
        @endif
        
        <form action="/pakanbaru" method="POST">
            @csrf
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

            <!-- Input for adding new merk pakan -->
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
            <!-- Button to view saved pakan data -->
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
