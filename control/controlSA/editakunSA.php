<?php

include 'c:\xampp\htdocs\projectweb\control\koneksi.php';

$query = "SELECT * FROM makanan";
$sql = mysqli_query($koneksi, $query);
?>


<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Produk Menarik</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #e9ecef;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .form-section-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
            max-width: 500px;
            margin: 40px auto;
            box-sizing: border-box;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.6rem;
            font-weight: 600;
            color: #343a40;
            font-size: 1.05rem;
        }

        .form-input {
            width: 100%;
            padding: 0.9rem 1.1rem;
            border: 1px solid #ced4da;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 1rem;
            color: #495057;
            background-color: #f8f9fa;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .form-input:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
            background-color: #ffffff;
        }

        .form-input::placeholder {
            color: #adb5bd;
            font-style: italic;
        }

        textarea.form-input {
            resize: vertical;
            min-height: 100px;
        }

        .file-upload-info {
            font-size: 0.85rem;
            color: #6c757d;
            margin-top: 0.3rem;
            display: block;
        }

        .simple-button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: normal;
            text-align: center;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            background-color: #7f2d0f;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .simple-button:hover {
            background-color: black;
        }

        .simple-button:active {
            background-color: black;
        }
    </style>
</head>

<body>
    <div class="form-section-container">

        <?php
        $kode = $_GET['kode'];
        $data = mysqli_query($koneksi, "SELECT * FROM users WHERE id_user = '$kode'");
        while ($hasil = mysqli_fetch_array($data)) { ?>


            <form action="updateakunSA.php" method="POST">
                <input type="hidden" name="id_user" value="<?php echo $hasil['id_user']; ?>">

                <div class="form-group">
                    <label for="namauser" class="form-label">
                        masukan username baru
                    </label>
                    <div>
                        <input class="form-input" type="text" name="namauser" value="<?php echo $hasil ['username_user'];?>" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">
                       masukan password baru
                    </label>
                    <div>
                        <input class="form-input" type="text" name="passworduser" required>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="submit" class="simple-button">Edit akun</button>
                    <button type="reset" class="simple-button">Reset</button>
                </div>

            </form>
            <?php
        }
        ?>
    </div>
</body>

</html>