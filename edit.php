<!DOCTYPE html>
<html>
<head>
	<title>Edit data member</title>
</head>
<body>

<style>
body {
    background-color: #FFE4B5;
    background-size: cover;
    background-attachment: fixed;
}
</style> 
 
	<h2><u><center>Edit Data Member C-Shop</center></u></h2>
	<br/><br/>
	<center><a href="index.php">kembali ke halaman member</a></center>
	<br/>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($conn,"select * from data where id='$id'");
	while($d = mysqli_fetch_array($data))
		?>

		<center>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>ID</td>
					<td>
						<input type="text" name="id" value="<?php echo $d['id']; ?>">
					</td>
				</tr>
				<tr>
					<td>nama</td>
					<td><input type="text" name="nama" value="<?php echo $d['nama']; ?>"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" value="<?php echo $d['email']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</center>
		</form>
		<?php 
	
	?>
 
</body>
</html>