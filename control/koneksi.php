<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'dbprojekweb';


$koneksi = mysqli_connect($host, $user, $pass, $db);

if ($koneksi) {
    // echo "koneksi berhasil";
}
?>