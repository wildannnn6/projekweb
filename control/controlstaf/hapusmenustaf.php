<?php
include 'c:/xampp/htdocs/projectweb/control/koneksi.php';

    $kode = $_GET['kode'];

    $hapus = mysqli_query($koneksi,"DELETE FROM makanan WHERE id_makanan ='$kode'");

    if($hapus) {
        header("location:/projectweb/model/menustaf.php");
    } else {
        echo "Data gagal di hapus";
    }
?>