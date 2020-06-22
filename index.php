<?php
//koneksi ke DB koneksi
include_once("konfig.php");

// mengambil semua data pengguna dari DB
$result = mysqli_query($mysqli, "SELECT * FROM pengguna ORDER BY id DESC");
?>

<html>
<head>
    <title>index</title>
</head>

<body>
    <a href="tambah.php">tambah data baru</a>
    
    <table widt='80%'>

    <tr>
    <th>Nama</th> <th>No.Telpon</th> <th>email</th> <th>perbarui data</th>
    </tr>

    <?php
    while($data_pengguna = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $data_pengguna['nama'] . "</td>";
        echo "<td>" . $data_pengguna['telpon'] . "</td>";
        echo "<td>" . $data_pengguna['email'] . "</td>";
        echo "<td><a href='ubah.php?id=$data_pengguna[id]'>ubah</a> | <a href='hapus.php?id=$data_pengguna[id]'>Hapus</a></td></tr>";
    
    }
    ?>

    </table>
</body>
</html>