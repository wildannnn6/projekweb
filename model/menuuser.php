<link rel="stylesheet" href="../view/style.css">

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

<header>
    <h1>Aneka Rasa</h1>
    <p>Tempatnya Beragam Kelezatan</p>
</header>

<nav>
    <ul>
        <li><a href="../view/indexuser.php">Beranda</a></li>
        <li><a href="#">Menu</a></li>
        <li><a href="pesanan.php">pesanan</a></li>
        <li><a href="#">Logout</a></li>
    </ul>
</nav>

<table>
    <tr>
        <th>nama</th>
        <th>harga</th>
        <th></th>
        <th>deskripsi</th>
        <th></th>
    </tr>

    <form action="/projectweb/control/controluser/insertpesananuser.php" method="post">

        <?php

        while ($hasil = mysqli_fetch_assoc($sql)) { ?>

                
            <tr>
                <td name="nama">
                    <?php echo $hasil['nama']; ?>
                </td>

                <td name="harga">
                    <?php echo $hasil['harga']; ?>
                </td>

                <td name="gambar">
                    <img src="<?php echo $hasil['gambar']; ?>">
                </td>

                <td name="deskripsi">
                    <?php echo $hasil['deskripsi']; ?>
                </td>
                <td>
                    <a href="pesanan.php?kode=<?php echo $hasil['id_makanan'] ?>" class="simple-button">+</a>
                </td>
            </tr>
        <?php } ?>
    </form>
</table>