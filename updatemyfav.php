<?php session_start();  include 'navbar.php'?>
<?php
	require('config.php');
	//checks the info from browser if its dvdid it adds to favourites , else deletes
	if(isset($_GET['dvdid']))
	{
		$item_ID= $_GET['dvdid'];
		$username= $_SESSION['username'];
		$query="SELECT userID from userinfo where username ='$username'";
		$result = mysqli_query($con,$query);
		
		if(mysqli_num_rows($result)){
			while($row = mysqli_fetch_assoc($result)){
				$userID = $row['userID'];
			}
		}
		//adds to favourite table
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
	}
	else
	{
	//removing from database
	$item_ID= $_GET['dvd_id'];
	$username= $_SESSION['username'];
	$query = "SELECT * from userinfo where username = '$username'";
	$result1 = mysqli_query($con,$query);
		if(mysqli_num_rows($result1))
		{
			while($row = mysqli_fetch_assoc($result1)){
			$userID = $row['userID'];
		}

			$query3 = "DELETE FROM myfav WHERE userID = '$userID' AND item_ID = '$item_ID'";
			$result2 = mysqli_query($con,$query3);
			
			header("Location: myfavs.php");
				
		}
	
	}
?>