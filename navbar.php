<?php require 'config.php'; ?>
<html> 
	<head>
		<link id="pagestyle" href="index.css" rel="stylesheet" type="text/css" >
		
	</head>

		<title>  </title>
		
	<body>
	<header>
		<h1> Blockbuster </h1>
		
		<ul>
			<li> <a href="index.php">Home</a> </li>
		<?php if(isset($_SESSION['username']))
		{
			echo "<li> <a href='logout.php'>Logout</a> </li>";
			
		}
		else
		{
			echo "<li> <a href='register.php'>Register</a> </li> <li> <a href='Login_Page.php'>Login</a> </li>";
		}
		?>
			
			<div id="searchBar">
			<input type="text" placeholder="Search..">
			</div>
		</ul>
	</header>

	</body>
</html>