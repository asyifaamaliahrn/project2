<!DOCTYPE html>
<html>
<head>
<style>
body {
	background-color: #E6E6FA;
	background-size: cover;
	background-attachment: fixed;
}
</style>
<title>Mendaftar Member</title>

</head>
<body>
	<br>
<center><u><h1>DAFTAR MEMBER C-SHOP</h1></u></center> <br><br>

<?php
if(isset($_GET['pesan'])){
	if($_GET['pesan']== 'gagal'){
		echo "Maaf, anda gagal mendaftar member. Mari coba lagi!";
	}else if ($_GET['pesan']== "berhasil"){
		echo "Selamat, anda telah menjadi member!";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
}
?>

	<center>
		<form action="proses_login.php" method="post">
		<table>
	<tr>
		<td>ID</td>
		<td><input type="id" name="id"></td>	
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="nama" name="nama"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="email" name="email"></td>
	</tr>
	<tr>
	<td></td>
		<td><input type="submit" name="Daftar" value="Daftar"></td>
		</tr>
		</table>
		</center>
		<br>
	</form>
</body>
</html>