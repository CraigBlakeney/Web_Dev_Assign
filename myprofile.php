<?php session_start();  include 'navbar.php'?>


<input id="display_Details" type = "button" value="Display User Details" onclick="DisplayDetails();" style="float:right">
<p id="user_details" class="loginhelp" style="display:none" >
<?php	
		require('config.php');
		$username = $_SESSION['username'];
		$query = "SELECT * from userinfo WHERE username= '$username'";
		$result = mysqli_query($con, $query);
		if(mysqli_num_rows($result))
		{	
			while($row = mysqli_fetch_assoc($result)){
				echo "Customer ID: " .$row['userID']. "<br>Username: " .$row['username']. "<br> Name: " . $row['firstname']. " " . $row['lastname']. "<br>Email: " .$row['email']."<br";
			}
		}
		?>
		</p>
		<?php
		require('config.php');
		// If form submitted, insert values into the database.
		if (isset($_POST['email'])){
        // removes backslashes
		$username = $_SESSION['username'];
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$firstname = stripslashes($_REQUEST['firstname']);
		$firstname = mysqli_real_escape_string($con,$firstname);
		$lastname = stripslashes($_REQUEST['lastname']);
		$lastname = mysqli_real_escape_string($con,$lastname);
		$query = "Select * from userinfo where username ='$username'";
		$result = mysqli_query($con,$query);
		$rows = mysqli_num_rows($result);
			if($rows==1){
				$sql = mysqli_query($con,"UPDATE userinfo SET email='$email' , firstname='$firstname', lastname='$lastname' where username='$username'");
				header("Location: myprofile.php");
			}
		}
		else
		{ ?>
		<br>
		<div id="update_details">
		<input id="displayform" type = "button" value = "Update Details" onclick ="DisplayForm();" >
		<br>
		<form id="change_details" name="Change Details" action="" method="post" style="display:none">
		<br>
		<p class="formtitle">Email: <input type="email" name="email" placeholder="Email" required /></p>
		
		<p class="formtitle">First Name: <input type="text" name="firstname" placeholder="First Name" required /></p>
		<p class="formtitle">Last Name: <input type="text" name="lastname" placeholder="Last Name" required /></p>
		<?php } ?>
		
		<input type="submit" name="submit" value="Submit" />
		</form>
		</div>
		<br>
		<?php
		require('config.php');
		// If form submitted, insert values into the database.
		if (isset($_POST['oldpassword'])){
        // removes backslashes
		$username = $_SESSION['username'];
		$oldpassword = stripslashes($_REQUEST['oldpassword']);
		$oldpassword = mysqli_real_escape_string($con,$oldpassword);
		$newpassword = stripslashes($_REQUEST['newpassword']);
		$newpassword = mysqli_real_escape_string($con,$newpassword);
		$confirmpassword = stripslashes($_REQUEST['confirmpassword']);
		$confirmpassword = mysqli_real_escape_string($con,$confirmpassword);
		$query = "Select * from userinfo where username ='$username' and password='".md5($oldpassword)."'";
		$result = mysqli_query($con,$query);
		$rows = mysqli_num_rows($result);
			 if($rows==1){
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
					}
					else{
						echo "<p class='loginhelp'>Incorrect Old Password entered </p> ";
					}
		}else{
			?>
		<div id="pwchange">
		<input id="changepw_button" type="button" value="Change Password" onclick="changePw();">
		<form id="change_pw" name="Change Password" action="" method="post" style="display:none">
		<p class="formtitle">Old Password: <input type="password" name="oldpassword" placeholder="Old Password" required /></p>
		<p class="formtitle">New Password: <input type="password" name="newpassword" placeholder="New Password" required /></p>
		<p class="formtitle">Confirm Password: <input type="password" name="confirmpassword" placeholder="Re-enter new Password" required /></p>
		<input type="submit" name="submit" value="Submit" />
		</form>
		</div>
		<?php } ?>