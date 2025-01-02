<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelola Penjualan Ayam</title>
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

        input, button, select {
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

        .data-list {
            margin-top: 20px;
        }

        .data-item {
            background-color: #f6a600;
            color: white;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 4px;
            cursor: pointer;
        }

        .data-item .details {
            display: none;
            background-color: white;
            color: #333;
            padding: 10px;
            margin-top: 10px;
            border-radius: 4px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .data-item.active .details {
            display: block;
        }

        .nav-links {
            margin-top: 10px;
            text-align: center;
        }

        .nav-links a {
            color: #333;
            text-decoration: none;
            margin: 0 10px;
            font-weight: bold;
        }

        .nav-links a:hover {
            color: #f6a600;
        }

        .alert {
            margin: 20px 0;
            padding: 15px;
            border-radius: 8px;
            font-size: 16px;
            color: white;
            display: flex;
            align-items: center;
            gap: 10px;
            animation: fadeIn 0.5s ease-in-out;
        }

        .alert.success {
            background: linear-gradient(45deg, #4CAF50, #66BB6A);
        }

        .alert.error {
            background: linear-gradient(45deg, #f44336, #e57373);
        }

        .alert.hidden {
            display: none;
        }

        .alert-icon {
            font-size: 20px;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .btn-whatsapp {
            display: inline-block;
            padding: 12px 15px;
            background-color: #25D366;
            color: white;
            font-size: 14px;
            font-weight: bold;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
            transition: background-color 0.3s ease;
        }

        .btn-whatsapp:hover {
            background-color: #1DA851;
        }

        .btn-whatsapp i {
            margin-right: 5px;
            font-size: 16px;
        }

    </style>
</head>
<body>
    <div class="header">
        Kelola Penjualan Ayam
    </div>

    <div class="nav-links">
        <a href="/">Home</a>
        <a href="/penjualan-pakan">Penjualan Pakan</a>
    </div>

    <div class="container">
        <!-- Notifikasi -->
        @if(session('success'))
            <div class="alert success">
                <span class="alert-icon">&#x2714;</span> <!-- Checkmark Icon -->
                <span>{{ session('success') }}</span>
            </div>
        @endif

        @if(session('error'))
            <div class="alert error">
                <span class="alert-icon">&#x26A0;</span> <!-- Warning Icon -->
                <span>{{ session('error') }}</span>
            </div>
        @endif

        <!-- Form Tambah Penjualan Ayam -->
        <form action="/create-penjualan-ayam" method="POST">
            @csrf
            <label for="nama_pelanggan">Nama Pelanggan:</label>
            <input type="text" name="nama_pelanggan" id="nama_pelanggan" placeholder="Masukkan Nama Pelanggan..." required>

            <label for="jumlah_penjualan">Jumlah Penjualan:</label>
            <input type="number" name="jumlah_penjualan" id="jumlah_penjualan" placeholder="Masukkan jumlah penjualan..." required>

            <label for="id_ayam">Kategori Ayam:</label>
            <select name="id_ayam" id="id_ayam" required>
                <option value="">Pilih Kategori</option>
                @foreach ($ayams as $ayam)
                    <option value="{{ $ayam->id }}">{{ $ayam->kategori_ayam }}, {{ $ayam->harga_ayam }}, {{ $ayam->nama_kandang }},{{ $ayam->stok_ayam }}</option>
                @endforeach
            </select>

            <label for="nomor_hp">Nomor HP Pelanggan:</label>
            <input type="text" name="nomor_hp" id="nomor_hp" placeholder="Masukkan Nomor Hp Pelanggan..." required>

            <button type="submit">Tambah Penjualan Ayam</button>
        </form>

        <!-- Daftar Penjualan Ayam -->
        <div class="data-list">
            <h3>Data Penjualan Ayam</h3>
            @foreach ($penjualanAyam as $ayam)
            <div class="data-item" onclick="toggleDetails(this)">
                <p><strong>Nama Pelanggan:</strong> {{ $ayam->nama_pelanggan }}</p>
                <div class="details">
                    <p><strong>Jumlah:</strong> {{ $ayam->jumlah_penjualan }}</p>
                    <p><strong>Nomor HP Pelanggan:</strong> {{ $ayam->nomor_hp }}</p>
                    <p><strong>Kategori Ayam:</strong> {{ $ayam->kategori_ayam }}</p>
                    <p><strong>Harga:</strong> Rp{{ number_format($ayam->harga, 0, ',', '.') }}</p>
                    <p><strong>Nama Kandang:</strong> {{ $ayam->nama_kandang }}</p>
                    <div>
                        <a href="/edit-penjualan-ayam/{{ $ayam->id }}" style="color: rgb(248, 248, 243); margin-right: 10px;">
                            <button class="delete-button">Edit</button>
                        </a>
                        <form action="/delete-penjualan-ayam/{{ $ayam->id }}" method="POST" style="display: inline;" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-button" style="background-color: #db0000">Hapus</button>
                        </form>
                        <a href="{{ route('penjualan.sendToWhatsapp', $ayam->id) }}" class="btn-whatsapp">
                            Kirim ke WhatsApp
                        </a>
                                               
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script>
        function toggleDetails(element) {
            element.classList.toggle('active');
        }
    </script>
</body>
</html>
