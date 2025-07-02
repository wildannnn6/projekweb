<link rel="stylesheet" href="../view/style.css">

<?php
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
<form action="insertpes.php" method="post"></form>
<table>
    <tr>
        <th>nama</th>
        <th>harga</th>
        <th></th>
        <th>deskripsi</th>
        <th></th>
    </tr>

    <?php

    while ($hasil = mysqli_fetch_assoc($sql)) { ?>


        <tr>
            <td name="nama">
                <?php echo $hasil['nama']; ?>
            </td>

            <td name="harga">
                <?php echo $hasil['harga']; ?>
            </td>

            <td>
                <img src="<?php echo $hasil['gambar']; ?>">
            </td>

            <td>
                <?php echo $hasil['deskripsi']; ?>
            </td>
            <td>
                <a href="pesanan.php?kode=<?php echo $hasil['id_makanan'] ?>" class="simple-button">+</a>
            </td>
        </tr>
    <?php } ?>
</table>
</form>