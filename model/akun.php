<?php
session_start();

if ( !isset($_SESSION["login"])) {
    header("location:/projectweb/login.php");
    exit;
}

include '../control/koneksi.php';
?>
     <?php $query = "SELECT * FROM users";
    $sql = mysqli_query($koneksi, $query);
    ?>

<link rel="stylesheet" href="../view/style.css">


<header>
    <h1>SELAMAT DATANG</h1>
        <p>ADMIN</p>
</header>

    <nav>
        <ul>
            <li><a href="../view/indexSA.php">Beranda</a></li>
            <li><a href="menuSA.php">Menu</a></li>
            <li><a href="#">acount</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </nav>


<br>

<table>
    <tr>
        <th>id user</th>
        
        <th>username</th>

        <th>
            
        </th>

        <th>
            
        </th>

        <th>

        </th>
    </tr>


    <?php while ($hasil = mysqli_fetch_assoc($sql)) { ?>
    <tr>
        <td>
            <?php echo $hasil ['id_user'];?>
        </td>
        
        <td>
            <?php echo $hasil ['username_user'];?>
        </td>

        <td>

        </td>

         <td>
                 <a href="../control/controlSA/editakunSA.php?kode=<?php echo $hasil['id_user'] ?>" class="simple-button">edit</a>   
            </td>
            <td>
                 <a href="../control/controlSA/hapusakunSA.php?kode=<?php echo $hasil['id_user'] ?>" class="simple-button" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');" >hapus</a>   
            </td>
    </tr>

    <?php } ?>

    </table>