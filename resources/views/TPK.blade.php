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

        /* Button styles */
        .back-button {
            display: block;
            width: 200px;
            margin: 30px auto;
            padding: 10px;
            background-color: #f6a600;
            color: white;
            border: none;
            font-size: 18px;
            cursor: pointer;
            text-align: center;
            border-radius: 5px;
            text-decoration: none;
        }

        .back-button:hover {
            background-color: #e58e00;
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
                    <th>Kualitas Nutrisi (Protein %)</th>
                    <th>Ukuran Kemasan (kg)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Japfa Comfeed</td>
                    <td>6000</td>
                    <td>21</td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>Charoen Pokphand</td>
                    <td>6200</td>
                    <td>22</td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>Malindo Feedmill</td>
                    <td>5800</td>
                    <td>20</td>
                    <td>25</td>
                </tr>
                <tr>
                    <td>Sierad Produce</td>
                    <td>6100</td>
                    <td>22</td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>New Hope</td>
                    <td>5900</td>
                    <td>23</td>
                    <td>25</td>
                </tr>
                <tr>
                    <td>Wonokoyo</td>
                    <td>6050</td>
                    <td>22</td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>Gold Coin</td>
                    <td>6150</td>
                    <td>22</td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>Feedmill Inti Prima</td>
                    <td>6000</td>
                    <td>22</td>
                    <td>25</td>
                </tr>
                <tr>
                    <td>Sentra Profeed</td>
                    <td>5850</td>
                    <td>21</td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>CJ Feed</td>
                    <td>6200</td>
                    <td>23</td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>Prima Feedmill</td>
                    <td>6100</td>
                    <td>22</td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>Cargill Feed</td>
                    <td>5950</td>
                    <td>22</td>
                    <td>25</td>
                </tr>
                <tr>
                    <td>Bisi International</td>
                    <td>6000</td>
                    <td>22</td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>Lautan Luas</td>
                    <td>6250</td>
                    <td>23</td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>Sinta Prima Feedmill</td>
                    <td>6050</td>
                    <td>21</td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>Trouw Nutrition</td>
                    <td>6400</td>
                    <td>24</td>
                    <td>25</td>
                </tr>
                <tr>
                    <td>Patriot Feed</td>
                    <td>6150</td>
                    <td>22</td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>Eka Farm</td>
                    <td>5900</td>
                    <td>21</td>
                    <td>25</td>
                </tr>
                <tr>
                    <td>Gofeed</td>
                    <td>6000</td>
                    <td>22</td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>Greenfields Feed</td>
                    <td>6300</td>
                    <td>23</td>
                    <td>50</td>
                </tr>
        </table>

        <!-- Tabel SAW -->
        <h2>Perhitungan SAW</h2>
        <table>
            <thead>
                <tr>
                    <th>Merk Pakan</th>
                    <th>Harga (Rp/kg) [Cost]</th>
                    <th>Kualitas Nutrisi (Protein %) [Benefit]</th>
                    <th>Ukuran Kemasan (kg) [Benefit]</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>P1</td><td>1,066666667</td><td>0,875</td><td>1</td></tr>
                <tr><td>P2</td><td>1,032258065</td><td>0,916666667</td><td>1</td></tr>
                <tr><td>P3</td><td>1,103448276</td><td>0,833333333</td><td>0,5</td></tr>
                <tr><td>P4</td><td>1,049180328</td><td>0,916666667</td><td>1</td></tr>
                <tr><td>P5</td><td>1,084745763</td><td>0,958333333</td><td>0,5</td></tr>
                <tr><td>P6</td><td>1,05785124</td><td>0,916666667</td><td>1</td></tr>
                <tr><td>P7</td><td>1,040650407</td><td>0,916666667</td><td>1</td></tr>
                <tr><td>P8</td><td>1,066666667</td><td>0,916666667</td><td>0,5</td></tr>
                <tr><td>P9</td><td>1,094017094</td><td>0,875</td><td>1</td></tr>
                <tr><td>P10</td><td>1,032258065</td><td>0,958333333</td><td>1</td></tr>
                <tr><td>P11</td><td>1,049180328</td><td>0,916666667</td><td>1</td></tr>
                <tr><td>P12</td><td>1,075630252</td><td>0,916666667</td><td>0,5</td></tr>
                <tr><td>P13</td><td>1,066666667</td><td>0,916666667</td><td>1</td></tr>
                <tr><td>P14</td><td>1,024</td><td>0,958333333</td><td>1</td></tr>
                <tr><td>P15</td><td>1,05785124</td><td>0,875</td><td>1</td></tr>
                <tr><td>P16</td><td>1</td><td>1</td><td>0,5</td></tr>
                <tr><td>P17</td><td>1,040650407</td><td>0,916666667</td><td>1</td></tr>
                <tr><td>P18</td><td>1,084745763</td><td>0,875</td><td>0,5</td></tr>
                <tr><td>P19</td><td>1,066666667</td><td>0,916666667</td><td>1</td></tr>
                <tr><td>P20</td><td>1,015873016</td><td>0,958333333</td><td>1</td></tr>
            </tbody>
        </table>
        <h2>Tabel Kriteria dan Eigen Vector</h2>
        <table>
            <thead>
                <tr>
                    <th>Kriteria</th>
                    <th>Harga</th>
                    <th>Kualitas Nutrisi</th>
                    <th>Ukuran Kemasan</th>
                    <th>Eigen Vector Harga</th>
                    <th>Eigen Vector Kualitas Nutrisi</th>
                    <th>Eigen Vector Ukuran Kemasan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Harga</td>
                    <td>1</td>
                    <td>0,5</td>
                    <td>2</td>
                    <td>0,271164021</td>
                    <td>0,583994709</td>
                    <td>0,14484127</td>
                </tr>
                <tr>
                    <td>Kualitas Nutrisi</td>
                    <td>2</td>
                    <td>1</td>
                    <td>5</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Ukuran Kemasan</td>
                    <td>0,5</td>
                    <td>0,3</td>
                    <td>1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>

        <h2>Hasil Perhitungan</h2>
        <table>
            <thead>
                <tr>
                    <th>Kriteria</th>
                    <th>Harga</th>
                    <th>Kualitas Nutrisi</th>
                    <th>Ukuran Kemasan</th>
                    <th>Bobot</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Harga</td>
                    <td>0,285714286</td>
                    <td>0,277777778</td>
                    <td>0,25</td>
                    <td>0,271164021</td>
                </tr>
                <tr>
                    <td>Kualitas Nutrisi</td>
                    <td>0,571428571</td>
                    <td>0,555555556</td>
                    <td>0,625</td>
                    <td>0,583994709</td>
                </tr>
                <tr>
                    <td>Ukuran Kemasan</td>
                    <td>0,142857143</td>
                    <td>0,166666667</td>
                    <td>0,125</td>
                    <td>0,14484127</td>
                </tr>
            </tbody>
        </table>
        <h2>Pakan Terbaik</h2>
        <table>
            <thead>
                <tr>
                    <th>Pakan</th>
                    <th>Nilai</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Trouw Nutrition</td><td>1753,087</td></tr>
<tr><td>Greendfields Feed</td><td>1729,007</td></tr>
<tr><td>Lautan Luas</td><td>1715,449</td></tr>
<tr><td>CJ Feed</td><td>1701,891</td></tr>
<tr><td>Charoen Pokphand</td><td>1701,307</td></tr>
<tr><td>Patriot Feed</td><td>1687,749</td></tr>
<tr><td>Gold Coin</td><td>1687,749</td></tr>
<tr><td>Prima Feedmill</td><td>1674,19</td></tr>
<tr><td>Sierad Produce</td><td>1674,19</td></tr>
<tr><td>Wonokoyo</td><td>1660,632</td></tr>
<tr><td>Sinta Prima Feedmill</td><td>1660,048</td></tr>
<tr><td>Gofeed</td><td>1647,074</td></tr>
<tr><td>Bisi International</td><td>1647,074</td></tr>
<tr><td>Japfa Comfeed</td><td>1646,49</td></tr>
<tr><td>Feedmill Inti Farma</td><td>1643,453</td></tr>
<tr><td>Cargill Feed</td><td>1629,895</td></tr>
<tr><td>New Hope</td><td>1616,921</td></tr>
<tr><td>Eka Farm</td><td>1615,753</td></tr>
<tr><td>Sentra Profeed</td><td>1605,815</td></tr>
<tr><td>Malindo Feedmill</td><td>1588,052</td></tr>

            </tbody>
        </table>

        <a href="/" class="back-button">Kembali ke Halaman Welcome</a>
    </div>
</body>
</html>
