<?php session_start(); include 'navbar.php';?>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="index.css"/>
<?php
	require('config.php');
	
	$result = mysqli_query($con,"SELECT * FROM dvd_info");
	$counter = 2;

	while($row = mysqli_fetch_array($result))
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
								<br>";
								if(isset($_SESSION['username'])){
								echo"
								<td>  <input type='button' value='Add this to favourties' onclick=Add_to_Favourites(". $item_id . ");>  </td>
								";}
								echo"
								</div>
							</div>
						</div>
					</div>
			";
			$counter++;
			}
			

?>
