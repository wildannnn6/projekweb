<link rel="stylesheet" href="../view/style.css">

<?php
include '../control/koneksi.php';

$query = "SELECT * FROM makanan";
$sql = mysqli_query($koneksi, $query);
?>

<header>
    <h1>SELAMAT DATANG</h1>
        <p>STAF</p>
</header>

<nav>
    <ul>
        <li><a href="../view/indexstaf.php">Beranda</a></li>
        <li><a href="#">Menu</a></li>
        <li><a href="#">Logout</a></li>
    </ul>
</nav>
<br>
<a href="../control/controlstaf/tambahmenustaf.php"> <button type="button" class="simple-button"> Tambah Menu</button> </a>

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
                 <a href="../control/controlstaf/editmenustaf.php?kode=<?php echo $hasil['id_makanan'] ?>" class="simple-button">edit</a>   
            </td>
            <td>
                 <a href="../control/controlstaf/hapusmenustaf.php?kode=<?php echo $hasil['id_makanan'] ?>" class="simple-button" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');" >hapus</a>   
            </td>
        </tr>
    <?php } ?>
</table>
