<?php

// Establishing Connection with Server by passing server_name, user_id and pwrd as a parameter
require_once('connect.php');


// Selecting Database
mysql_select_db($database_localhost,$link);


session_start();// Starting Session



// Storing Session
$user_check=$_SESSION['login_user'];


// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select * from users where name='$user_check'", $link);


$row = mysql_fetch_assoc($ses_sql);
$login_session =$row;

if(!$_SESSION['choice']=$_GET['ch'])
{
$_SESSION['choice']=NULL;
}

if(!$_SESSION['choice1']=$_GET['pid'])
{
$_SESSION['choice1']=0;
}


if(NULL==$login_session)
{
mysql_close($connection); // Closing Connection
 // Redirecting To Home Page
header('Location:adminlogin.php');

}



?>