<?php include 'navbar.php';?>

<title>Login</title>


<?php
require('config.php');
session_start();

if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `userinfo` WHERE username='$username'
and password= '".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
				if($rows==1){
				$_SESSION['username'] = $username;
					// Redirect user to index.php
				header("Location: index.php");
				 }else{
					echo  "<div class='loginhelp'> <h3>Username/password is incorrect.</h3> <br/>Click here to <a class='loginhelp' href='Login_Page.php'>Login</a></div>";
					}
		}else{
	?>
<div class="form">
<h2>Log In</h2>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>
<p class="loginhelp">Not registered yet? <a class="loginhelp" href='register.php'>Register Here</a></p>
<p ><a class="loginhelp" href='pwrecovery.php'>Forgot Password?</a></p>
</div>
<?php } ?>
