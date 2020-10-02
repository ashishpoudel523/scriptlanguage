<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Blog Site</title>
	
	<link href="style/bootstrap.min.css" rel="stylesheet" />
	<link rel="stylesheet"  href="style/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="style/style.css">
  <link rel="stylesheet" href="../style/all.min.css">
	<script src="style/bootstrap.min.js"></script>

</head>

<body>
<div>


<nav class="navbar navbar-expand-sm bg-primary navbar-dark black">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">HOME</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="about.php">ABOUT US</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Separated link</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="blogs.php">BLOGS</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contact.php">CONTACT US</a>
    </li>
  </ul>
</nav>	

<?php
	$cookie_name = "username";
	$cookie_value = "Ashish Poudel";

	setcookie($cookie_name, $cookie_value, time() + (86400*30));

	$_SESSION['user_id'] = "ashishpoudel@kbc.edu.np";
?>

</div>