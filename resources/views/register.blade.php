<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Register</title>
    <style>
        /* General styles for the body */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #fbe8a6; /* Warm yellow background */
            margin: 0;
            padding: 0;
            color: #333;
        }

        /* Header styles */
        .header {
            background-color: #f6a600; /* Deep yellow-orange */
            padding: 15px 20px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .header h1 {
            color: #ffffff;
            margin: 0;
            font-size: 28px;
        }

        /* Container styles */
        .register-container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
            border-bottom: 2px solid #f6a600; /* Match header color */
            padding-bottom: 5px;
            text-align: center;
        }

        /* Form styles */
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        input {
            padding: 10px;
            border-radius: 5px;
            border: 2px solid #ccc;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        input:focus {
            border-color: #f6a600;
            outline: none;
        }

        button {
            background-color: #f6a600;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #db9b00;
        }

        /* Footer styles */
        .footer {
            background-color: #f6a600;
            color: white;
            text-align: center;
            padding: 10px 20px;
            position: fixed;
            bottom: 0;
            width: 100%;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Halaman Register</h1>
    </div>

    <div class="register-container">
        <h2>Register Akun</h2>
        <form action="/register" method="POST">
            @csrf
            <input name="nama" type="text" placeholder="Masukkan Nama" required>
            <input name="password" type="password" placeholder="Masukkan Password" required>
            <button type="submit">Daftar</button>
        </form>
    </div>

    <div class="footer">
        <p>&copy; 2024 Sistem Manajemen Peternakan. All Rights Reserved.</p>
    </div>
</body>
</html>
