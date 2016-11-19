<?php
include('session.php');


$id=$_POST['id'];
$cs=$_POST['cs'];

$id=$_POST['id'];
$ch=$_GET['ch'];
$pid=$_GET['pid'];

if($cs=='Closed')
{
$newstatus='Open';
}
if($cs=='Open')
{
$newstatus='Closed';
}
echo"$id";

$query="update event set status='$newstatus' where id=$id";
 $result=mysql_query($query,$link); 

header("Location:account.php?ch=$ch & pid=$pid");


?>