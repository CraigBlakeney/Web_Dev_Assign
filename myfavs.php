<?php session_start(); include 'navbar.php'; ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="index.css"/>

<?php 
$counter = 2;
 require 'config.php';
 $username = $_SESSION['username'];
 $query = "SELECT userID from userinfo where username= '$username'";
 $result = mysqli_query($con,$query);
 $row1 = mysqli_fetch_array($result);
 $userID = $row1['userID'];
 $result1 = mysqli_query($con,"SELECT * from myfav where userID = '$userID'");
		while($rows = mysqli_fetch_array($result1)){
			$item_ID = $rows['item_ID'];
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
 