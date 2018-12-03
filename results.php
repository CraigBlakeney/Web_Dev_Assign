<?php session_start(); include 'navbar.php';?>
	<!--Bootstrap for styling results -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="index.css"/>
<!--Displays the results of users search  -->
<?php
		$searchitem = $_GET['searchitem'];
		//uses % to check all of the string for matches , even inside the string
		$query = "Select * from dvd_info
				Where lower(m_Title) like lower ('%$searchitem%')
				OR lower(m_Genre) like lower ('%$searchitem%')
				OR lower(m_PG) like lower ('%$searchitem%')";
		$result = mysqli_query($con,$query);
		$row = mysqli_num_rows($result);
		if($row >0 ){
		while($row = mysqli_fetch_array($result))
		{
			$item_id = $row['item_ID'];
			
			echo"
				<div class = 'col-sm-4'>
					<div class = 'panel panel-primary'>
							<div class = 'panel-body'> <img src='src/".$row['image_code'].".jpg' style='width:100%'> </div>
								<div class = 'panel-footer'>
	
								" . $row['m_Title'] . "
								" . $row['m_Genre'] . "
								" . $row['m_PG'] . " <br>";
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
		}}
		else //error message no matches found
		{
			echo "<p class='loginhelp'> No results found to match the search criteria </p>";
		}
?>
	