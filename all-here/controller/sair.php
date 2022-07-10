<?php 
include('cadastro.php');

$_SESSION['usuario'] = session_destroy();
$_SESSION['usuario'] = session_unset();

header('location:/all-here/index.php');

?>