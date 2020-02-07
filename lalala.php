<table border="2" width="85%" align="center">
		<tr>
			<th>No</th>
			<th>Jenis Sepatu</th>
			<th>Deskripsi</th>
			<th>Harga Laundry</th>
			<th>Estimasi Waktu</th>
			<th>Aksi</th>
		</tr>

        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)):
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data["jenis_sepatu"];?></td>
            <td><?= $data["deskripsi"];?></td>
            <td><?= $data["harga_laundry"];?></td>
            <td><?= $data["estimasi_waktu"];?></td>
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
    <p><a href="transaksi.php">Pembayaran</a>
</body>
</html>










<!DOCTYPE html>
<html>
<head>
<title>Member</title>
</head>
<body>
<style>
body {
        background-color: #BC8F8F;
        background-size: cover;
        background-attachment: fixed;
}
</style> 

<br>

<table>
<table border="2" width="85%" align="center">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Aksi</th>>
                <p><a href="buatmember.php">Belum jadi member? Yuk daftar</a>
        </tr>

        <?php $no = 1; ?>
            <?php $query = mysqli_query($conn, "SELECT * FROM book"); 
            while($row=mysqli_fetch_assoc($query)): ?>

        <tr>
            <td><?= $no; ?></td>
            <td><?= $data["id"];?></td>
            <td><?= $data["nama"];?></td>
            <td><?= $data["email"];?></td>
            <td>
                <a href="#">Delete</a> |
                <a href="#">Update</a>
            </td>
        </tr>

        <?php $i++; ?>
        <?php endwhile; ?>

    </table>
</body>
</html>









<!DOCTYPE html>
<html>
<head>
<title>Member</title>
</head>
<body>
<style>
body {
        background-color: #E0FFFF;
        background-size: cover;
        background-attachment: fixed;
}
</style>



<br>

<table>
<table border="2" width="85%" align="center">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
                <p><a href="buatmember.php">Belum jadi member? Yuk daftar</a>

        </tr>

        <tr>
            <td><?= $data["id"];?></td>
            <td><?= $data["nama"];?></td>
            <td><?= $data["email"];?></td>
            <td><?= $data["aksi"];?></td>
            <td>
                <a href="#">Delete</a> |
                <a href="#">Update</a>
            </td>
        </tr>
        
    </table>
</body>
</html>