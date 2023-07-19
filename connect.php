<?php require "conn.php"?>

<?php

if (array_key_exists('email', $_POST) AND array_key_exists('password', $_POST)) {

	if ($_POST['email'] == "") {
		
		echo "<p>Please enter your Email.</p>";

	} else if ($_POST['password'] == "") {
		
		echo "<p>Please enter your Password.</p>";

	} else {

		$query = "INSERT INTO user (email, password) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."', '".mysqli_real_escape_string($link, $_POST['password'])."')";

		if (mysqli_query($link, $query)) {

			echo "<p>You have been successfully registered</p>";
		} else {
			echo "<p>There was an error signing you up</p>";
		}

	}

}

?>




<form method="post">
	
	<input type="email" name="email" placeholder="Enter your Email">

	<input type="password" name="password" placeholder="Enter your Password">

	<input type="submit" name="submit">

</form>

<br>
<br>
<button><a href="employees.php">Go to Employees</a></button>