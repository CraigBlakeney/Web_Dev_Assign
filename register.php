<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="index.css" />
</head>
<body>
<?php
require('config.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `userinfo` (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login_page.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h2>Registration</h2>
<form name="registration" action="" method="post">
<p class="formtitle">Username: <input type="text" name="username" placeholder="Username" required /></p>
<br>
<p class="formtitle">Email: <input type="email" name="email" placeholder="Email" required /></p>
<br>
<p class="formtitle">Password: <input type="password" name="password" placeholder="Password" required /></p>
<br>
<input type="submit" name="submit" value="Register" />
</form>
</div>
<?php } ?>
</body>
</html>