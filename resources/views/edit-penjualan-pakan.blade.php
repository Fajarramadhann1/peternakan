<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Penjualan Pakan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fbe8a6;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #f6a600;
            padding: 15px;
            text-align: center;
            color: white;
            font-size: 24px;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        label {
            font-weight: bold;
        }

        input, button {
            padding: 10px;
            font-size: 16px;
        }

        button {
            background-color: #f6a600;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        button:hover {
            background-color: #db9b00;
        }
    </style>
</head>
<body>
    <div class="header">
        Edit Penjualan Pakan
    </div>

    <div class="container">
        <form action="/update-penjualan-pakan/{{ $penjualanPakan->id }}" method="POST">
            @csrf
            @method('PUT')

            <label for="jumlah_penjualan">Jumlah Penjualan:</label>
            <input type="number" name="jumlah_penjualan" id="jumlah_penjualan" value="{{ $penjualanPakan->jumlah_penjualan }}" required>

            <label for="harga">Harga:</label>
            <input type="number" name="harga" id="harga" value="{{ $penjualanPakan->harga }}" required>

            <button type="submit">Simpan Perubahan</button>
        </form>
    </div>
</body>
</html>