<?php session_start();  include 'navbar.php'?>
<?php
	require('config.php');
	$item_ID= $_GET['dvdid'];
	$username= $_SESSION['username'];
	$query="SELECT userID from userinfo where username ='$username'";
	$result = mysqli_query($con,$query);
	
	if(mysqli_num_rows($result)){
		while($row = mysqli_fetch_assoc($result)){
			$userID = $row['userID'];
		}
	}
	
	$query1 = "SELECT * from myfav where userID='$userID' and item_ID='$item_ID'";
	$result = mysqli_query($con,$query1);
	$rows = mysqli_num_rows($result);
	if($rows==1)
	{
		header("Location: store.php");
	}
	else
	{
	
	$query = "INSERT into myfav (userID, item_ID) VALUES ('$userID', '$item_ID')";
	$result = mysqli_query($con,$query);
	header("Location: store.php");
	}


?>