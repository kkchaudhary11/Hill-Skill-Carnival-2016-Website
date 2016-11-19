<html>
<head>
<title>Hill Skill 2016</title>
</head>
<body>
<br><br>
<center><h1 style='font-size:50px;'>HILL SKILL CARNIVAL 2016</h1>
<div style="width:1000px; text-align:left; font-size:30px; position:static; ">



<?php

// Establishing Connection with Server by passing server_name, user_id and pwrd as a parameter
require_once('connect.php');


// Selecting Database
mysql_select_db($database_localhost,$link);


if(!$form=$_POST['form'])
{
header('Location: index.php');
}

if($form=='SUBMIT')
{

$cname=$_POST['cname'];
$year=$_POST['year'];
$rtype=$_POST['rtype'];
$cadd=$_POST['cad'];
$name=$_POST['name'];
$con=$_POST['no'];
$mail=$_POST['mail'];
$event=$_POST['event'];
$members=$_POST['members'];
$v='no';


if($members=='')
{
$members='No Members/Single Event';
}


$r=mysql_query("SELECT * FROM event WHERE name='$event'",$link);



while($row=mysql_fetch_assoc($r))
{
$fee=$row['regfee'];
$status=$row['status'];
}

if($status=='Closed')
{
echo"Registrations will be open soon
<a href='registration.php'>Click here if not redirected automatically</a>";
header('refresh:5;url=registration.php');
}
else
{




echo"
<div style=' width:800px; float:left; height:200px;'>
<p>This certifies that $name is a student of $cname of $year year/class. The student has registered as ''$rtype'' in the evet of ''$event'' for HILL SKILL CARNIVAL 2016 </p><br></div>
<div style=' width:150px; border:1px solid black;  height:200px; float:right; '>Passport size photo</div>

<div style='width:1000px;  position:static;'><b>College Address:</b> $cadd <br><br>
<b ><p style=' text-align:right; '> $cname authority</p></b><br><hr></div>

<table width='1000px' style='text-align:left; font-size:30px;'  >
<tr><th>Name of participant :</th><td>$name</td><tr>
<tr><th>College/School :</th><td>$cname</td><tr>
<tr><th>Contact :</th><td>$con</td><tr>
<tr><th>E-mail :</th><td>$mail</td><tr>
<tr><th>Event :</th><td>$event</td><tr>
<tr><th>Participation type :</th><td>$rtype</td><tr>
<tr><th>Team Members :</th><td>$members</td><tr>
</table>
<hr>
<br >
<b>Registration Fee: $fee</b><br >";


$r=mysql_query("INSERT INTO registrations (name, cname, year, cadd, mail, phone, event, rtype, members,fee,verified) VALUES('$name','$cname','$year','$cadd','$mail','$con','$event','$rtype','$members','$fee', '$v')" );

 $query="SELECT * FROM registrations where name='$name' && cname='$cname'&& year='$year' && cadd='$cadd' && mail='$mail' && 
phone='$con' && event='$event' && rtype='$rtype'&&  fee='$fee' && verified='$v' && members='$members' ";
$result=mysql_query("$query",$link);



while($row = mysql_fetch_assoc($result))
{
   echo"<b>Registration No.: ".$row['regno']."</b>";
}

echo"
<b ><p style=' text-align:right; '> Hill Skill Registration Authority</p></b><br><br>
</div>


</center>


";
echo"<i><b>Note:</b> Day Boarders (Per head): Rs.200; Day Night Boarders (Per head): Rs.300<br></i>";

}

}




?>
<button onclick="myFunction()">Print this page</button>

<script>

function myFunction() {
    window.print();
}
</script>


</body>