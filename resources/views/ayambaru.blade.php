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
        }

        .category:hover {
            background-color: #db9b00;
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

        /* Kandang section always visible */
        .kandang {
            background-color: #e0e0e0;
            padding: 10px;
            border-radius: 5px;
            margin-top: 15px;
            font-weight: bold;
        }

        .post-actions {
            margin-top: 10px;
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
                    post.style.display = 'none'; // Hide all other posts
                }
            });
            // Toggle the selected post visibility
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
        @foreach ($ayams as $ayam)
            <div class="category" onclick="toggleDetails('post-{{ $ayam->id }}')">
                {{ $ayam->kategori_ayam }}
            </div>
            <div id="post-{{ $ayam->id }}" class="post" style="display: none;">
                <p>Harga: Rp {{ number_format($ayam->harga_ayam, 0, ',', '.') }}/kg</p>
                <p>Stok: {{ $ayam->stok_ayam }} ekor</p>
                <p>Tanggal Ditambahkan: {{ \Carbon\Carbon::parse($ayam->created_at)->format('d-m-Y') }}</p>
                <div class="kandang">
                    Kandang: {{ $ayam->nama_kandang }}
                </div>
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

    <div class="back-button">
        <a href="/ayam">Kembali ke Halaman Ayam</a>
    </div>
</body>
</html>
