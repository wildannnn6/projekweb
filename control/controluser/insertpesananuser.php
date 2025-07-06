<?php
include 'c:\xampp\htdocs\projectweb\control\koneksi.php';

    $id_pesanan = $_POST['id_pesanan'];
    $id_user = $_POST['id_user'];
    $id_makanan = $_POST['id_makanan'];
    $nama = $_POST['namamakanan'];
    $harga = $_POST['harga'];
    $gambar = $_POST['gambar'];
    $deskripsi = $_POST['deskripsi'];
 

    $simpan = mysqli_query($koneksi, "INSERT INTO pesanan VALUES ('', '',  '', '$nama' ,'$harga', '$gambar', '$deskripsi' )");

    if ($simpan) {
        header("location:/projectweb/model/pesanan.php");
    } else {
        header("location:/projectweb/model/menuuser.php");
    }
?>