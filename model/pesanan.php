<?php
session_start();

if ( !isset($_SESSION["login"])) {
    header("location:/projectweb/login.php");
    exit;
}

include '../control/koneksi.php';
?>
     <?php $query = "SELECT * FROM pesanan";
    $sql = mysqli_query($koneksi, $query);
    ?>

<link rel="stylesheet" href="../view/style.css">


<header>
        <h1>Aneka Rasa</h1>
        <p>Tempatnya Beragam Kelezatan</p>
    </header>

    <nav>
        <ul>
            <li><a href="../view/indexuser.php">Beranda</a></li>
            <li><a href="../model/menuuser.php">Menu</a></li>
            <li><a href="#">pesanan</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </nav>


<table>
    <tr>
        <th>pesanan</th>
        
        <th>harga</th>

        <th>
            
        </th>

        <th>
            
        </th>
    </tr>


    <?php while ($hasil = mysqli_fetch_assoc($sql)) { ?>
    <tr>
        <td>
            <?php echo $hasil ['nama_pesanan'];?>
        </td>
        
        <td>
            <?php echo $hasil ['harga'];?>
        </td>

        <td>

        </td>

        <td><a href="pesanan.php" class="simple-button">-</a></td>
    </tr>

    <?php } ?>

    </table>