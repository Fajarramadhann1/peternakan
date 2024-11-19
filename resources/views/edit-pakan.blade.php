<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Post</title>
    <style>
        /* General styles for the body */
        body {
            font-family: 'Verdana', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #444;
            overflow-x: hidden; /* Prevent horizontal scroll */
        }

        /* Header styles */
        .header {
            background-color: #8b4513;
            padding: 15px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            transition: background-color 0.5s;
        }

        .header h1 {
            color: white;
            margin: 0;
            font-size: 28px;
            animation: slideDown 0.5s ease;
        }

        @keyframes slideDown {
            from { transform: translateY(-20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        h1 {
            text-align: center;
            color: #a0522d;
            margin: 30px 0;
            font-size: 36px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
        }

        /* Container for the form */
        .edit-container {
            max-width: 800px;
            margin: 20px auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s, transform 0.3s;
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .edit-container:hover {
            box-shadow: 0 8px 40px rgba(0, 0, 0, 0.2);
            transform: scale(1.02);
        }

        /* Styling the form */
        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin: 15px 0 5px;
            font-size: 18px;
            font-weight: bold;
            color: #8b4513;
        }

        select, input[type="number"], textarea {
            padding: 15px;
            margin: 10px 0;
            border-radius: 5px;
            border: 2px solid #ccc;
            font-size: 16px;
            transition: border-color 0.3s, box-shadow 0.3s, background-color 0.3s;
        }

        select:focus, input[type="number"]:focus, textarea:focus {
            border-color: #a0522d;
            outline: none;
            box-shadow: 0 0 5px rgba(160, 82, 45, 0.5);
            background-color: #fff8e1; /* Highlight background on focus */
        }

        button {
            background-color: #8b4513;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s, transform 0.3s;
            margin-top: 15px;
            position: relative;
            overflow: hidden;
        }

        button::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.3);
            left: -100%;
            top: 0;
            transition: left 0.5s ease;
            z-index: 0;
        }

        button:hover::after {
            left: 0;
        }

        button:hover {
            background-color: #a0522d;
            transform: translateY(-2px);
            z-index: 1;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Edit Data Pakan</h1>
    </div>

    <div class="edit-container">
        <form action="/edit-post/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Dropdown untuk memilih jenis pakan -->
            <label for="pakan">Merk Pakan:</label>
            <select name="title" id="pakan" required>
                <option value="Japfa Comfeed" {{ $post->title == 'Japfa Comfeed' ? 'selected' : '' }}>Japfa Comfeed</option>
                <option value="Charoen Pokphand" {{ $post->title == 'Charoen Pokphand' ? 'selected' : '' }}>Charoen Pokphand</option>
                <option value="Malindo Feedmill" {{ $post->title == 'Malindo Feedmill' ? 'selected' : '' }}>Malindo Feedmill</option>
                <option value="Sierad Produce" {{ $post->title == 'Sierad Produce' ? 'selected' : '' }}>Sierad Produce</option>
                <option value="New Hope" {{ $post->title == 'New Hope' ? 'selected' : '' }}>New Hope</option>
                <option value="Wonokoyo" {{ $post->title == 'Wonokoyo' ? 'selected' : '' }}>Wonokoyo</option>
                <option value="Gold Coin" {{ $post->title == 'Gold Coin' ? 'selected' : '' }}>Gold Coin</option>
                <option value="Feedmill Inti Prima" {{ $post->title == 'Feedmill Inti Prima' ? 'selected' : '' }}>Feedmill Inti Prima</option>
                <option value="Sentra Profeed" {{ $post->title == 'Sentra Profeed' ? 'selected' : '' }}>Sentra Profeed</option>
                <option value="CJ Feed" {{ $post->title == 'CJ Feed' ? 'selected' : '' }}>CJ Feed</option>
                <option value="Prima Feedmill" {{ $post->title == 'Prima Feedmill' ? 'selected' : '' }}>Prima Feedmill</option>
                <option value="Cargill Feed" {{ $post->title == 'Cargill Feed' ? 'selected' : '' }}>Cargill Feed</option>
                <option value="Bisi International" {{ $post->title == 'Bisi International' ? 'selected' : '' }}>Bisi International</option>
                <option value="Lautan Luas" {{ $post->title == 'Lautan Luas' ? 'selected' : '' }}>Lautan Luas</option>
                <option value="Sinta Prima Feedmill" {{ $post->title == 'Sinta Prima Feedmill' ? 'selected' : '' }}>Sinta Prima Feedmill</option>
                <option value="Trouw Nutrition" {{ $post->title == 'Trouw Nutrition' ? 'selected' : '' }}>Trouw Nutrition</option>
                <option value="Patriot Feed" {{ $post->title == 'Patriot Feed' ? 'selected' : '' }}>Patriot Feed</option>
                <option value="Eka Farm" {{ $post->title == 'Eka Farm' ? 'selected' : '' }}>Eka Farm</option>
                <option value="JGofeed" {{ $post->title == 'JGofeed' ? 'selected' : '' }}>JGofeed</option>
                <option value="Greenfields Feed" {{ $post->title == 'Greenfields Feed' ? 'selected' : '' }}>Greenfields Feed</option>
            </select>

            <!-- Form untuk mengedit stok -->
            <label for="stok">Stok Pakan:</label>
            <input type="number" name="body" id="stok" min="1" max="100" value="{{ preg_replace('/[^0-9]/', '', $post->body) }}" required placeholder="Tambahkan stok (1-100)">

            <!-- Dropdown untuk mengedit harga pakan -->
            <label for="harga">Harga Pakan:</label>
            <select name="harga" id="harga" required>
                @for($i = 1000; $i <= 500000; $i += 1000)
                    <option value="{{ $i }}" {{ $post->harga == $i ? 'selected' : '' }}>Rp {{ number_format($i, 0, ',', '.') }}</option>
                @endfor
            </select>

            <button type="submit">Save Changes</button>
        </form>
    </div>
</body>
</html>
