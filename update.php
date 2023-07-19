<?php require "conn.php"?>

<?php 

$e_id = $_GET['id'];

$query = "SELECT * FROM user WHERE id = '$e_id'";
$result = mysqli_query($link, $query);

while ($row = mysqli_fetch_array($result)) {
	?>
	<form method="POST">
		<input type="email" name="edemail" value="<?php echo $row['email'] ?>">
		<input type="text" name="edepassword" value="<?php echo $row['password'] ?>">
		<input type="submit" name="edesubmit">
	</form>
	<?php
}

if (isset($_POST['edesubmit'])) {
	$edemail = $_POST['edemail'];
	$edepassword = $_POST['edepassword'];


	$query = "UPDATE user SET email = '$edemail', password = '$edepassword' WHERE id = $e_id";

	if (mysqli_query($link, $query)) {
		
		?>
		<script> alert("New Record Updated Successfully")</script>

		<?php

		Header("location: employees.php");
	}
}

?>