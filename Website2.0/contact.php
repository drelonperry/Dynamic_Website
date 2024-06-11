<!-- CSS and Fonts -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<link href="assets/css/owl.carousel.css" rel="stylesheet">
<link href="assets/css/owl.theme.default.min.css" rel="stylesheet">
<link href="assets/css/templatemo-style.css" rel="stylesheet">

<!-- Contact -->
<section class="contact">
	<?php
		if(!isset($_POST['submit']))
		{
			echo '<div class="container">';
			echo '<div class="row">';
			echo '<div class="col-md-6 col-sm-12">';
			echo '<form class="contact-form" role="form" method="post">';
			echo '<div class="section-title">';
			echo '<h2>Contact me <small>I love conversations. let us talk!</small></h2>';
			echo '</div>';
			echo '<div class="col-md-12 col-sm-12">';
			
			if(isset($_GET['errMsg']) && (strstr($_GET['errMsg'], "firstNameNull") || strstr($_GET['errMsg'], "firstNameInvalid")))
			{
				echo '<div class="form-group has-error" id="firstNamePage">';
				echo '<label class="control-label" for="firstName">Enter First Name: </label>';
				echo '<input type="text" class="form-control" name="firstName" id="firstName">';
				echo '<div id="firstNameFeedback">FIRSTNAME must be 2 characters or more and only allows letters, hyphens, and apostrophes</div>';
				echo '</div>';
			}
			else
			{
				echo '<div class="form-group" id="firstNamePage">';
				echo '<label class="control-label" for="firstName">Enter First Name: </label>';
				echo '<input type="text" class="form-control" name="firstName" id="firstName">';
				echo '<div id="firstNameFeedback"></div>';
				echo '</div>';
			}
				
			if(isset($_GET['errMsg']) && (strstr($_GET['errMsg'], "lastNameNull") || strstr($_GET['errMsg'], "lastNameInvalid")))
			{
				echo '<div class="form-group has-error" id="lastNamePage">';
				echo '<label class="control-label" for="lastName">Enter Last Name: </label>';
				echo '<input type="text" class="form-control" name="lastName" id="lastName">';
				echo '<div id="lastNameFeedback">LASTNAME must be 2 characters or more and only allows letters, hyphens, and apostrophes</div>';
				echo '</div>';
			}
			else
			{
				echo '<div class="form-group" id="lastNamePage">';
				echo '<label class="control-label" for="lastName">Enter Last Name: </label>';
				echo '<input type="text" class="form-control" name="lastName" id="lastName">';
				echo '<div id="lastNameFeedback"></div>';
				echo '</div>';
			}
				
			if(isset($_GET['errMsg']) && (strstr($_GET['errMsg'], "emailNull") || strstr($_GET['errMsg'], "emailInvalid")))
			{
				echo '<div class="form-group has-error" id="emailPage">';
				echo '<label class="control-label" for="email">Enter Email: </label>';
				echo '<input type="email" class="form-control" name="email" id="email">';
				echo '<div id="emailFeedback">Not a valid EMAIL</div>';
				echo '</div>';
			}
			else
			{
				echo '<div class="form-group" id="emailPage">';
				echo '<label class="control-label" for="email">Enter Email: </label>';
				echo '<input type="email" class="form-control" name="email" id="email">';
				echo '<div id="emailFeedback"></div>';
				echo '</div>';
			}
				
			if(isset($_GET['errMsg']) && (strstr($_GET['errMsg'], "phoneNumberNull") || strstr($_GET['errMsg'], "phoneNumberInvalid")))
			{
				echo '<div class="form-group has-error" id="phoneNumberPage">';
				echo '<label class="control-label" for="phoneNumber">Enter Phone Number: </label>';
				echo '<input type="text" class="form-control" name="phoneNumber" id="phoneNumber">';
				echo '<div id="phoneNumberFeedback">PHONENUMBER must contain exactly 10 digits and only be numbers</div>';
				echo '</div>';
			}
			else
			{
				echo '<div class="form-group" id="phoneNumberPage">';
				echo '<label class="control-label" for="phoneNumber">Enter Phone Number: </label>';
				echo '<input type="text" class="form-control" name="phoneNumber" id="phoneNumber">';
				echo '<div id="phoneNumberFeedback"></div>';
				echo '</div>';
			}
			
			if(isset($_GET['errMsg']) && (strstr($_GET['errMsg'], "usernameNull") || strstr($_GET['errMsg'], "usernameInvalid")))
			{
				echo '<div class="form-group has-error" id="usernamePage">';
				echo '<label class="control-label" for="username">Create a username: </label>';
				echo '<input type="text" class="form-control" name="username" id="username">';
				echo '<div id="usernameFeedback">USERNAME must be 6 characters or more</div>';
				echo '</div>';
			}
			else
			{
				echo '<div class="form-group" id="usernamePage">';
				echo '<label class="control-label" for="username">Create a username: </label>';
				echo '<input type="text" class="form-control" name="username" id="username">';
				echo '<div id="usernameFeedback"></div>';
				echo '</div>';
			}
				
			if(isset($_GET['errMsg']) && (strstr($_GET['errMsg'], "passwordNull") || strstr($_GET['errMsg'], "passwordInvalid")))
			{				
				echo '<div class="form-group has-error" id="passwordPage">';
				echo '<label class="control-label" for="password">Create a password: </label>';
				echo '<input type="password" class="form-control" name="password" id="password">';
				echo '<div id="passwordFeedback">PASSWORD must be 6 characters or more</div>';
				echo '</div>';
			}
			else
			{
				echo '<div class="form-group" id="passwordPage">';
				echo '<label class="control-label" for="password">Create a password: </label>';
				echo '<input type="password" class="form-control" name="password" id="password">';
				echo '<div id="passwordFeedback"></div>';
				echo '</div>';
			}
				
			if(isset($_GET['errMsg']) && (strstr($_GET['errMsg'], "commentsNull") || strstr($_GET['errMsg'], "commentsInvalid")))
			{				
				echo '<div class="form-group has-error" id="commentsPage">';
				echo '<label class="control-label" for="comments">Comments: </label>';
				echo '<input type="text" class="form-control" name="comments" id="comments">';
				echo '<div id="commentsFeedback">COMMENTS must be 1 character or more</div>';
				echo '</div>';
			}
			else
			{
				echo '<div class="form-group" id="commentsPage">';
				echo '<label class="control-label" for="comments">Comments: </label>';
				echo '<input type="text" class="form-control" name="comments" id="comments">';
				echo '<div id="commentsFeedback"></div>';
				echo '</div>';
			}
				
			echo '</div>';
			echo '<div class="col-md-4 col-sm-12">';
			echo '<input type="submit" class="form-control" name="submit" value="Send Message">';
			echo '</div>';
			echo '</form>';
			echo '</div>';
			echo '</div>';
			echo '</div>';
		}
		else
		{
			$firstName = $_POST['firstName'];
			$lastName = $_POST['lastName'];
			$email = $_POST['email'];
			$phoneNumber = $_POST['phoneNumber'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$comments = $_POST['comments'];
			$nameRegex = "/^[a-zA-Z'-]+$/";
			$emailRegex = '/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
			$phoneRegex = "/^[0-9]+$/";
			$errors = "";
				
			if($firstName == NULL)
			{
				$errors = "firstNameNull";
			}
			else if(!(preg_match($nameRegex, $firstName)) || (strlen($firstName)) < 2)
			{
				$errors = "firstNameInvalid";
			}
				
			if($lastName == NULL)
			{
				$errors .= "lastNameNull";
			}
			else if(!(preg_match($nameRegex, $lastName)) || (strlen($lastName)) < 2)
			{
				$errors .= "lastNameInvalid";
			}
					
			if($email == NULL)
			{
				$errors .= "emailNull";
			}
			else if(!(preg_match($emailRegex, $email)))
			{
				$errors .= "emailInvalid";
			}
				
			if($phoneNumber == NULL)
			{
				$errors .= "phoneNumberNull";
			}
			else if(!(preg_match($phoneRegex, $phoneNumber)) || (strlen($phoneNumber)) != 10)
			{
				$errors .= "phoneNumberInvalid";
			}
				
			if($username == NULL)
			{
				$errors .= "usernameNull";
			}
			else if(strlen($username) < 6)
			{
				$errors .= "usernameInvalid";
			}
				
			if($password == NULL)
			{
				$errors .= "passwordNull";
			}
			else if(strlen($password) < 6)
			{
				$errors .= "passwordInvalid";
			}
				
			if($comments == NULL)
			{
				$errors .= "commentsNull";
			}
			else if(strlen($comments) < 0)
			{
				$errors .= "commentsInvalid";
			}
				
			if($errors != NULL)
			{
				redirect("index.php?page=contact&errMsg=$errors");
			}
			else
			{
				$dblink = db_connect("contact_data");
				$sql = "Insert into `contact_info` (`first_name`, `last_name`, `email`, `phonenumber`, `username`, `password`, `comments`) values ('$firstName', '$lastName', '$email', '$phoneNumber', '$username', '$password', '$comments')";
				$dblink->query($sql) or die("<h2>Something went wrong with: $sql<br>" .$dblink->error. "<h2>");
				echo '<h2>Your data has been saved successfully.</h2>';
			}		
		}
	?>
</section>

<!-- JavaScripts -->
<script src="assets/js/datavalidation.js"></script>