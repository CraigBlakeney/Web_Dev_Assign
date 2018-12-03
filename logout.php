
<?php
session_start();
// Destroys current session
if(session_destroy())
{
// Redirecting To Login Page
header("Location: Login_Page.php");
}
?>