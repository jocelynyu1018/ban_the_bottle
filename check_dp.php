<?php
$servername = "cs.wellesley.edu";
$username = "jy100";
$password = "Cx65866873";
$dbname = "ARTS260_name_submission_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Attempt to select the database
if (!$conn->select_db($dbname)) {
  die("Database not found: " . $dbname);
}

echo "Database selected successfully";
?>
