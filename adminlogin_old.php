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

<html>
<head>
<title>LogIn</title>
</head>
<body>

<form method='post' action='login.php'>
                        
					
                            <input type='text'   required='required' placeholder='ID' name='name'/>
                      
                       
                            <input type='password'  required='required'  placeholder='Password' name='pwrd'/>
                      
                        
                       
                      
 <button type='submit'  name='form' value="login">LOG IN</button>
                        

                    </form>


</body>
</html>

