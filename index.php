<html> 
	<head>
		<script type="text/javascript" src="myjs.js"></script>
		<link id="pagestyle" href="index.css" rel="stylesheet" type="text/css" >
		
	</head>

		<title>  </title>
		
	<body>
	<header>
		<h1> Blockbuster </h1>
		
		<ul>
			<li> <a href="index.php">Home</a> </li>
			<li> <a href="#Shop">Shop</a> </li>
			<li> <a href="#My Favourites">My Favourites</a> </li>
			<li> <a href="#register">Register</a> </li>
			<li> <a href="Login_Page.php">Login</a> </li>
			
			<div id="searchBar">
			<input type="text" placeholder="Search..">
			</div>
		</ul>
	</header>
	<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "test";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 
	?>

	</body>
</html>