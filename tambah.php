<html>
<head>
    <title>tambah data</title>
</head>

<body>
    <a href="index.php">kembali</a>

    <form action="tambah.php" method="post" name="form1">
        <table width="25%">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>

            <tr>
                <td>No.Telpon</td>
                <td><input type="text" name="telpon"></td>
            </tr>

            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            
            <tr>
				<td></td>
				<td><input type="submit" name="Submit" value="tambah"></td>
			</tr>

        </table>
    </form>

    <?php
    if(isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $telpon = $_POST['telpon'];

        include_once("konfig.php");

        $result = mysqli_query($mysqli, "INSERT INTO pengguna(nama,telpon,email) VALUES('$nama','$telpon','$email')");

        echo "Data telah di tambahkan. <a href='index.php'>Lihat Data</a>";
    }
    ?>
</body>

</html>