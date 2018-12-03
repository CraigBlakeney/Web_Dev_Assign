
<?php
//Connects to the database once and i can link this page anytime i need to. DRY Principle
$con = mysqli_connect("localhost","root","","mydatabase");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>