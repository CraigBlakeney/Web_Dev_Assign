<?php session_start(); include 'navbar.php'; ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="index.css"/>

<?php 
//gets the userID and then checks the myfav table for any rows with the same userID and then displays the content
 $counter = 2;
 require 'config.php';
 $username = $_SESSION['username'];
 //finds userID for current user
 $query = "SELECT userID from userinfo where username= '$username'";
 $result = mysqli_query($con,$query);
 $row1 = mysqli_fetch_array($result);
 $userID = $row1['userID'];
 //finds any favourites from mfav table with matching userid
 $result1 = mysqli_query($con,"SELECT * from myfav where userID = '$userID'");
		while($rows = mysqli_fetch_array($result1)){
			$item_ID = $rows['item_ID'];
			//gets all dvdinfo for the dvds which user has favourited and displays 1 by 1
			$result2 = mysqli_query($con,"SELECT * from dvd_info where item_ID= '$item_ID'");
					while($row = mysqli_fetch_array($result2))
				{
					
					$item_id = $row['item_ID'];
					
					if($counter == 3)
					{
						echo'<div class="container">';
						echo'<div class = "col">';
						$counter = 0;
					}
					
					echo "
						<div class = 'col-sm-4'>
							<div class = 'panel panel-primary'>
								<div class = 'panel-body'> <img src='src/".$row['image_code'].".jpg' style='width:100%'> </div>
									<div class = 'panel-footer'>
									
										" . $row['m_Title'] . "
										" . $row['m_Genre'] . "
										" . $row['m_PG'] . "
										<br>
										<td>  <input type='button' value='Remove from favourites' onclick= Remove_from_Favourites(". $item_id . ");>  </td>
							</div>
						</div>
					</div>
				</div>
				";
				$counter++;	
		}
		}
	?>
 