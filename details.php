<?php require "conn.php" ?>

<?php
$e_id = $_GET['id'];

$query = "SELECT * FROM user WHERE id = $e_id";

if ($result = mysqli_query($link, $query)) {

	while ($row = mysqli_fetch_array($result)) {

		?>
		<ul>
			<li><h3><?php echo $row['email'] ?></h3></li>
			<li><h3><?php echo $row['password'] ?></h3></li>
		</ul>

		<br>
<br>
<button><a href="employees.php">Go to Employees</a></button>
		<?php

	}
}

?>