<?php require 'config.php'; ?>
<html> 
<!--This page is used to load the top of every page in the system , this saves us using the same code on every page -->
	<head>
		<link id="pagestyle" href="index.css" rel="stylesheet" type="text/css" >
		<script type="text/javascript" src="myjs.js"></script>
		<link rel="stylesheet" href="index.css"/>
		<title>  </title>
		
	</head>
	
	<body>
	<h1 id='mainhead'>Blockbuster</h1>
	<header>
		<ul>
		<li> <a href="index.php">Home</a> </li>
		<li> <a href="store.php">Store</a> </li>
		<?php if(isset($_SESSION['username']))
		{
			echo "<li><a href='myprofile.php'>My Profile</a></li> 
			<li><a href='myfavs.php'>My Favourites</a></li> 
			<li class ='loginout'> <a href='logout.php'>Logout</a> </li>";
			
		}
		else
		{
			echo "<li class='loginout'> <a href='register.php'>Register</a> </li> <li class='loginout'> <a href='Login_Page.php'>Login</a> </li>";
		}
		?>
		<!--Search bar which on submit runs a php function passing the user input-->
			<div id="searchBar">
				<form action="results.php" method="get">
					<input type="text" name="searchitem" placeholder="Search..">
					<button type="submit">Search</button>
				</form>
			</div>
		</ul>
	</header>
	
	</body>
	
	
	</html>
			