<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Penjualan</title>
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

        .nav-links {
            margin-top: 10px;
        }

        .nav-links a {
            color: #ffffff;
            text-decoration: none;
            margin: 0 15px;
            padding: 5px 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .nav-links a:hover {
            background-color: #db9b00; /* Darker shade for hover */
        }

        /* Container styles */
        .post-container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        h2 {
            color: #333;
            margin-bottom: 15px;
            border-bottom: 2px solid #f6a600; /* Match header color */
            padding-bottom: 5px;
        }

        /* Navigation buttons */
        .navigation-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: center;
        }

        .navigation-buttons a {
            background-color: #f6a600; /* Button color */
            color: white;
            padding: 15px 25px;
            text-decoration: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s, transform 0.3s;
            text-align: center;
        }

        .navigation-buttons a:hover {
            background-color: #db9b00; /* Darker shade on hover */
            transform: translateY(-3px);
        }

        /* Footer styles */
        .footer {
            background-color: #f6a600;
            text-align: center;
            padding: 15px;
            margin-top: 20px;
            color: #ffffff;
            font-size: 14px;
            border-top: 5px solid #db9b00;
        }

        .footer a {
            color: #ffffff;
            text-decoration: underline;
            font-weight: bold;
            transition: color 0.3s;
        }

        .footer a:hover {
            color: #333333;
        }

        /* Mobile responsiveness */
        @media (max-width: 768px) {
            .navigation-buttons {
                flex-direction: column;
                align-items: center;
            }

            .navigation-buttons a {
                margin-bottom: 10px;
                width: 100%;
                max-width: 300px;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Halaman Penjualan</h1>
        <div class="nav-links">
            <a href="/">Home</a>
            <a href="/ayam">Ayam</a>
            <a href="/pakan">Pakan</a>
        </div>
    </div>

    <div class="post-container">
        <h2>Menu Pilihan</h2>

        <!-- Navigation Buttons -->
        <div class="navigation-buttons">
            <a href="/penjualan-ayam">Data Penjualan Ayam</a>
            <a href="/penjualan-pakan">Data Penjualan Pakan</a>
        </div> 
    </div>

    <div class="footer">
        &copy; 2024 Halaman Penjualan. Dikembangkan oleh <a href="#">Tim Kami</a>.
    </div>
</body>
</html>
