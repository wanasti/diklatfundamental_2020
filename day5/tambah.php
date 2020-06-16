<html>
<head>
<title> Add User </title>
</head>

<body>
<a href="view.php">Lihat Data User </a>
<br/>
<br/>

<form action="tambah.php" method="post"  name="form1">
<table width="25%" border="0">
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="submit" value="add"></td>
	</tr>
</table>
</form>	

<?php
//check if from submitted, insert form data into user table
if(isset($_POST['submit'])){
$nama = strtoupper($_POST['nama']);
$alamat = strtoupper($_POST['alamat']);

//include database connection file
include_once("koneksi.php");

//Insert user data into table
$result = mysqli_query($connect,"INSERT INTO user(nama,alamat) VALUES('$nama','$alamat')");

//show massage when user added
echo "user added succesfully. <a href=view.php>view user</a>";
}
?>