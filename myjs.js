function testing(){
		 <?php 
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "test976";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 

			$sql = "SELECT eduID, eduschool from tbleducation";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					echo "<br> id: ". $row["eduID"]. "<br> college: ". $row["eduschool"];
				}
			} else {
				echo "0 results";
			}

			$conn->close(); ?> 
};