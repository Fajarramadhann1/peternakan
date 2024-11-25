<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Sistem Manajemen Peternakan</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #fbe8a6; /* Warm yellow background */
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #4e54c8; /* Matching color with system */
            color: white;
            padding: 20px;
            text-align: center;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #4e54c8; /* Consistent color */
            text-align: center;
            margin-bottom: 30px;
        }

        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        input:focus {
            outline: none;
            border-color: #4e54c8;
            box-shadow: 0 0 5px rgba(78, 84, 200, 0.5);
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #4e54c8; /* Button color matching header */
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s ease-in-out;
        }

        button:hover {
            background-color: #3c41a5; /* Darker shade on hover */
        }

        footer {
            text-align: center;
            padding: 10px;
            background-color: #4e54c8;
            color: white;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <header>
        <h1>Sistem Manajemen Peternakan</h1>
    </header>

    <div class="container">
        <h1>Login</h1>
        <form action="/login" method="POST">
            @csrf
            <input name="nama" type="text" placeholder="Nama" required>
            <input name="password" type="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>

    <footer>
        <p>&copy; Peternakan Ayam Bapak Sarwani</p>
    </footer>

</body>
</html>
