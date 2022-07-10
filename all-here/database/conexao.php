<?php 

$host = 'localhost';
$dbname = 'all_here';
$usuario = 'root';
$senha = '';

$con = mysqli_connect($host,$usuario,$senha,$dbname);

if($con){
	//echo 'conexao feita com sucesso';
}else{
	die('error ao fazer conexao').mysqli_connect_error();
}





?>