<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - Sistem Manajemen Peternakan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fbe8a6; /* Warm yellow background */
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #f6a600; /* Deep yellow-orange */
            color: white;
            padding: 10px 0;
            text-align: center;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
        }

        h1 {
            color: #f6a600; /* Title color matching header */
            text-align: center;
            margin-bottom: 50px;
        }

        .feature {
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
        }

        .feature-box {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            flex-basis: 30%;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease-in-out;
        }

        .feature-box:hover {
            transform: translateY(-10px);
        }

        .feature-box img {
            width: 100px;
            height: 100px;
            object-fit: contain;
            margin-bottom: 20px;
        }

        .feature-box h2 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
        }

        .feature-box p {
            font-size: 16px;
            color: #777;
        }

        .feature-box a {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #f6a600; /* Button color */
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .feature-box a:hover {
            background-color: #db9b00; /* Darker shade on hover */
        }

        footer {
            text-align: center;
            margin-top: 50px;
            padding: 20px;
            background-color: #f6a600;
            color: white;
        }
    </style>
</head>
<body>

    <header>
        <h1>Sistem Manajemen Peternakan</h1>
    </header>

    <div class="container">
        <h1>Selamat Datang di Sistem Manajemen Peternakan</h1>

        <div class="feature">
            <!-- Fitur Ayam -->
            <div class="feature-box">
                <img src="https://i.pinimg.com/564x/27/b3/71/27b371ae5918dbcaa68c454743fa43cf.jpg" alt="Ayam">
                <h2>Manajemen Ayam</h2>
                <p>Kelola semua informasi terkait ayam seperti jenis, umur, kesehatan, dan lain-lain. Memastikan pengelolaan ternak berjalan dengan baik.</p>
                <a href="/ayam">Kelola Ayam</a>
            </div>

            <!-- Fitur Pakan -->
            <div class="feature-box">
                <img src="https://media.istockphoto.com/id/1403292376/id/vektor/konsep-ikon-kantong-pakan-ayam-pertanian-dan-pertanian-modern.jpg?s=2048x2048&w=is&k=20&c=YsCAoPCJuRAMxQSHoS_I8maKvtK4KfveI_0P7g8oyBQ=" alt="Pakan">
                <h2>Manajemen Pakan</h2>
                <p>Mengelola Stok pakan untuk memastikan ketersediaan pakan yang cukup bagi hewan ternak, sehingga kebutuhan nutrisi mereka dapat terpenuhi secara berkelanjutan, .</p>
                <a href="/pakan">Kelola Pakan</a>
            </div>

            <!-- Fitur Penjualan -->
            <div class="feature-box">
                <img src="https://static.vecteezy.com/system/resources/previews/014/655/524/original/finance-graph-chart-icon-simple-style-vector.jpg" alt="Penjualan">
                <h2>Manajemen Penjualan</h2>
                <p>Lacak dan kelola penjualan hasil ternak, penjadwalan penjualan, serta manajemen pelanggan dan pendapatan.</p>
                <a href="/penjual">Kelola Penjualan</a>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy;Peternakan Ayam Bapak Sarwani</p>
    </footer>

</body>
</html>
