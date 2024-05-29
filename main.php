<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Gelar Karya Mahasiswa</title>
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('https://plus.unsplash.com/premium_photo-1682146042060-3617a8f344c0?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .form-container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 500px;
            box-sizing: border-box;

        }

        h1 {
            text-align: center;
            font-size: 1.5rem;
        }

        table {
            width: 100%;
        }

        td {
            padding: 10px 0;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        select {
            width: 100%;
            padding: 8px;
            margin: 4px 0;
            box-sizing: border-box;
        }

        .tombol {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .tombol:hover {
            background-color: #45a049;
        }

        @media (max-width: 768px) {
            .form-container {
                padding: 15px;
            }

            h1 {
                font-size: 1.25rem;
            }

            td {
                padding: 8px 0;
            }

            input[type="text"],
            input[type="email"],
            input[type="tel"],
            select {
                padding: 6px;
                margin: 3px 0;
            }

            .tombol {
                padding: 8px;
            }
        }

        @media (max-width: 480px) {
            .form-container {
                padding: 10px;
            }

            h1 {
                font-size: 1rem;
            }

            td {
                padding: 6px 0;
            }

            input[type="text"],
            input[type="email"],
            input[type="tel"],
            select {
                padding: 5px;
                margin: 2px 0;
            }

            .tombol {
                padding: 6px;
            }
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h1>PENDAFTARAN GELAR KARYA MAHASISWA</h1>
        <form method="POST" action="send.php">
            <table>
                <tr>
                    <td><label for="nama">Nama</label></td>
                    <td>:</td>
                    <td><input type="text" name="nama" id="nama" required></td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td>:</td>
                    <td><input type="email" name="email" id="email" required></td>
                </tr>
                <tr>
                    <td><label for="pilih">Kategori Lomba</label></td>
                    <td>:</td>
                    <td>
                        <select name="pilih" id="pilih" required>
                            <option value="UI/UX">UI/UX</option>
                            <option value="Pemrograman">Pemrograman</option>
                            <option value="Bmc">BMC</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="gander" value="L" required>Laki-laki
                        <input type="radio" name="gander" value="P" required>Perempuan
                    </td>
                </tr>
                <tr>
                    <td><label for="num">Nomor HP</label></td>
                    <td>:</td>
                    <td><input type="tel" name="num" id="num" pattern="[0-9]{10,13}" required></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <input type="submit" name="submit" value="Submit" class="tombol">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>