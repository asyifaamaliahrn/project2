<?php 
$conn = @mysqli_connect('localhost','root','','project');
 

if (!$conn){
	echo "Koneksi database gagal : " . mysqli_connect_error();
	exit();
}
 
?>