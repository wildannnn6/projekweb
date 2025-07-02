<?php
include 'c:\xampp\htdocs\projectweb\control\koneksi.php';

    $id_makanan = $_POST['id_makanan'];
    $nama = $_POST['namamakanan'];
    $harga = $_POST['harga'];
    $gambar = $_POST['gambar'];
    $deskripsi = $_POST['deskripsi'];
    
    $simpan = mysqli_query($koneksi, "UPDATE makanan SET nama = '$nama', harga = '$harga', gambar = '$gambar', deskripsi = '$deskripsi' WHERE id_makanan= '$id_makanan' ");

   
    if ($simpan) {
        header("location:/projectweb/model/menuSA.php");
    } else {
        header("location:tambahmenustaf.php");
    }
?>