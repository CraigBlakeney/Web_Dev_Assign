<?php include 'navbar.php';?>

<title>Password Recovery</title>

<?php
require('config.php');
session_start();

// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	//Checking if user used correct username and email to confirm registration
        $query = "SELECT * FROM `userinfo` WHERE username='$username'
and email= '$email'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
				if($rows==1){
				
				header("Location: pwrecovery1.php");
				 }else{
					echo  "<div class='loginhelp'> <h3>Username/email is incorrect.</h3> <br/>Click here to <a class='loginhelp' href='register.php'>re-register</a></div>";
					}
		}else{
	?>
<div class="form">
<h2>Password Recovery</h2>
<form action="" method="post" name="pwrecovery">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input name="submit" type="submit" value="Submit" />
</form>
</div>
<?php } ?>
