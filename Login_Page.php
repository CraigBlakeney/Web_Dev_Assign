<?php include 'index.php'; ?>
<html>
	
		<h3 id ='l1'> Login </h3>
			<form action="verify.php" method="post">
				<p>Username: <input type="text" name="username" required></p>
				<p>Password: <input type="password" name="password" maxlength="20" required></p>
				<p><input type="submit" value="Log In"></p>
			</form>
	
</html>