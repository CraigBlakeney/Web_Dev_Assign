<?php require 'config.php'; ?>
<html> 
	<head>
		<link id="pagestyle" href="index.css" rel="stylesheet" type="text/css" >
		 <script type="text/javascript" src="myjs.js"></script>
		<title>  </title>
		
	</head>
	
	<body>
	<h1 id='mainhead'>Blockbuster </h1>
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
			
			<div id="searchBar">
			<input type="text" placeholder="Search.."><input name="submit" type="submit" value="Search" />
			</div>
		</ul>
		
	</header>

	</body>
</html>