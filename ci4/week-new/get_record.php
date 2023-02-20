<!-- PHP for displaying records in a table -->

<?php
$servername = "localhost";
$username = "webprogmi211";
$password = "webprogmi211";
$dbname = "webprogmi211";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, email, comment FROM kbicuspit_myguests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table>";
  echo "<tr>";
  echo "<th style='text-align:left; padding: 0 10px'>Name</th>";
  echo "<th style='text-align:left; padding: 0 10px'>Email</th>";
  echo "<th style='text-align:left; padding: 0 10px'>Comment</th>";
  echo "</tr>";
  while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td style='text-align:left; padding: 0 10px'>" . $row["name"] . "</td>";
      echo "<td style='text-align:left; padding: 0 10px'>" . $row["email"] . "</td>";
      echo "<td style='text-align:left; padding: 0 10px'>" . $row["comment"] . "</td>";
      echo "</tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}

$conn->close();
?>