<?php
session_start();

/* removes login info*/
session_unset();

/* mark as guest */
$_SESSION['guest'] = true;
$_SESSION['username'] = 'Guest';

header("Location: landing.php");
exit;
?>