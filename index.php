<?php session_start();  include 'navbar.php'?>
<html> 
	<head>

		
	</head>

		<title>  </title>
		
	<body>
		<p>Welcome <?php if(isset($_SESSION['username'])){
			echo $_SESSION['username'];
		}else
		{
			echo 'guest';
		}			
		?>!</p>
	</body>
</html>