<?php
include('session.php');


$id=$_POST['q'];
$ch=$_GET['ch'];
$pid=$_GET['pid'];

$query="update query set status='seen' where id=$id";
 $result=mysql_query($query,$link); 

header("Location:account.php?ch=$ch & pid=$pid");
?>