<?php
session_start();
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];

$query = mysqli_query($conn, "INSERT INTO data VALUES('$id', '$nama', '$email')");

if ($query){
    echo "
        <script>
            document.location.href = 'index.php';
        </script>
    ";
} else {
    echo "
        <script>
            document.location.href = 'buatmember.php';
        </script>
    ";
}

?>