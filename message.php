<?php


// Establishing Connection with Server by passing server_name, user_id and pwrd as a parameter
require_once('connect.php');

// Selecting Database
mysql_select_db($database_localhost,$link);

if(!$form=$_POST['form'])
{
header('Location: index.html');
}

if($form=$_POST['form'])
{
 if($form=='SUBMIT')
 {
 $name=$_POST['name'];
 $mail=$_POST['mail'];
 $contact=$_POST['no'];
 $query=$_POST['message'];
 
 $result=mysql_query("INSERT INTO query (name,email,contact,queri,status) VALUES('$name','$mail','$contact','$query','new')" );

 }
echo"Your query is taken successfully, You will get a mail from us soon,!!! you will be redirected shortly<br>
<a href='index.php'>Click here if not redirected automatically</a>";
header('refresh:5;url=index.php');
}

?>