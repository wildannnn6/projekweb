<?php
include 'c:\xampp\htdocs\projectweb\control\koneksi.php';


    $nama = $_POST['namamakanan'];
    $harga = $_POST['harga'];
    $gambar = $_POST['gambar'];
    $deskripsi = $_POST['deskripsi'];
 

    $simpan = mysqli_query($koneksi, "INSERT INTO makanan VALUES ('', '$nama' ,'$harga', '$gambar', '$deskripsi' )");

    if ($simpan) {
        header("location:/projectweb/model/menuSA.php");
    } else {
        header("location:tambahmenustaf.php");
    }
?>