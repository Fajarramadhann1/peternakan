<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman TPK</title>
    <style>
        /* General styles */
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #fbe8a6, #f6a600);
            margin: 0;
            padding: 0;
            color: #333;
            line-height: 1.6;
        }

        .header {
            background: rgba(246, 166, 0, 0.9);
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            animation: slideDown 0.5s ease;
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

        .container {
            max-width: 900px;
            margin: 40px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
            border-bottom: 3px solid #f6a600;
            padding-bottom: 10px;
            text-transform: uppercase;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #f6a600;
            color: white;
            text-transform: uppercase;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #fbe8a6;
            transform: scale(1.01);
            transition: transform 0.2s, background-color 0.3s;
        }

        /* Responsive */
        @media (max-width: 768px) {
            table, thead, tbody, th, td, tr {
                display: block;
            }
            tr {
                margin-bottom: 15px;
            }
            td {
                text-align: right;
                position: relative;
                padding-left: 50%;
            }
            td::before {
                content: attr(data-label);
                position: absolute;
                left: 10px;
                font-weight: bold;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <h1>Halaman TPK</h1>
    </div>

    <!-- Main Container -->
    <div class="container">
        <h2>Daftar Merk Pakan</h2>
        <table>
            <thead>
                <tr>
                    <th>Merk Pakan</th>
                    <th>Harga (Rp/kg)</th>
                    <th>Kualitas Nutrisi (%)</th>
                    <th>Ukuran Kemasan (kg)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td data-label="Merk Pakan">Japfa Comfeed</td>
                    <td data-label="Harga (Rp/kg)">6000</td>
                    <td data-label="Kualitas Nutrisi">21</td>
                    <td data-label="Ukuran Kemasan">50</td>
                </tr>
                <tr>
                    <td data-label="Merk Pakan">Charoen Pokphand</td>
                    <td data-label="Harga (Rp/kg)">6200</td>
                    <td data-label="Kualitas Nutrisi">22</td>
                    <td data-label="Ukuran Kemasan">50</td>
                </tr>
                <tr>
                    <td data-label="Merk Pakan">Malindo Feedmill</td>
                    <td data-label="Harga (Rp/kg)">5800</td>
                    <td data-label="Kualitas Nutrisi">20</td>
                    <td data-label="Ukuran Kemasan">25</td>
                </tr>
                <tr>
                    <td data-label="Merk Pakan">Prima Feedmill</td>
                    <td data-label="Harga (Rp/kg)">6100</td>
                    <td data-label="Kualitas Nutrisi">22</td>
                    <td data-label="Ukuran Kemasan">50</td>
                </tr>
                <tr>
                    <td data-label="Merk Pakan">Cargill Feed</td>
                    <td data-label="Harga (Rp/kg)">5950</td>
                    <td data-label="Kualitas Nutrisi">22</td>
                    <td data-label="Ukuran Kemasan">25</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>

