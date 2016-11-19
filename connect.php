<?php



/*
$hostname_localhost ="mysql6.000webhost.com";
$database_localhost ="a9330060_sirda";
$username_localhost ="a9330060_sirda";
$password_localhost ="sirda1231";
*/


$hostname_localhost ="localhost";


$database_localhost ="fest";



$username_localhost ="root";



$password_localhost ="";
 




$link = mysql_connect($hostname_localhost,$username_localhost,$password_localhost)
or
trigger_error(mysql_error(),E_USER_ERROR);
?>