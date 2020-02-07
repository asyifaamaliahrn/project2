<html>
<head>
<style>
body{
  background-color: #D8BFD8;
  background-size: cover;
  background-attachment: fixed;
}

#wrapper{
  margin: auto;
  background-color: #FAF0E6;
  background-attachment: fixed;
}
</style>
  <title>Member C-shop</title>
</head>
<body>
<header>
  <div id="wrapper">
  <h1><center>DAFTAR MEMBER</center></h1>

  <div id="header">
</header>

<?php
session_start();
include "koneksi.php";

if(!isset($_SESSION['username'])){
    header('Location: index.php');
}

if($_SESSION['role_id'] != 1){
    header('Location: member.php');
}

?>
<?php
include "koneksi.php";
$query = mysqli_query($conn,"SELECT * FROM project");
?>

<table border="2" width="85%" align="center">
    <tr>
      <th>No</th>
      <th>ID</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Aksi</th>
    </tr>

        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)):
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data["id"];?></td>
            <td><?= $data["nama"];?></td>
            <td><?= $data["email"];?></td>
            <td>
                <a href="#">Delete</a> |
                <a href="#">Update</a>
            </td>
        </tr>
        <?php endwhile; ?>

    </table>
    <form action="logout.php" method="POST">
            <input type="submit" value="Logout">
    </form>
    <p><a href="buatmember.php">YUK DAFTAR MEMBER</a>
</body>
</html>