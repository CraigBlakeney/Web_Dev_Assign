<?php session_start();  include 'navbar.php'?>

<p class="loginhelp">
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
		<br>
		<input id="displayform" type = "button" value = "Update Details" onclick ="DisplayForm();">
		
		<form id="change_details" name="Change Details" action="" method="post" style="display:none">
		<p class="formtitle">*Username: <input type="text" name="username" placeholder="Username" required /></p>
		<br>
		<p class="formtitle">*Email: <input type="email" name="email" placeholder="Email" required /></p>
		<br>
		<p class="formtitle">First Name: <input type="text" name="fname" placeholder="First Name"/></p>
		<br>
		<p class="formtitle">Last Name: <input type="text" name="lname" placeholder="Last Name" /></p>
		<input type="submit" name="submit" value="Submit" />
		</form>