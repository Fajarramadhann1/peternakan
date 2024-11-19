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
        }

        /* Header styles */
        .header {
            background-color: #8b4513;
            padding: 10px;
            text-align: center;
        }

        .header h1 {
            color: white;
            margin: 0;
            font-size: 24px;
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
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s;
        }

        .edit-container:hover {
            box-shadow: 0 8px 40px rgba(0, 0, 0, 0.2);
        }

        /* Styling the form */
        form {
            display: flex;
            flex-direction: column;
        }

        input[type="text"],
        textarea {
            padding: 15px;
            margin: 10px 0;
            border-radius: 5px;
            border: 2px solid #ccc;
            font-size: 16px;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        input[type="text"]:focus,
        textarea:focus {
            border-color: #a0522d;
            outline: none;
            box-shadow: 0 0 5px rgba(160, 82, 45, 0.5);
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
        }

        button:hover {
            background-color: #a0522d;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Edit Data Pakan</h1>
    </div>

    <div class="edit-container">
        <form action="/edit-pakan/{{ $pakan->id }}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="nama_pakan" value="{{ $pakan->nama_pakan }}" placeholder="Judul Postingan" required>
            <textarea name="stok_pakan" placeholder="Isi konten..." required>{{ $pakan->stok_pakan }}</textarea>
            <button type="submit">Save Changes</button>
        </form>
    </div>
</body>
</html>
