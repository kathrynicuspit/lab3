<?php
$servername = "192.168.150.213";
$username = "webprogmi211";
$password = "j@zzyAngle30";
$dbname = "webprogmi211";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE kbicuspit_myguests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
website VARCHAR(50),
comment VARCHAR(255)
)";

if (mysqli_query($conn, $sql)) {
  echo "Table kbicuspit_myguests created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>