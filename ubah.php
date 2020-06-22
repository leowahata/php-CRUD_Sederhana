<?php

include_once("konfig.php");

if(isset($_POST['update']))
{
    $id = $_POST['id'];

    $nama = $_POST['nama'];
    $telpon = $_POST['telpon'];
    $email = $_POST['email'];

    $result = mysqli_query($mysqli, "UPDATE pengguna SET name='$nama',email='$email',telpon='$telpon' WHERE id=$id");

    header( "Location: index.php");
}
?>


<?php
$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM pengguna WHERE id=$id");

while ($user_data = mysqli_fetch_array($result)) {
    $name = $user_data['name'];
    $email = $user_data['email'];
    $telpon = $user_data['telpon'];
}
?>

<html>
<head>
	<title>ubah</title>
</head>

<body>
	<a href="index.php">Kembali</a>
	<br/><br/>

	<form name="update_user" method="post" action="ubah.php">
		<table border="0">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value=<?php echo $name; ?>></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value=<?php echo $email; ?>></td>
			</tr>
			<tr>
				<td>No.Telpon</td>
				<td><input type="text" name="telpon" value=<?php echo $telpon; ?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>