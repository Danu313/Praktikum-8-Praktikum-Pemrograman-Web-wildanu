<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pendaftaran</title>
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
            font-size: 16px; /* Ubah ukuran teks secara umum */
        }

        .result-container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 500px;
            box-sizing: border-box;
        }

        h1 {
            font-size: 2rem; /* Ubah ukuran teks judul */
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 0px;
        }

        th, td {
            padding: 10px;
        }

        @media (max-width: 768px) {
            .result-container {
                padding: 15px;
            }

            h1 {
                font-size: 1.75rem; /* Ubah ukuran teks judul di layar kecil */
            }

            table, th, td {
                padding: 8px;
            }
        }

        @media (max-width: 480px) {
            .result-container {
                padding: 10px;
            }

            h1 {
                font-size: 1.5rem; /* Ubah ukuran teks judul di layar sangat kecil */
            }

            table, th, td {
                padding: 6px;
            }
        }
    </style>
</head>
<body>
    <div class="result-container">
        <h1>Terima Kasih Telah Mendaftar</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Ambil data dari form
            $nama = htmlspecialchars($_POST['nama']);
            $email = htmlspecialchars($_POST['email']);
            $kategori = htmlspecialchars($_POST['pilih']);
            $jenis_kelamin = htmlspecialchars($_POST['gander']);
            $nomor_hp = htmlspecialchars($_POST['num']);

            // Tampilkan data yang telah diambil
            echo "<table>";
            echo "<tr><td>Nama</td><td>" . $nama . "</td></tr>";
            echo "<tr><td>Email</td><td>" . $email . "</td></tr>";
            echo "<tr><td>Kategori Lomba</td><td>" . $kategori . "</td></tr>";
            echo "<tr><td>Jenis Kelamin</td><td>" . ($jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan') . "</td></tr>";
            echo "<tr><td>Nomor HP</td><td>" . $nomor_hp . "</td></tr>";
            echo "</table>";
        } else {
            echo "<p>Form belum disubmit dengan benar.</p>";
        }
        ?>
    </div>
</body>
</html>
