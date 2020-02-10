<!DOCTYPE html><!DOCTYPE html>
<html>
<head>
<title>Member</title>
</head>
<body>
    <center><u><h1>MEMBER C-SHOP</h1></u></center>
<style>
body {
    background-color: #FFE4B5;
    background-size: cover;
    background-attachment: fixed;
}
</style> 

<br>

<table>
<table border="2" width="85%" align="center">
        <tr>
            <th>No.</th>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Aksi</th>
                <p><a href="buatmember.php">Belum jadi member? Yuk daftar</a>
        </tr>

        <?php $no = 1; ?>
        <?php
            include 'koneksi.php';
            $query = mysqli_query($conn, "SELECT * FROM data"); 
            foreach ($query as $data) {
        ?>

        <tr>
            <td><?= $no; ?></td>
            <td><?= $data["id"];?></td>
            <td><?= $data["nama"];?></td>
            <td><?= $data["email"];?></td>
            <td>
                <a href="delete.php?id=<?= $data['id']; ?>">Delete</a> |
                <a href="edit.php?id=<?= $data['id']; ?>">Update</a>
            </td>
        </tr>

        <?php $no++; ?>
        <?php } ?>

    </table>
</body>
</html>