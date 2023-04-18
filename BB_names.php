<?php


$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the list of names from the database
$sql = "SELECT * FROM names ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

// Display the list of names
if (mysqli_num_rows($result) > 0) {
	echo "<h1>List of Names</h1
