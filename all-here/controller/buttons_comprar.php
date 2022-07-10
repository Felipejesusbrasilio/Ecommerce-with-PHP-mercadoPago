<?php 

require_once '../database/conexao.php';
require_once 'login.php';


if($_POST['submit']){

$dados = array();

@$dados[0] = $_POST['p'];
@$dados[1] = $_POST['m'];
@$dados[2] = $_POST['g'];
@$dados[3] = $_POST['gg'];

if (isset($_SESSION['on'])){

if ($dados[0]){

$_SESSION['sucesso'] = "<div class='alert alert-success' role='alert'>Tamanho enviando com sucesso</div>";

require_once 'mercadoPago.php';

}else{

$_SESSION['Error'] = "<div class='alert alert-danger' role='alert'>Error tamanho não selecionado</div>";
echo "<script>setTimeout(()=>{window.location.href='/all-here/index.php'},1500)</script>";

}


if ($dados[1]){

$query = "INSERT INTO tamanhos(p,m,g,gg) VALUES ('$dados[0]','$dados[1]','$dados[2]','$dados[3]')";
$inject_for_mysql = mysqli_query($con,$query);

$_SESSION['sucesso'] = "<div class='alert alert-success' role='alert'>Tamanho enviando com sucesso</div>";

}else{

$_SESSION['Error'] = "<div class='alert alert-danger' role='alert'>Error tamanho não selecionado</div>";
echo "<script>setTimeout(()=>{window.location.href='/all-here/index.php'},1500)</script>";

}


if ($dados[2]){

$query = "INSERT INTO tamanhos(p,m,g,gg) VALUES ('$dados[0]','$dados[1]','$dados[2]','$dados[3]')";
$inject_for_mysql = mysqli_query($con,$query);

$_SESSION['sucesso'] = "<div class='alert alert-success' role='alert'>Tamanho enviando com sucesso</div>";

}else{

$_SESSION['Error'] = "<div class='alert alert-danger' role='alert'>Error tamanho não selecionado</div>";
echo "<script>setTimeout(()=>{window.location.href='/all-here/index.php'},1500)</script>";

}


if ($dados[3]){

$query = "INSERT INTO tamanhos(p,m,g,gg) VALUES ('$dados[0]','$dados[1]','$dados[2]','$dados[3]')";
$inject_for_mysql = mysqli_query($con,$query);

$_SESSION['sucesso'] = "<div class='alert alert-success' role='alert'>Tamanho enviando com sucesso</div>";

}else{

$_SESSION['Error'] = "<div class='alert alert-danger' role='alert'>Error tamanho não selecionado</div>";
echo "<script>setTimeout(()=>{window.location.href='/all-here/index.php'},1500)</script>";

}

}else{
  echo "<div class='alert alert-warning' role='alert'>É preciso fazer o cadastro e depois o login</div>";
  echo "<script>setTimeout(()=>{window.location.href='/all-here/index.php'},1500)</script>";
}

}


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style_v4.css">
    <title>ALL-HERE</title>
</head>
<body>


<?php 


if (@$_SESSION['sucesso']){
    echo @$_SESSION['sucesso'];
}else{
    echo @$_SESSION['Error'];
}


?>


</body>
</html>