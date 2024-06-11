<?php
	echo '<section id="login">';

	if(!isset($_POST['submit']))
	{
		echo '<div class="container">';
		echo '<div class="row">';
		echo '<div class="col-md-6 col-sm-12">';
		echo '<form class="contact-form" role="form" method="post">';
		echo '<div class="section-title">';
		
		if(isset($_GET['error']) && (strstr($_GET['error'], 'NullSid')))
		{
			echo '<h2>Empty Sid, Please try again</h2>';
		}
		else if(isset($_GET['errMsg']) && (strstr($_GET['errMsg'], "InvalidSid")))
		{
			echo '<h2>Sid not found in the Database, Please try again</h2>';
		}
		else if(isset($_GET['errMsg']) && (strstr($_GET['errMsg'], "InvalidCredentials")))
		{
			echo '<h2>Invalid Credentials, Please try again</h2>';
		}
		else if(isset($_GET['successMsg']) && (strstr($_GET['successMsg'], "Success")))
		{
			echo '<h2>Successfully Created Account, Please login</h2>';
		}
		else
		{
			echo '<h2>Please enter your login credentials.</h2>';
		}
		
		echo '</div>';
		echo '<div class="col-md-12 col-sm-12">';
		
		if(isset($_GET['errMsg']) && (strstr($_GET['errMsg'], "usernameNull") || strstr($_GET['errMsg'], "usernameInvalid")))
		{
			echo '<div class="form-group has-error" id="usernamePage">';
			echo '<label class="control-label" for="username">Create a username: </label>';
			echo '<input type="text" class="form-control" name="username" id="username"/>';
			echo '<div id="usernameFeedback">USERNAME must be 6 characters or more</div>';
			echo '</div>';
		}
		else
		{
			echo '<div class="form-group" id="usernamePage">';
			echo '<label class="control-label" for="username">Create a username: </label>';
			echo '<input type="text" class="form-control" name="username" id="username"/>';
			echo '<div id="usernameFeedback"></div>';
			echo '</div>';
		}
		
		if(isset($_GET['errMsg']) && (strstr($_GET['errMsg'], "passwordNull") || strstr($_GET['errMsg'], "passwordInvalid")))
		{
			echo '<div class="form-group has-error" id="passwordPage">';
			echo '<label class="control-label" for="password">Create a password: </label>';
			echo '<input type="password" class="form-control" name="password" id="password"/>';
			echo '<div id="passwordFeedback">PASSWORD must be 6 characters or more</div>';
			echo '</div>';
		}
		else
		{
			echo '<div class="form-group" id="passwordPage">';
			echo '<label class="control-label" for="password">Create a password: </label>';
			echo '<input type="password" class="form-control" name="password" id="password"/>';
			echo '<div id="passwordFeedback"></div>';
			echo '</div>';
		}
		
		echo '</div>';
		echo '<div class="col-md-4 col-sm-12">';
		echo '<input type="submit" class="form-control" name="submit" value="Submit">';
		echo '</div>';
		echo '</form>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
	}
	else
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		if($username == NULL)
		{
			$errors .= "usernameNull";
		}
		else if(strlen($username) < 6)
		{
			$errors .= "usernameInvalid";
		}
		else
		{
			$_SESSION['username'] = $username;
		}
		
		if($password == NULL)
		{
			$errors .= "passwordNull";
		}
		else if(strlen($password) < 6)
		{
			$errors .= "passwordInvalid";
		}
		else
		{
			$_SESSION['password'] = $password;
		}
		
		if($errors != NULL)
		{
			redirect("index.php?page=login&errMsg=$errors");
		}
	}

	if(isset($_POST['submit']))
	{
		$username = addslashes($_POST['username']);
		$passText = $_POST['password'];
		$salt = "SP2024UTSACS4413";
		$dblink = db_connect("user_data");
		$password = hash('sha256', $salt.$passText.$username);
		$sql = "Select `auto_id` from `accounts` where `auth_hash` = '$password'";
		$result = $dblink->query($sql) or
			die("<p>Something went wrong with $sql<br></p>" .$dblink->error);
		
		if($result->num_rows > 0)
		{
			$salt = microtime();
			$sid = hash('sha256', $salt.$password);
			$sql = "Update `accounts` set `session_id` = '$sid' where `auth_hash` = '$password'";
			$dblink->query($sql) or
				die("<p>Something went wrong with $sql<br></p>" .$dblink->error);
			redirect("index.php?page=results&sid=$sid");
		}
		else
		{
			redirect("index.php?page=login&errMsg=InvalidCredentials");
		}
	}

	echo '</section>';
?>
<script src="assets/js/data.js"></script>