<?php
include ('koneksi.php')
?>

<?php $i = 1; ?>
<?php $query = mysqli_query($conn, "select * FROM project");
while($row=mysqli_fetch_assoc($query)): ?>
	<tr>
		<td> <?= $i; ?>. </td>
		<td> <?= $row['title'] ?> </td>
		<td> <?= $row['writer'] ?> </td> 
		<td> <?= $row['category'] ?> </td>
		<td> <?= $row['publisher'] ?> </td>
		<td> <?= $row['date_relese'] ?> </td>
		<td> <a href='edit.php?id=<?= $row['id'] ?>'> ubah </a></td>
		<td> <a href='delete.php?id=<?= $row['id'] ?>' onClick="return confirm('yakin ingin menghapus')";
	</tr> 
<?php $i++; ?>
<?php endwhile; ?>

</table>

<form action="../logout.php">
<input type="submit" value="logout">
</form>