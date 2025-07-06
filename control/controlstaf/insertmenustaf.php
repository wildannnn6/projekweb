<?php
session_start();

if ( !isset($_SESSION["login"])) {
    header("location:/projectweb/login.php");
    exit;
}

include 'c:\xampp\htdocs\projectweb\control\koneksi.php';


    $nama = $_POST['namamakanan'];
    $harga = $_POST['harga'];
    $gambar = $_POST['gambar'];
    $deskripsi = $_POST['deskripsi'];
 

    $simpan = mysqli_query($koneksi, "INSERT INTO makanan VALUES ('', '$nama' ,'$harga', '$gambar', '$deskripsi' )");

    if ($simpan) {
        header("location:/projectweb/model/menustaf.php");
    } else {
        header("location:tambahmenustaf.php");
    }
?>