<?php
include('session.php');





  $query="select count(regno) AS value_sum from registrations";
  $result=mysql_query($query,$link);                
  $row = mysql_fetch_assoc($result); 
  $sum = $row['value_sum'];//total registrations

  $query="select count(regno) AS value_sum from registrations where rtype='Team Leader'";
  $result=mysql_query($query,$link);                
  $row = mysql_fetch_assoc($result); 
  $tsum = $row['value_sum'];//team registrations

  $query="select count(regno) AS value_sum from registrations where verified='no'";
  $result=mysql_query($query,$link);                
  $row = mysql_fetch_assoc($result); 
  $nsum = $row['value_sum'];//new registrations


  $query="select count(id) AS value_sum from query";
  $result=mysql_query($query,$link);                
  $row = mysql_fetch_assoc($result); 
  $tq = $row['value_sum'];//totalqueries



  $query="select count(id) AS value_sum from query where status='new'";
  $result=mysql_query($query,$link);                
  $row = mysql_fetch_assoc($result); 
  $nq = $row['value_sum'];//newqueries



?>
<html>
<head>
<title>Admin</title>
<link rel="stylesheet" href="css/admin.css">

</head>
<body>

<?php

if($login_session)
{
echo"



<center><h2>Admin Pannel</h2></center>
<form action='logout.php'><input type='submit' value='logout'></form>
<div class='sidel' style='width:20%;  float:left;'>
<ul >
<li><a href='account.php?ch=1&pid=0'>Home</a></li> 
<li><a href='account.php?ch=2&pid=0'>New Queries ( $nq )</a></li >
<li><a href='account.php?ch=3&pid=0'>All Queries ( $tq )</a></li>
<li><a href='account.php?ch=4&pid=0'>Search/Verify Registrations</a></li>  
<li><a href='account.php?ch=5&pid=0'>All Registrations ( $sum )</a></li> 
<li><a href='account.php?ch=6&pid=0'>New Registrations ( $nsum )</a></li>
<li><a href='account.php?ch=7&pid=0'>Registration Control</a></li>
<li><a href='logout.php'>Log Out</a></li> 
</ul>

</div>


<div class='data' >




";


$choice=$_SESSION['choice'];
          
if($choice==1) 
{
 



  echo"<center><b><h3>Welcome<b></h3></center> <br>
  <div  style=' width:450px; float:left;'>
  <table width='400px' border=1px style='text-align:left;'>
  <tr>
  <th>Total Registrations : </th>
  <td>$sum</td>
  </tr>
  <tr>
  <th>Team Registrations : </th>
  <td>$tsum</td>
  </tr>
  <tr>
  <th>Individual Registrations : </th>
  <td>$sum</td>
  </tr>
  <tr>
  <th>New Registrations : </th>
  <td>$nsum</td>
  </tr>
  
  </table></div>

 <div style=' width:450px; float:left; '>
 <table width='400px' border=1px bordercolor=black style='text-align:left;'>
  <tr>
  <th>Total Queries : </th>
  <td>$tq</td>
  </tr>
  <tr>
  <th>New Queries : </th>
  <td>$nq</td>
  </tr>
  <tr>
  
  </table>
  </div>
";
  
}




if ($choice==2)
{

  $form=$_GET['pid'];

  $next=$form;
   


  if($form=='0')
  {          $query="SELECT * FROM query where status='new' ORDER BY id DESC LIMIT 10";
               
  }
  else
  {
  $form=$form-10;
  $query="SELECT * FROM query WHERE(id<='$form') && (status='new')ORDER BY id DESC LIMIT 10 ";

  }


                   $result=mysql_query($query);                          
                echo"<p style='color:red;'>**Clear the queries after you respond them via official mail**</p><br><table width='900px' border=1px bordercolor=black style='text-align:left;'>
                     <tr><th>Name</th><th>Query</th><th>Contact</th><th>E-mail</th><th>Action</th></tr>
                  
                     
                     

                     ";
                 while($row = mysql_fetch_assoc($result))
                    {
                     echo "<tr><td>".$row['name']."</td><td>".$row['queri']."</td><td>".$row['contact']."</td><td>".$row['email']."</td><td><form action='clear.php?ch=$choice&pid=$form' method='post'><input type='hidden' name='q' value='".$row['id']."'>
				<input type='submit' value='Clear'></form></td></td>";
                    
                    } 

echo"</table>";
                   


if($next=='0')
{          $query="SELECT * FROM query where status='new' ORDER BY id DESC LIMIT 1";
               
}
else
{
$next=$next-10;
$query="SELECT * FROM query WHERE (id<='$form')&&(status='new')  ORDER BY id DESC LIMIT 1 ";

}

               $result=mysql_query($query);



                 while($row = mysql_fetch_assoc($result))
                    {
                  echo"   <form action='account.php?' method='get'>
		<input type='hidden' name='ch' value='2'>
			<input type='hidden' name='pid' value='".$row['id']."'>
				<input type='submit' value='older'>
				
			
		</form>";}
}





if ($choice==3)
{

  $form=$_GET['pid'];

  $next=$form;
   


  if($form=='0')
  {          $query="SELECT * FROM query ORDER BY id DESC LIMIT 10";
               
  }
  else
  {
  $form=$form-10;
  $query="SELECT * FROM query WHERE(id<='$form')ORDER BY id DESC LIMIT 10 ";

  }


                   $result=mysql_query($query);                          
                echo"<table width='900px' border=1px bordercolor=black style='text-align:left;'>
                     <tr><th>Name</th><th>Query</th><th>Contact</th><th>E-mail</th></tr>
                  
                     
                     

                     ";
                 while($row = mysql_fetch_assoc($result))
                    {
                     echo "<tr><td>".$row['name']."</td><td>".$row['queri']."</td><td>".$row['contact']."</td><td>".$row['email']."</td></tr>";
                    
                    } 

echo"</table><br>";
                   


if($next=='0')
{          $query="SELECT * FROM query ORDER BY id DESC LIMIT 1";
               
}
else
{
$next=$next-10;
$query="SELECT * FROM query WHERE id<='$form'  ORDER BY id DESC LIMIT 1 ";

}

               $result=mysql_query($query);



                 while($row = mysql_fetch_assoc($result))
                    {
                  echo"   <form action='account.php?' method='get'>
		<input type='hidden' name='ch' value='3'>
			<input type='hidden' name='pid' value='".$row['id']."'>
				<input type='submit' value='older'>
				
			
		</form>";}
}


if($choice==4) 
{


echo" <form action='search.php?ch=$choice&pid=0' method='post'>
      Registration Number: <input type='text' name='rno' >
      <input type='submit' value='search' ></form>";




}

if($choice==5) 
{


 $form=$_GET['pid'];

  $next=$form;
   


  if($form=='0')
  {          $query="SELECT * FROM registrations ORDER BY regno DESC LIMIT 10";
               
  }
  else
  {
  $form=$form-10;
  $query="SELECT * FROM registrations WHERE(regno<='$form')ORDER BY regno DESC LIMIT 10 ";

  }


                   $result=mysql_query($query);                          
                echo"<table width='900px' border=1px bordercolor=black style='text-align:left;'>
                     <tr><th>regno</th><th>Name</th><th>College</th><th>year</th><th>mail</th><th>phone</th>
                 <th>event</th></tr>
                  
                     
                     

                     ";
                 while($row = mysql_fetch_assoc($result))
                    {
                     echo "<tr><td>".$row['regno']."</td><td>".$row['name']."</td><td>".$row['cname']."</td><td>".$row['year']."</td><td>".$row['mail']."</td><td>".$row['phone']."</td><td>".$row['event']."</td></tr>";
                    
                    } 

echo"</table><br>";
                   


if($next=='0')
{          $query="SELECT * FROM registrations ORDER BY regno DESC LIMIT 1";
               
}
else
{
$next=$next-10;
$query="SELECT * FROM registrations WHERE regno<='$form'  ORDER BY regno DESC LIMIT 1 ";

}

               $result=mysql_query($query);



                 while($row = mysql_fetch_assoc($result))
                    {
                  echo"   <form action='account.php?' method='get'>
		<input type='hidden' name='ch' value='5'>
			<input type='hidden' name='pid' value='".$row['regno']."'>
				<input type='submit' value='older'>
				
			
		</form>";}




}





if($choice==6) 
{


 $form=$_GET['pid'];

  $next=$form;
   


  if($form=='0')
  {          $query="SELECT * FROM registrations where verified='no' ORDER BY regno DESC LIMIT 10";
               
  }
  else
  {
  $form=$form-10;
  $query="SELECT * FROM registrations WHERE(regno<='$form' && verified='no')ORDER BY regno DESC LIMIT 10 ";

  }


                   $result=mysql_query($query);                          
                echo"<table width='900px' border=1px bordercolor=black style='text-align:left;'>
                     <tr><th>regno</th><th>Name</th><th>College</th><th>year</th><th>mail</th><th>phone</th>
                 <th>event</th><th>Action</th></tr>
                  
                     
                     

                     ";
                 while($row = mysql_fetch_assoc($result))
                    {
                     echo "<tr><td>".$row['regno']."</td><td>".$row['name']."</td><td>".$row['cname']."</td><td>".$row['year']."</td><td>".$row['mail']."</td><td>".$row['phone']."</td><td>".$row['event']."</td><td>
                        <form action='search.php?ch=$choice&pid=$form' method='post'><input type='hidden' name='rno' value='".$row['regno']."'>
				<input type='submit' value='verify'></form></td></tr>";
                    
                    } 

echo"</table><br>";
                   


if($next=='0')
{          $query="SELECT * FROM registrations where verified='no' ORDER BY regno DESC LIMIT 1";
               
}
else
{
$next=$next-10;
$query="SELECT * FROM registrations WHERE regno<='$form' && verified='no' ORDER BY regno DESC LIMIT 1 ";

}

               $result=mysql_query($query);



                 while($row = mysql_fetch_assoc($result))
                    {
                  echo"   <form action='account.php?' method='get'>
		<input type='hidden' name='ch' value='6'>
			<input type='hidden' name='pid' value='".$row['regno']."'>
				<input type='submit' value='older'>
				
			
		</form>";}




}





if($choice==7) 
{


           $result=mysql_query("SELECT * FROM event",$link);




                        
                echo"<table width='900px' border=1px bordercolor=black style='text-align:left;'>
                     <tr><th>Event Name</th><th>Last Date Of Registration</th><th>Current Registration Status</th><th>Toggel registration</th></tr>                     
                      ";
                

 while($row = mysql_fetch_assoc($result))
                    {
                     echo "<tr><td>".$row['name']."</td><td>".$row['regdate']."</td><td>".$row['status']."</td><td>
                        <form action='control.php?ch=$choice&pid=0' method='post'>
                        <input type='hidden' name='id' value='".$row['id']."'>
                        <input type='hidden' name='cs' value='".$row['status']."'>
			<input type='submit' value='Open/Close'></form></td></tr>";
                    
                    } 


}

echo"  </div>";




}

?>




</body>
</html>