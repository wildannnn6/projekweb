<?php
include 'koneksi.php';

function daftar($data)
{

    global $koneksi;

    $username_user = $data["username"];
    $password_user = mysqli_real_escape_string($koneksi, $data["password"]);
    $confpass = mysqli_real_escape_string($koneksi, $data["confirm_password"]);

    if ($password_user !== $confpass) {
        echo "<script>
            alert('password tidak sesuai!');
              </script>";
        return false;
    } else {    
    header("Location: login.php");
    }
    $password_user = password_hash($password_user, PASSWORD_DEFAULT);

    mysqli_query($koneksi, "INSERT INTO users VALUES ('', '$username_user' , '$password_user' )");

    
}


?>