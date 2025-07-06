<?php

session_start();

if (isset($_SESSION ["login"])){
            header(header: "location:/projectweb/view/indexSA.php");
            exit;
        }

include 'koneksi.php';

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST["password"];

    $hasil = mysqli_query($koneksi, "SELECT * FROM users WHERE username_user = '$username'");

    if (mysqli_num_rows($hasil) === 1) {

        $row = mysqli_fetch_assoc($hasil);

        if (password_verify($password, $row["password_user"])) {

            $_SESSION["login"] = true;


            header(header: "location:/projectweb/view/indexSA.php");

        } else {
            echo "<script>
            alert('password/username tidak sesuai!');
              </script>";

            return false;
        }

    } else {

        echo "<script>
            alert('password/username tidak sesuai!');
              </script>";

        return false;
    }


}

?>