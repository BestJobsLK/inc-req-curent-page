<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Website Title</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<header>
		<h1>Website Name</h1>
	</header>

	<nav>
		<ul>
			<li><a href="index.php"<?php if ($page == 'home') { echo 'class="active"'; } ?>>Home</a></li>
			<li><a href="about-us.php"<?php if ($page == 'about') { echo 'class="active"'; } ?>>About Us</a></li>
			<li><a href="products.php"<?php if ($page == 'products') { echo 'class="active"'; } ?>>Products</a></li>
			<li><a href="services.php"<?php if ($page == 'services') { echo 'class="active"'; } ?>>Services</a></li>
			<li><a href="contact-us.php"<?php if ($page == 'contact') { echo 'class="active"'; } ?>>Contact Us</a></li>
		</ul>
	</nav>

	