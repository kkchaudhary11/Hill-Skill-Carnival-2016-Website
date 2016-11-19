<html>
<head>
<title>Hill Skill 2016</title>
</head>
<body>
<br><br>
<center><h1 style='font-size:50px;'>HILL SKILL CARNIVAL 2016</h1>
<div style="width:1000px; text-align:left; font-size:30px; position:static; ">


<?php
include('session.php');

$rno=$_POST['rno'];

 $result=mysql_query("SELECT * FROM registrations WHERE regno='$rno'",$link);




while($row=mysql_fetch_assoc($result))
{
echo"
<div style=' width:800px; float:left; height:200px;'>
<p>This certifies that ".$row['name']." is a student of college ".$row['cname']." of ".$row['year']." year. The student has registered as ".$row['rtype']." in the evet of ".$row['event']." for HILL SKILL CARNIVAL 2016 </p><br></div>
<div style=' width:150px; border:1px solid black;  height:200px; float:right; '>Passport size photo</div>

<div style='width:1000px;  position:static;'><b>College Address:</b> ".$row['cadd']." <br><br>
<b ><p style=' text-align:right; '>".$row['cname']." authority</p></b><br><hr><br></div>

<table width='600px'  border='' style='text-align:left; font-size:30px; border:1px solid;'  >
<tr><th>Name of participant</th><td>".$row['name']."</td><tr>
<tr><th>College</th><td>".$row['cname']."</td><tr>
<tr><th>Contact</th><td>".$row['phone']."</td><tr>
<tr><th>E:mail</th><td>".$row['mail']."</td><tr>
<tr><th>Event </th><td>".$row['event']."</td><tr>
<tr><th>Participation type</th><td>".$row['rtype']."</td><tr>
<tr><th>Team Members</th><td>".$row['members']."</td><tr>
</table>

<br >
<b>Registration Fee: ".$row['fee']."</b>
<br >
<b>Registration No: ".$row['regno']."</b>

<b ><p style=' text-align:right; '> Hill Skill Registration Authority</p></b><br><br>

<form action='verify.php?ch=4&pid=0' method='post'>
       <input type='hidden' name='id' value='$rno' >
      <input type='submit' value='Verified' ></form>


</div>
</center>";
}


?>

</body>
</html>