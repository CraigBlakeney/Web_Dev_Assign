<?php session_start();  include 'navbar.php'?>

		<p class="loginhelp">Welcome <?php 
		if(isset($_SESSION['username']))
		{
			echo $_SESSION['username'];
		}else
		{
			echo 'guest';
		}			
		?>!</p>
