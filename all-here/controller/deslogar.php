<?php 
include('login.php');

$_SESSION['on'] = session_destroy();
$_SESSION['on'] = session_unset();

header('location:/all-here/index.php');

?>