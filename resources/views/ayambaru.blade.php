<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Ayam</title>
    <style>
        /* Styles tetap sama seperti versi sebelumnya */
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

        .ayam-list h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .category {
            background-color: #f6a600;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 8px;
            color: white;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .category:hover {
            background-color: #db9b00;
        }

        .category .kandang-info {
            font-size: 14px;
            font-style: italic;
            color: #fff8e8;
        }

        .post {
            background-color: #ffffff;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .post p {
            margin: 5px 0;
            font-size: 16px;
        }

        .kandang {
            background-color: #e0e0e0;
            padding: 10px;
            border-radius: 5px;
            margin-top: 15px;
            font-weight: bold;
        }

        .button-group {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }

        .button-group button,
        .button-group a {
            padding: 8px 15px;
            font-size: 14px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
            color: #ffffff;
            transition: background-color 0.3s, transform 0.2s;
        }

        .button-group .edit-button {
            background-color: #999999;
        }

        .button-group .edit-button:hover {
            background-color: #747474;
            transform: scale(1.05);
        }

        .button-group .delete-button {
            background-color: #f44336;
        }

        .button-group .delete-button:hover {
            background-color: #e53935;
            transform: scale(1.05);
        }
        .back-button a {
            background-color: #f6a600;
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
            background-color: #db9b00;
            transform: scale(1.05);
        }
    </style>
    <script>
        function toggleDetails(id) {
            const post = document.getElementById(id);
            const allPosts = document.querySelectorAll('.post');
            allPosts.forEach(post => {
                if (post !== document.getElementById(id)) {
                    post.style.display = 'none';
                }
            });
            if (post.style.display === 'none' || post.style.display === '') {
                post.style.display = 'block';
            } else {
                post.style.display = 'none';
            }
        }
    </script>
</head>
<body>
    <div class="header">
        <h1>Data Ayam</h1>
    </div>

    <div class="ayam-list">
        <h2>Daftar Kategori Ayam</h2>
        @foreach ($kandangs as $kandang => $ayamsByKandang)
            <div class="kandang">
                <h3>Kandang: {{ $kandang }}</h3>
                @php
                    $sortedAyams = $ayamsByKandang->sortBy(function($ayam) {
                        return ['Ayam Kecil' => 1, 'Ayam Sedang' => 2, 'Ayam Besar' => 3][$ayam->kategori_ayam] ?? 4;
                    });
                @endphp
                @foreach ($sortedAyams as $ayam)
                    <div class="category" onclick="toggleDetails('post-{{ $ayam->id }}')">
                        <span>{{ $ayam->kategori_ayam }}</span>
                        <span class="kandang-info">Stok: {{ $ayam->stok_ayam }} ekor</span>
                    </div>
                    <div id="post-{{ $ayam->id }}" class="post" style="display: none;">
                        <p>Harga: Rp {{ number_format($ayam->harga_ayam, 0, ',', '.') }}/kg</p>
                        <p>Stok: {{ $ayam->stok_ayam }} ekor</p>
                        <p>Tanggal Ditambahkan: {{ \Carbon\Carbon::parse($ayam->created_at)->format('d-m-Y') }}</p>
                        <div class="button-group">
                            <a href="/edit-ayam/{{ $ayam->id }}" class="edit-button">Edit</a>
                            <form action="/delete-ayam/{{ $ayam->id }}" method="POST" style="margin: 0;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-button">Hapus</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>

    <div class="back-button">
        <a href="/ayam">Kembali ke Halaman Ayam</a>
    </div>
</body>
</html>
