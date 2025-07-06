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
    <h1>SELAMAT DATANG</h1>
        <p>ADMIN</p>
</header>

<nav>
    <ul>
        <li><a href="../view/indexSA.php">Beranda</a></li>
        <li><a href="#">Menu</a></li>
        <li><a href="akun.php">acount</a></li>
        <li><a href="#">Logout</a></li>
    </ul>
</nav>
<br>
<a href="../control/controlSA/tambahmenuSA.php"> <button type="button" class="simple-button"> Tambah Menu</button> </a>

<table>
    <tr>
        <th>nama</th>
        <th>harga</th>
        <th></th>
        <th>deskripsi</th>
        <th></th>
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
                 <a href="../control/controlSA/editmenuSA.php?kode=<?php echo $hasil['id_makanan'] ?>" class="simple-button">edit</a>   
            </td>
            <td>
                 <a href="../control/controlSA/hapusmenuSA.php?kode=<?php echo $hasil['id_makanan'] ?>" class="simple-button" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">hapus</a>   
            </td>
        </tr>
    <?php } ?>
</table>
