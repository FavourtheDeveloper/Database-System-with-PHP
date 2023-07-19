<?php require "conn.php" ?>

<?php

$query = "SELECT * FROM user";
?>
<table border="1" cellpadding="20" cellspacing="10">

	<tr>
		<td><h3>ID</h3></td>
		<td><h3>Email</h3></td>
		<td><h3>Password</h3></td>
		<td><h3>Details?</h3></td>
		<td><h3>Edit</h3></td>
		<td><h3>Delete</h3></td>
		
	</tr>
<?php
if ($result = mysqli_query($link, $query)) {

	while($row = mysqli_fetch_array($result)){

	?>
	<tr>
		<td><h3><?php echo $row['id'] ?></h1></td>
		<td><h3><?php echo $row['email'] ?></h1></td>
		<td><h3><?php echo $row['password'] ?></h1></td>
		<td><a href="details.php?id=<?php echo $row['id'] ?>"><h3>Details</h3></a></td>
		<td><a href="update.php?id=<?php echo $row['id'] ?>"><h3>Update Data</h3></a></td>
		<td><a href="delete.php?id=<?php echo $row['id'] ?>"><h3>Delete Data</h3></a></td>
	</tr>
	<?php
	}

}


 ?>

 </table>