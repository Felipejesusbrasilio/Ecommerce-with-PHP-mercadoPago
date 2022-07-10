<?php 

include('../database/conexao.php');

session_start();

if (isset($_POST['enviar'])):

$email = $_POST['email'];
$senha = $_POST['senha'];	

$query_login = "SELECT * FROM usuarios_cadastrados";
$inject_query_login = mysqli_query($con,$query_login);

if ($inject_query_login):

    foreach($inject_query_login as $show_now){
    	if ($email === $show_now['email'] && $senha === $show_now['senha']){
        
    	$_SESSION['on'] = $show_now['nome'];

    	echo "<div class='alert alert-success' role='alert'><img src='../imagem/aceitar.png' width='35' /> Login realizado com sucesso</div>";

        echo "<script>setTimeout(()=>{window.location.href='/all-here/index.php'},1500)</script>";
     
    	}elseif($email == '' && $senha == ''){
            echo "<div class='alert alert-warning' role='alert'>É preciso digitar o e-mail e a senha</div>";
            echo "<script>setTimeout(()=>{window.location.href='/all-here/views/window_login.php'},1500)</script>";
        }else{
            echo "<div class='alert alert-danger' role='alert'>E-mail ou Senha invalidos</div>";
            echo "<script>setTimeout(()=>{window.location.href='/all-here/views/window_login.php'},1500)</script>";
        }
        
    }
	
	endif;	
    
endif;



?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style_logar.css">
    <title>ALL-HERE</title>
</head>



