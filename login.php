<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['form'])) 
{
 if (empty($_POST['name']) || empty($_POST['pwrd'])) 
 {
 $error = "name or pwrd is invalid..........you will be redirected";
header( "refresh:2;url=adminlogin.php" );
 }
else
{
// Define $name and $pwrd
$name=$_POST['name'];
$pwrd=$_POST['pwrd'];
// Establishing Connection with Server by passing server_name, user_id and pwrd as a parameter
require_once('connect.php');
// Selecting Database
mysql_select_db($database_localhost,$link);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from users where pwrd='$pwrd' AND name='$name'", $link);
$rows = mysql_num_rows($query);
if ($rows >0) 
{
  $_SESSION['login_user']=$name; // Initializing Session variable
  header("location: account.php?ch=1&pid=0"); // Redirecting To Other Page
}
else 
{
$error = "name or pwrd is invalid..........you will be redirected";
header( "refresh:7;url=adminlogin.php" );
}
}
print"$error";
mysql_close($link); // Closing Connection
}
?>