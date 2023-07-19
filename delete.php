<?php require "conn.php" ?>

<?php
$e_id = $_GET['id'];

?>

<form method="POST">
	<h1>Are you sure you wish to <span style="color: red">DELETE</span> this data</h1>
	<input type="submit" name="yessub" value="YES, I DO">
</form>

<?php


if (isset($_POST['yessub'])) {
	
	$query ="DELETE FROM user WHERE id = '$e_id'"; 

if ($result = mysqli_query($link, $query)) {
	
	header("location: employees.php");
}

}




?>

<br>
<br>
<button><a href="employees.php">Go to Employees</a></button>