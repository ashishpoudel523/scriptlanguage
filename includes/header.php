<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Blog Site</title>
	<center>
		<a href="index.php">HOME</a> &nbsp;
		<a href="about.php">ABOUT US</a> &nbsp;
		<a href="blogs.php">BLOGS</a> &nbsp;
		<a href="contact.php">CONTACT US</a> &nbsp;
	</center>
	

</head>

<body>


<?php
	$cookie_name = "username";
	$cookie_value = "Ashish Poudel";

	setcookie($cookie_name, $cookie_value, time() + (86400*30));

	$_SESSION['user_id'] = "ashishpoudel@kbc.edu.np";
?>

