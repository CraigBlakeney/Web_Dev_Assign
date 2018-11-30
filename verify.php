<?php include 'index.php'; ?>	
	<?php
		$usr = mysql_real_escape_string($_POST['username']); 
		$pas = hash('sha256', mysql_real_escape_string($_POST['password'])); 
		$sql = mysql_query("SELECT * FROM userinfo 
        WHERE Username='$usr' AND 
        password='$pas' 
        LIMIT 1");
		
		if(mysql_num_rows($sql) == 1){ 
        $row = mysql_fetch_array($sql); 
        session_start(); 
        $_SESSION['username'] = $row['Username']; 
        $_SESSION['fname'] = $row['firstName']; 
        $_SESSION['lname'] = $row['lastName']; 
        $_SESSION['logged'] = TRUE; 
        header("Location: index.php"); // Modify to go to the page you would like 
        exit; 
		}
	?>
		<?php 
	session_start(); 
		if(!$_SESSION['logged']){ 
    header("Location: login_page.php"); 
    exit; 
	} 
	echo 'Welcome, '.$_SESSION['username']; 
	?> 