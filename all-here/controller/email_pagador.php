<?php 

include('../database/conexao.php');

$consulta = "SELECT email FROM usuarios_cadastrados";
$inject_consulta = mysqli_query($con,$consulta);

foreach($inject_consulta as $show_consulta){
	/*echo '<pre>';

	var_dump($show_consulta['email']);

	echo '</pre>';*/
}


?>