<!--Eto yung icopy paste sa index.html sa GITHUB-->
<!DOCTYPE html>
<html>
<head>
	<title>Personal Profile</title>
	
	<link rel="apple-touch-icon" href="img/hmm.png">
	<link rel="icon" type="image/png" href="img/hmm.png">
	<link rel="stylesheet" type="text/css" href="css/newstyle.css">
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
	
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Urbanist:wght@200&display=swap" rel="stylesheet">


</head>


<body>
<header>
		<a href="#" class="logo"><img src="img/logo.png"></a>
		<div class="bx bx-menu" id="menu-icon"></div>
		
		<ul class="navbar">
			<li><a href="new.html">Home</a></li>
			<li><a href="about.html">About Me</a></li>
			<li><a href="piano.html">Piano</a></li>
			<li><a href="gallery.html">Gallery</a></li>
			<li><a href="contact.php">Contact Me</a></li>
		</ul>
		
		<ul class="s-navbar">
				<li><a href="https://github.com/kathrynicuspit" class="btn" target="_blank"><img src="img/gitbtn.png" width="35px" height="35px"></a></li>
				<li><a href="https://www.facebook.com/kathryn.chaaan/" class="btn" target="_blank"><img src="img/fbbtn.png" width="35px" height="35px"></a></li>
				<li><a href="https://www.linkedin.com/in/kathryn-ann-icuspit-75659121a/" class="btn" target="_blank"><img src="img/lkdinbtn.png" width="35px" height="35px"></a></li>
			</ul>
		</header>
	
	<!---contact--->
	
	
	<section class="contact" id="contact" data-sr-id="4" style="visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transition: opacity 2.5s cubic-bezier(0.5, 0, 0, 1) 0.2s, transform 2.5s cubic-bezier(0.5, 0, 0, 1) 0.2s;">
		<div class="contact-text">
		
		<!--
			<h2>Contact Me</h2>
			<h4>AAAAAAA</h4>
			<p>Let me hear you say aw aw</p>
			<div class="contact-list">
				<li><a href="#">Megumi Kato </a></li>
				<li><a href="#">kbicuspit@gmail.com</a></li>
				<li><a href="#">09164350616</a></li>
			</div>
			-->
			<h2> My Guests </h2>
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
		</div>
		
		
	
	</section>
	
		</div>
	
</body>

</html>

	
