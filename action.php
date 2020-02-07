<?php
require_once "../koneksi.php";
if (isset($_POST['submit']))
{

	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$role = 2;

	$hash = password_hash($password, PASSWORD_DEFAULT);
	if( $query = "INSERT INTO users(id, nama, email)
		VALUES (?, ?, ?, ?, ?, ?)"{
			if( $password === $konfirmasi){
			$stmt = $conn->prepare($query);
			$stmt->bind_param("sssssi", $nama, $email);
			$stmt->execute();

			echo "<script> alert('Register Berhasil!'); </script>
				 	<meta http-equiv='refresh' content='0; url-pesanan.php/>;
		} else{
			echo "<script> alert('Terdapat ketidaksamaan data!'); </script>
					<meta http-equiv='refresh' content='0; url-daftar.php />";

		}

		}

	}

?>
