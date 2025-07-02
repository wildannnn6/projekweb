<?php
include 'c:\xampp\htdocs\projectweb\control\koneksi.php';

    $id_user = $_POST['id_user'];
    $username = $_POST['namauser'];
    $password = $_POST['passworduser'];

    $password_hash= password_hash($password, PASSWORD_DEFAULT);
  
    
    $simpan = mysqli_query($koneksi, "UPDATE users SET username_user = '$username', password_user = '$password_hash' WHERE id_user = '$id_user' ");

   
    if ($simpan) {
        header("location:/projectweb/model/akun.php");
    } else {
        header("location:/projectweb/model/akun.php");
    }
?>