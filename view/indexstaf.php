<?php
session_start();

if ( !isset($_SESSION["login"])) {
    header("location:/projectweb/login.php");
    exit;
}

include '../control/koneksi.php';

$query = "SELECT * FROM makanan";
$sql = mysqli_query($koneksi, $query);
?>

    

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aneka Rasa - Home</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <header>
        <h1>SELAMAT DATANG</h1>
        <p>STAF</p>
    </header>

    <nav>
        <ul>
            <li><a href="#">Beranda</a></li>
            <li><a href="../model/menustaf.php">Menu</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </nav>

    <div class="hero">
        <h1>Selamat Datang di Aneka Rasa!</h1>
        <p>Nikmati hidangan lezat dan pengalaman bersantap yang tak terlupakan.</p>
    </div>

    <div class="container">
        <h2>Menu Kami</h2>

       
        <?php while ($hasil = mysqli_fetch_assoc($sql)) { ?> 

        <div class="food-item">
                <img src="<?php echo $hasil['gambar']; ?>">
            <div>
                <h3><?php  echo $hasil ['nama'];?></h3>
                <p><?php  echo $hasil ['deskripsi'];?></p>
            </div>
        </div>
<?php } ?>
    <footer>
        <p>&copy; 2025 Aneka Rasa. Semua Hak Dilindungi.</p>
    </footer>
</body>

</html>