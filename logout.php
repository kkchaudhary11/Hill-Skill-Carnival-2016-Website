<?php
session_start();
unset($login_session);
session_destroy(); // Destroying All Sessions

header("Location: adminlogin.php"); // Redirecting To Home Page

?>