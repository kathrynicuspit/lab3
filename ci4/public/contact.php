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
			<li><a href="/~kbicuspit/lab3/ci4/public/new.php">Home</a></li>
			<li><a href="/~kbicuspit/lab3/ci4/app/Views/pages/about.php">About Me</a></li>
			<li><a href="/~kbicuspit/lab3/ci4/public/piano.php">Piano</a></li>
			<li><a href="/~kbicuspit/lab3/ci4/public/guests.php">Guests</a></li>
			<li><a href="/~kbicuspit/lab3/ci4/public/contact.php">Contact Me</a></li>
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
			<h2> Contact Me </h2>
			<br>
			<!--
			<div class="contact-icons">
				<a href="#"><i class='bx bxl-twitter' ></i></a>
				<a href="#"><i class='bx bxl-facebook' ></i></a>
				<a href="#"><i class='bx bxl-instagram' ></i></a>
			</div>
			-->
		</div>
		
		
		<div class="contact-form">
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 				
			<input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <input type="website" name="website" placeholder="Your Website">
            <textarea name="comment" rows="6" placeholder="Your Message"></textarea>
				<input type="submit" value="Submit" class="send">
		</form>
			
        <?php include 'forms.php'; ?>

		</div>
	</section>
	
	
</body>

</html>
