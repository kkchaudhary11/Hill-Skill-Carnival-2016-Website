<?php
include('session.php');

$rno=$_POST['id'];

$id=$_POST['id'];
$ch=$_GET['ch'];
$pid=$_GET['pid'];

$query="update registrations set verified='Yes' where regno=$id";
 $result=mysql_query($query,$link); 
echo"$query";
header("Location:account.php?ch=$ch & pid=$pid");

?>