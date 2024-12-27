<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Pakan Baru</title>
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

        .back-button a {
            background-color: #f6a600;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 18px;
            transition: background-color 0.3s, transform 0.2s;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
        }

        .back-button a:hover {
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

        .post-list {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .post {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 1rem;
            width: calc(33% - 2rem);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        .post h3 {
            margin: 0 0 0.5rem;
            color: #333;
        }

        .post p {
            margin: 0.5rem 0;
            color: #555;
        }

        .post span {
            font-weight: bold;
            color: #333;
        }

        .action-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 1rem;
        }

        .action-buttons a,
        .action-buttons button {
            text-decoration: none;
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
        }

        .action-buttons a {
            background-color: #4CAF50;
            color: white;
        }

        .action-buttons a:hover {
            background-color: #45a049;
            transform: scale(1.05);
        }

        .action-buttons button {
            background-color: #f44336;
            color: white;
        }

        .action-buttons button:hover {
            background-color: #e53935;
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

            .post {
                width: 100%;
            }

            .action-buttons {
                flex-direction: column;
                gap: 10px;
            }
        }

    </style>
    <script>
        async function deletePakan(event, form) {
            event.preventDefault();
            if (confirm('Yakin ingin menghapus data ini?')) {
                try {
                    const response = await fetch(form.action, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({ _method: 'DELETE' })
                    });

                    if (response.ok) {
                        form.closest('.post').remove();
                        alert('Data berhasil dihapus.');
                    } else {
                        alert('Gagal menghapus data.');
                    }
                } catch (error) {
                    alert('Terjadi kesalahan. Coba lagi nanti.');
                }
            }
        }
    </script>
</head>
<body>
    <div class="header">
        <h1>Pakan Baru</h1>
    </div>

    <div class="post-container">
        <h2>Data Pakan Tersimpan</h2>
        <div class="post-list">
            <!-- Menggunakan variabel $pakans yang dikirim dari controller -->
            @foreach ($pakans as $data)
            <div class="post">
                <!-- Menampilkan Merk Pakan -->
                <h3>{{ $data->pakan }}</h3> <!-- Menampilkan nama merk pakan -->
                <!-- Menampilkan Stok -->
                <p>Stok: {{ $data->stok }}</p> <!-- Menampilkan jumlah stok -->
                <!-- Menampilkan Harga -->
                <p>Harga: Rp {{ number_format($data->harga, 0, ',', '.') }}</p>
                <!-- Menampilkan Tanggal Ditambahkan -->
                <p><span>Tanggal Ditambahkan:</span> {{ \Carbon\Carbon::parse($data->created_at)->format('d-m-Y') }}</p>

                <div class="action-buttons">
                    <a href="/edit-pakan/{{ $data->id }}">Edit</a>
                    <form action="/delete-pakan/{{ $data->id }}" method="POST" onsubmit="deletePakan(event, this)">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="back-button">
        <a href="/pakan">Kembali ke Halaman Pakan</a>
    </div>
</body>
</html>
