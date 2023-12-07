<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Registrasi</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .hasil-registrasi {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            max-width: 400px;
            width: 100%;
            position: relative;
            overflow: hidden;
        }

        h2 {
            color: #4caf50;
            margin-bottom: 20px; 
        }

        p {
            margin: 10px 0;
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            background-color: #ddd;
            border-radius: 5px;
            padding: 10px;
            margin: 10px 0;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
            margin-top: 20px; 
        }

        button:hover {
            background-color: #45a049;
        }

        button a {
            text-decoration: none;
            color: #fff;
        }

        img {
            width: 100%;
            max-height: 150px;
            object-fit: cover;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            margin-bottom: 20px; 
        }
    </style>
</head>
<body>

<div class="hasil-registrasi">
    <img src="https://petik-jombang-next.vercel.app/logo.png" alt="Registration Image">
    <h2>Hasil Registrasi</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
        $umur = isset($_POST['umur']) ? $_POST['umur'] : '';
        $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
        $pendidikan = isset($_POST['pendidikan']) ? $_POST['pendidikan'] : '';
        $hobi = isset($_POST['hobi']) ? $_POST['hobi'] : array();

        echo "<p>Nama Lengkap: $nama</p>";
        echo "<p>Umur: $umur</p>";
        echo "<p>Jenis Kelamin: $gender</p>";
        echo "<p>Pendidikan Terakhir: $pendidikan</p>";

        if (!empty($hobi)) {
            echo "<p>Hobi:</p>";
            echo "<ul>";
            foreach ($hobi as $h) {
                echo "<li>$h</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Tidak ada hobi yang dipilih.</p>";
        }
    } else {
        echo "<p>Invalid request</p>";
    }
    ?>

    <form>
        <button><a href="form.php">Kembali</a></button>
    </form>
</div>

</body>
</html>
