<?php
require_once'koneksi.php';

if(isset($_GET['id'])){
	$query = mysqli_query($conn, "DELETE FROM data WHERE id ='{$_GET['id']}'");

	if($query){
		echo "<script>
			alert('Berhasil menghapus data member!');
			window.location = 'index.php';
			</script>";exit;

		}else{
		echo "<script>
			alert('Gagal menghapus data member!');
			window.location = 'index.php';
			</script>";exit;
		}
	}
?>