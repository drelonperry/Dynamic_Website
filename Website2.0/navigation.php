<?php
	echo '<div class="collapse navbar-collapse">';
	echo '<ul class="nav navbar-nav navbar-nav-first">';

	if(!isset($_GET['page']))
	{
		$page = "home";
	}
	else
	{
		$page = $_GET['page'];
	}
	
	if($page == "home")
	{
		echo '<li class="active"><a href="index.php?page=home" class="smoothScroll">Home</a></li>';
	}
	else
	{
		echo '<li><a href="index.php?page=home" class="smoothScroll">Home</a></li>';
	}

	if($page == "school")
	{
		echo '<li class="active"><a href="index.php?page=school" class="smoothScroll">School</a></li>';
	}
	else
	{
		echo '<li><a href="index.php?page=school" class="smoothScroll">School</a></li>';
	}

	if($page == "hobbies")
	{
		echo '<li class="active"><a href="index.php?page=hobbies" class="smoothScroll">Hobbies</a></li>';
	}
	else
	{
		echo '<li><a href="index.php?page=hobbies" class="smoothScroll">Hobbies</a></li>';
	}

	if($page == "work")
	{
		echo '<li class="active"><a href="index.php?page=work" class="smoothScroll">Work</a></li>';
	}
	else
	{
		echo '<li><a href="index.php?page=work" class="smoothScroll">Work</a></li>';
	}

	if($page == "favorites")
	{
		echo '<li class="active"><a href="index.php?page=favorites" class="smoothScroll">Favorites</a></li>';
	}
	else
	{
		echo '<li><a href="index.php?page=favorites" class="smoothScroll">Favorites</a></li>';
	}

	if($page == "contact")
	{
		echo '<li class="active"><a href="index.php?page=contact" class="smoothScroll">Contact</a></li>';
	}
	else
	{
		echo '<li><a href="index.php?page=contact" class="smoothScroll">Contact</a></li>';
	}

	if($page == "results")
	{
		echo '<li class="active"><a href="index.php?page=results" class="smoothScroll">Results</a></li>';
	}
	else
	{
		echo '<li><a href="index.php?page=results" class="smoothScroll">Results</a></li>';
	}

	if($page == "login")
	{
		echo '<li class="active"><a href="index.php?page=login" class="smoothScroll">Login</a></li>';
	}
	else
	{
		echo '<li><a href="index.php?page=login" class="smoothScroll">Login</a></li>';
	}

	echo '</ul>';
	echo '</div>';
?>




				
					
					
					
					
					
					
				
			
