<?php include 'navbar.php';?>

<title>Change Password</title>

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
    $result = mysqli_query($con,"select * from userinfo where username= '$username'");
	$row = mysqli_num_rows($result);
	
	if($row==1)
	{
		
		//updates the users password if both are correct
			 if($newpassword == $confirmpassword)
			 {
				$sql = mysqli_query($con,"UPDATE userinfo SET password='".md5($newpassword)."' where username='$username'");
				if($sql){
				echo "<p class='loginhelp'> Password Changed Successfully</p>";
				}
			 }
			 else
				 //if passwords didnt match
			 {	
				 echo "<p class='loginhelp'> Passwords do not match, please try again <a href='pwrecovery1.php' class='loginhelp'>Click Here</a></p>";
			 }
	}//if username didnt match any in system
	else
	{
		echo "<p class='loginhelp'>Incorrect username entered</p>";
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
