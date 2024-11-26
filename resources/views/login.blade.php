<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Sistem Manajemen Peternakan</title>
    <style>
        /* General body styling */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #fbe8a6; /* Warm yellow background */
            margin: 0;
            padding: 0;
            color: #333;
        }

        /* Header styling */
        .header {
            background-color: #f6a600; /* Consistent deep yellow-orange */
            padding: 15px 20px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .header h1 {
            color: #ffffff;
            margin: 0;
            font-size: 28px;
        }

        /* Container styling */
        .login-container {
            max-width: 500px; /* Match the register form width */
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        h2 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 2px solid #f6a600;
            padding-bottom: 5px;
        }

        /* Input and button styling */
        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 2px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        input:focus {
            border-color: #f6a600;
            outline: none;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #f6a600;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #db9b00;
        }

        /* Additional link styling */
        .signup-link {
            text-align: center;
            margin-top: 15px;
        }

        .signup-link a {
            color: #f6a600;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }

        .signup-link a:hover {
            color: #db9b00;
        }

        /* Footer styling */
        .footer {
            text-align: center;
            padding: 10px;
            background-color: #f6a600;
            color: white;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Sistem Manajemen Peternakan</h1>
    </div>

    <div class="login-container">
        <h2>Login Akun</h2>
        <form action="/login" method="POST">
            @csrf
            <input name="nama" type="text" placeholder="Masukkan Nama" required>
            <input name="password" type="password" placeholder="Masukkan Password" required>
            <button type="submit">Login</button>
        </form>
        <div class="signup-link">
            <p>Belum memiliki akun? <a href="/register">Buat Akun</a></p>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2024 Peternakan Ayam Bapak Sarwani</p>
    </div>
</body>
</html>
