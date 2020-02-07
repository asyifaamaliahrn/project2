<?php
session_start();
include "koneksi.php";

if(!isset($_SESSION['username'])){
    header('Location: index.php');
}

?>

ini ada di tengah kodingan tabel