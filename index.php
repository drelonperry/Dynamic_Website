<?php
	include("functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width-device-width, initial-scale=1, maximum-scale=1">
	
<!-- CSS and Fonts -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<link href="assets/css/owl.carousel.css" rel="stylesheet">
<link href="assets/css/owl.theme.default.min.css" rel="stylesheet">
<link href="assets/css/templatemo-style.css" rel="stylesheet">

<title>Welcome to Drelon's Website</title>
</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
	
	<!-- Pre Loader -->
	<section class="preloader">
		<div class="spinner">
			<span class="spinner-rotate"></span>
		</div>
	</section>
	
	<!-- Navigation Section -->
	<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
				</button>
				
				<!-- Logo -->
				<a href="index.php?page=home" class="navbar-brand">Drelon's Website</a>
			</div>
			
			<!-- Menu Links -->
			<?php
				include("navigation.php");
			?>
		</div>
	</section>
	
	<?php
		if(!isset($_GET['page']))
		{
			$page = "home";
		}
		else
		{
			$page = $_GET['page'];
		}
	
		switch($page) {
			case "school":
				include("school.php");
				break;
			case "hobbies":
				include("hobbies.php");
				break;
			case "work":
				include("work.php");
				break;
			case "favorites":
				include("favorites.php");
				break;
			case "contact":
				include("contact.php");
				break;
			case "results":
				include("results.php");
				break;
			case "register":
				include("register.php");
				break;
			case "login":
				include("login.php");
				break;
			default:
				include("home.php");
				break;
		}
	?>
	
	<!-- Footer -->
	<footer id="footer">
		<div class="container">
			<div class="footer-info">
				<div class="copyright-text">
					<p>Copyright &copy; Drelon Perry</p>
					<p>Design: <a rel="nofollow" href="http://templatemo.com" title="html5 templates" target="_parent">Template Mo</a></p>
					<p>Distribution: <a href="https://themewagon.com">ThemeWagon</a></p>
					<a href="#top">Back To The Top</a>
				</div>
			</div>
		</div>
	</footer>
	
</body>
</html>

<!-- JavaScripts -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/smoothscroll.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/greeting.js"></script>