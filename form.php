<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .form-registrasi {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
            max-width: 400px;
            width: 100%;
            border: 2px solid #4caf50;
            border-bottom: 0;
            border-top: 2px solid #4caf50;
        }

        h2 {
            color: #4caf50;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input,
        select,
        checkbox {
            margin: 10px 0;
            padding: 15px;
            border: 1px solid #4caf50;
            border-radius: 8px;
        }

        input[type="checkbox"] {
            margin-right: 8px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 15px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        img {
            width: 100%;
            max-height: 150px;
            object-fit: cover;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }

        .hobi-group {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 15px;
        }

        .hobi-group label {
            margin-right: 15px;
            color: #4caf50;
            cursor: pointer;
        }

        .hobi-group label:hover {
            color: #45a049;
        }

        .gender-group {
            display: flex;
            align-items: center;
            margin: 10px 0;
        }

        .gender-group label {
            margin-right: 5px;
            color: black;
        }

        input[type="radio"] {
            margin: 0;
        }
    </style>
</head>
<body>

<div class="form-registrasi">
    <img src="https://petik-jombang-next.vercel.app/logo.png" alt="Registration Image">
    <h2>Form Registrasi</h2>

    <form action="p_form.php" method="post">
        <p>Isi Nama Lengkap Anda Dengan Benar:</p>
        <input type="text" name="nama" placeholder="Nama Lengkap">
        <p>Umur Saat Ini:</p>
        <input type="number" name="umur" placeholder="Umur">

        <div class="gender-group">
            <label>Pilih Jenis Kelamin:</label>
            <label><input type="radio" name="gender" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="gender" value="perempuan"> Perempuan</label>
        </div>

        
            <p>Pilih Pendidikan Terakhir:</p>
        <select name="pendidikan">
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
            <option value="DI">DI</option>
            <option value="DII">DII</option>
            <option value="DIII">DIII</option>
            <option value="S1">S1</option>
            <option value="S2">S2</option>
            <option value="S3">S3</option>
        </select>
              <p>Pilih Hobi:</p>
        <div class="hobi-group">
            <label><input type="checkbox" name="hobi[]" value="membaca buku"> Membaca Buku</label>
            <label><input type="checkbox" name="hobi[]" value="travelling"> Travelling</label>
            <label><input type="checkbox" name="hobi[]" value="olahraga"> Olahraga</label>
            <label><input type="checkbox" name="hobi[]" value="nonton"> Nonton</label>
            <label><input type="checkbox" name="hobi[]" value="hiking"> Hiking</label>
            <label><input type="checkbox" name="hobi[]" value="mancing"> Mancing</label>
        </div>

        <input type="submit" value="Daftar">
    </form>
</div>

</body>
</html>