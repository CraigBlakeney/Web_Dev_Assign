<?php require 'config.php'; ?>
<html> 
	<head>
		<link id="pagestyle" href="index.css" rel="stylesheet" type="text/css" >
		<title>  </title>
		
	</head>
	
	<body>
	<h1 id='mainhead'> Blockbuster </h1>
	<header>
		<ul>
		<li> <a href="index.php">Home</a> </li>
		<?php if(isset($_SESSION['username']))
		{
			echo "<li class ='loginout'> <a href='logout.php'>Logout</a> </li>";
			
		}
		else
		{
			echo "<li class='loginout'> <a href='register.php'>Register</a> </li> <li class='loginout'> <a href='Login_Page.php'>Login</a> </li>";
		}
		?>
			
			<div id="searchBar">
			<input type="text" placeholder="Search..">
			</div>
		</ul>
		
	</header>

	</body>
</html>