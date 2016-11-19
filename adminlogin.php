<!DOCTYPE html>

<?php
include('login.php'); // Includes Login Script
require_once('connect.php');
// Selecting Database
mysql_select_db($database_localhost,$link);
if(isset($_SESSION['login_user']))
{
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select * from users where name='$user_check'", $link);
$row = mysql_fetch_assoc($ses_sql);
$login =$row;
header("location: account.php?ch=1");
}
?>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login Form</title>
  <link rel="stylesheet" href="css/login.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>

<body>
  <section class="container">
    <div class="login">
      <h1>ADMIN LOGIN</h1>
      <form method="post" action="login.php">
        <p><input type="text" name="name" value=""  required='true' placeholder="Username"></p>
        <p><input type="password" name="pwrd" value="" placeholder="Password"  required='true'></p>
        
        <p class="submit"><input type="submit" name="form" value="Login"></p>
      </form>
    </div>

   
  </section>

  <section class="about">
   
    <p class="about-author">
      &copy; 2016 <a href="http://hillskill2016.in" target="_blank">hillskill2016</a> -
      <a href="http://sirda.in" target="_blank">SIRDA</a><br>
      Developed by CSE Department
  </section>
</body>
</html>
