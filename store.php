<?php session_start(); include 'navbar.php';?>

<?php
	require('config.php');
	$result = mysqli_query($con,"SELECT * FROM dvd_info");
	while($row = mysqli_fetch_array($result))
		{
			
			$item_id = $row['item_ID'];
			
			echo "
			<div>
			<table border='1px solid black' style='color:yellow'>
						<tr> <img src='src/".$row['image_code'].".jpg'> </tr>
			<tr>
						<td>" . $row['m_Title'] . "</td>
						 <td>" . $row['m_Genre'] . "</td>
						 <td>" . $row['m_PG'] . "</td>
			</tr>
			";
			if(isset($_SESSION['username'])){
				echo'
				<tr>
			<td>  <input type="button" value="Add this to favourties" onclick=Add_to_Favourites('. $item_id . ');>  </td>
			</tr>
					</table>
					</div>';
			}else
			{
				echo"</table> </div>";
			}
		}


?>