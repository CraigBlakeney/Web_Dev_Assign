<?php include 'navbar.php';?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Change Password</title>
<link rel="stylesheet" href="index.css" />
</head>
<body>
<?php
require('config.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['newpassword'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($con,$username);
	$newpassword = stripslashes($_REQUEST['newpassword']);
	$newpassword = mysqli_real_escape_string($con,$newpassword);
	$confirmpassword = stripslashes($_REQUEST['confirmpassword']);
	$confirmpassword = mysqli_real_escape_string($con,$confirmpassword);
     
	 if($newpassword == $confirmpassword)
	 {
        $sql = mysqli_query($con,"UPDATE userinfo SET password='".md5($newpassword)."' where username='$username'");
		if($sql){
		echo "<p class='loginhelp'> Password Changed Successfully</p>";
		}
	 }
	 else
	 {	
		 echo "<p class='loginhelp'> Passwords do not match, please try again <a href='pwrecovery1.php' class='loginhelp'>Click Here</a></p>";
	 }
	 
}else{
	?>
<div class="form">
<h2>Password Recovery</h2>
<form action="" method="post" name="pwrecovery">
<input type="username" name="username" placeholder="Username" required />
<input type="password" name="newpassword" placeholder="New Password" required />
<input type="password" name="confirmpassword" placeholder="Confirm New Password" required />
<input name="submit" type="submit" value="Submit" />
</form>
</div>
<?php } ?>
</body>
</html>