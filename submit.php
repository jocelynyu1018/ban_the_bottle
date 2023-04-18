
// Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST["name"];
	
	// Check that the name is valid
	if (preg_match("/^[a-zA-Z ]*$/", $name)) {
		// Store the name in the database
		$sql = "INSERT INTO names (name) VALUES ('$name')";
		if (mysqli_query($conn, $sql)) {
			echo "Name submitted successfully";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	} else {
		echo "Error: Invalid name";
	}
}

// Close the database connection
mysqli_close($conn);
?>
