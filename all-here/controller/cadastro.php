<?php 

include('../database/conexao.php');

if (isset($_POST['submit'])):
	

$usuarios = array();

@$usuarios[0] = htmlspecialchars(trim(mysqli_real_escape_string($con,$_POST['email'])));
@$usuarios[1] = htmlspecialchars(trim(mysqli_real_escape_string($con,$_POST['repetir_email'])));
@$usuarios[2] = htmlspecialchars(trim(mysqli_real_escape_string($con,$_POST['nome']))); 
@$usuarios[3] = htmlspecialchars(trim(mysqli_real_escape_string($con,$_POST['sobre'])));
@$usuarios[4] = htmlspecialchars(trim(mysqli_real_escape_string($con,$_POST['cpf'])));
@$usuarios[5] = htmlspecialchars(trim(mysqli_real_escape_string($con,$_POST['telefone'])));
@$usuarios[6] = htmlspecialchars(trim(mysqli_real_escape_string($con,$_POST['celular'])));
@$usuarios[7] = htmlspecialchars(trim(mysqli_real_escape_string($con,$_POST['nacimento'])));
@$usuarios[8] = htmlspecialchars(trim(mysqli_real_escape_string($con,$_POST['masculino'])));
@$usuarios[9] = htmlspecialchars(trim(mysqli_real_escape_string($con,$_POST['femenino'])));
@$usuarios[10] = htmlspecialchars(trim(mysqli_real_escape_string($con,$_POST['novidades'])));
@$usuarios[11] = htmlspecialchars(trim(mysqli_real_escape_string($con,$_POST['senha'])));
@$usuarios[12] = htmlspecialchars(trim(mysqli_real_escape_string($con,$_POST['repetir_senha'])));
@$usuarios[13] = trim(mysqli_real_escape_string($con,$_POST['cep']));
@$usuarios[14];
@$usuarios[15] = htmlspecialchars(trim(mysqli_real_escape_string($con,$_POST['numero'])));
@$usuarios[16] = htmlspecialchars(trim(mysqli_real_escape_string($con,$_POST['complemento'])));
@$usuarios[17] = htmlspecialchars(trim(mysqli_real_escape_string($con,$_POST['referencia'])));
@$usuarios[18];
@$usuarios[19];
@$usuarios[20];




if ($usuarios[13]):

$url = "https://viacep.com.br/ws/". $usuarios[13] ."/json/";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$viacep = curl_exec($curl);	
$viacep_data = json_decode( $viacep, true );

//echo '<pre>';
//var_dump($viacep_data);
//echo '</pre>';

$usuarios[14] = $viacep_data['logradouro'];
$usuarios[18] = $viacep_data['bairro'];
$usuarios[19] = $viacep_data['localidade'];
$usuarios[20] = $viacep_data['uf'];

//echo '<pre>';
//var_dump($usuarios);
//echo '</pre>';

endif;

if ($usuarios[0] == ''){
	$_SESSION['Error-00'] = "<div class='alert alert-danger' role='alert'>Campo email esta em branco</div>";
	echo "<script>setTimeout(()=>{window.location.href='/all-here/views/formulario.php'},1500)</script>";
}else{
	$_SESSION['0'] = "<div class='alert alert-success' role='alert'>Cadastro realizado com sucesso</div>";
}


if ($usuarios[1] == ''){
	$_SESSION['Error-01'] =  "<div class='alert alert-danger' role='alert'>Campo repetir_email esta em branco</div>";
	echo "<script>setTimeout(()=>{window.location.href='/all-here/views/formulario.php'},1500)</script>";
}else{
	$_SESSION['1'] = "<div class='alert alert-success' role='alert'>Cadastro realizado com sucesso</div>";
}

if ($usuarios[2] == ''){
	$_SESSION['Error-02'] = "<div class='alert alert-danger' role='alert'>Campo nome esta em branco</div>";
	echo "<script>setTimeout(()=>{window.location.href='/all-here/views/formulario.php'},1500)</script>";
}else{
	$_SESSION['2'] = "<div class='alert alert-success' role='alert'>Cadastro realizado com sucesso</div>";
}


if ($usuarios[3] == ''){
	$_SESSION['Error-03'] =  "<div class='alert alert-danger' role='alert'>Campo sobre-nome esta em branco</div>";
	echo "<script>setTimeout(()=>{window.location.href='/all-here/views/formulario.php'},1500)</script>";
}else{
	$_SESSION['3'] = "<div class='alert alert-success' role='alert'>Cadastro realizado com sucesso</div>";
}

if ($usuarios[4] == ''){
	$_SESSION['Error-04'] = "<div class='alert alert-danger' role='alert'>Campo cpf esta em branco</div>";
	echo "<script>setTimeout(()=>{window.location.href='/all-here/views/formulario.php'},1500)</script>";
}else{
	$_SESSION['4'] = "<div class='alert alert-success' role='alert'>Cadastro realizado com sucesso</div>";
}


if ($usuarios[5] == ''){
	$_SESSION['Error-05'] =  "<div class='alert alert-danger' role='alert'>Campo telefone esta em branco</div>";
	echo "<script>setTimeout(()=>{window.location.href='/all-here/views/formulario.php'},1500)</script>";
}else{
	$_SESSION['5'] = "<div class='alert alert-success' role='alert'>Cadastro realizado com sucesso</div>";
}

if ($usuarios[6] == ''){
	$_SESSION['Error-06'] = "<div class='alert alert-danger' role='alert'>Campo celular esta em branco</div>";
	echo "<script>setTimeout(()=>{window.location.href='/all-here/views/formulario.php'},1500)</script>";
}else{
	$_SESSION['6'] = "<div class='alert alert-success' role='alert'>Cadastro realizado com sucesso</div>";
}


if ($usuarios[7] == ''){
	$_SESSION['Error-07'] =  "<div class='alert alert-danger' role='alert'>Campo nacimento esta em branco</div>";
	echo "<script>setTimeout(()=>{window.location.href='/all-here/views/formulario.php'},1500)</script>";
}else{
	$_SESSION['7'] = "<div class='alert alert-success' role='alert'>Cadastro realizado com sucesso</div>";
}


if ($usuarios[11] == ''){
	$_SESSION['Error-11'] = "<div class='alert alert-danger' role='alert'>Campo senha esta em branco</div>";
	echo "<script>setTimeout(()=>{window.location.href='/all-here/views/formulario.php'},1500)</script>";
}else{
	$_SESSION['11'] = "<div class='alert alert-success' role='alert'>Cadastro realizado com sucesso</div>";
}


if ($usuarios[12] == ''){
	$_SESSION['Error-12'] =  "<div class='alert alert-danger' role='alert'>Campo repetir-senha esta em branco</div>";
	echo "<script>setTimeout(()=>{window.location.href='/all-here/views/formulario.php'},1500)</script>";
}else{
	$_SESSION['12'] = "<div class='alert alert-success' role='alert'>Cadastro realizado com sucesso</div>";
}

if ($usuarios[13] == ''){
	$_SESSION['Error-13'] = "<div class='alert alert-danger' role='alert'>Campo cep esta em branco</div>";
	echo "<script>setTimeout(()=>{window.location.href='/all-here/views/formulario.php'},1500)</script>";
}else{
	$_SESSION['13'] = "<div class='alert alert-success' role='alert'>Cadastro realizado com sucesso</div>";
}


if ($usuarios[15] == ''){
	$_SESSION['Error-15'] = "<div class='alert alert-danger' role='alert'>Campo numero esta em branco</div>";
	echo "<script>setTimeout(()=>{window.location.href='/all-here/views/formulario.php'},1500)</script>";
}else{
	$_SESSION['15'] = "<div class='alert alert-success' role='alert'>Cadastro realizado com sucesso</div>";
}


if ($usuarios[16] == ''){
	$_SESSION['Error-16'] =  "<div class='alert alert-danger' role='alert'>Campo complemento esta em branco</div>";
	echo "<script>setTimeout(()=>{window.location.href='/all-here/views/formulario.php'},1500)</script>";
}else{
	$_SESSION['16'] = "<div class='alert alert-success' role='alert'>Cadastro realizado com sucesso</div>";
}

if ($usuarios[17] == ''){
	$_SESSION['Error-17'] = "<div class='alert alert-danger' role='alert'>Campo referencia esta em branco</div>";
	echo "<script>setTimeout(()=>{window.location.href='/all-here/views/formulario.php'},1500)</script>";
}else{
	$_SESSION['17'] = "<div class='alert alert-success' role='alert'>Cadastro realizado com sucesso</div>";
}


// aqui estou verificando se os campos estão em branco

if (@$_SESSION['Error-00']):
	echo @$_SESSION['Error-00'];
endif;

if (@$_SESSION['Error-01']):
	echo @$_SESSION['Error-01'];
endif;

if (@$_SESSION['Error-02']):
	echo @$_SESSION['Error-02'];
endif;

if (@$_SESSION['Error-03']):
	echo @$_SESSION['Error-03'];
endif;

if (@$_SESSION['Error-04']):
	echo @$_SESSION['Error-04'];
endif;

if (@$_SESSION['Error-05']):
	echo @$_SESSION['Error-05'];
endif;

if (@$_SESSION['Error-06']):
	echo @$_SESSION['Error-06'];
endif;

if (@$_SESSION['Error-07']):
	echo @$_SESSION['Error-07'];
endif;

if (@$_SESSION['Error-11']):
	echo @$_SESSION['Error-11'];
endif;

if (@$_SESSION['Error-12']):
	echo @$_SESSION['Error-12'];
endif;

if (@$_SESSION['Error-13']):
	echo @$_SESSION['Error-13'];
endif;

if (@$_SESSION['Error-15']):
	echo @$_SESSION['Error-15'];
endif;

if (@$_SESSION['Error-16']):
	echo @$_SESSION['Error-16'];
endif;

if (@$_SESSION['Error-17']):
	echo @$_SESSION['Error-17'];
endif;



if($usuarios[0] != $usuarios[1] || $usuarios[11] != $usuarios[12]){

echo "<div class='alert alert-danger' role='alert'>Error Senha cadastrada diferente da primeira ou email cadastrado diferente do primeiro</div>";

echo "<script>setTimeout(()=>{window.location.href='/all-here/views/formulario.php'},1500)</script>";

}elseif(@$_SESSION['0'] && @$_SESSION['1'] && @$_SESSION['2'] && @$_SESSION['3'] && @$_SESSION['4'] && @$_SESSION['5'] && @$_SESSION['6'] && @$_SESSION['7'] && @$_SESSION['11'] && @$_SESSION['12'] && @$_SESSION['13'] && @$_SESSION['15'] && @$_SESSION['16'] && @$_SESSION['17']){

 $query = "INSERT INTO usuarios_cadastrados(email,repetir_email,nome,sobre_nome,cpf,telefone,celular,nacimento,masculino,femenino,novidades,senha,repetir_senha,cep,rua,numero,complemento,referencia,bairro,cidade,estado) VALUES('$usuarios[0]','$usuarios[1]','$usuarios[2]','$usuarios[3]','$usuarios[4]','$usuarios[5]','$usuarios[6]','$usuarios[7]','$usuarios[8]','$usuarios[9]','$usuarios[10]','$usuarios[11]','$usuarios[12]','$usuarios[13]','$usuarios[14]','$usuarios[15]','$usuarios[16]','$usuarios[17]','$usuarios[18]','$usuarios[19]','$usuarios[20]')";
    $inject_suarios = mysqli_query($con,$query);
     
    echo "<header>";
    echo "<div class='div-black'>".'<h1>'.'Bem-vindo'.' '.@$_SESSION['usuario'] = $usuarios['1'].'</h1>'."</div>";
    
    echo "<form action='sair.php' method='POST'>";
    
    echo "<a href='/all-here/index.php'>Voltar</a>";
    echo "<input type='submit' name='sair' value='Sair' class='sair' id='sair'>";

    echo "</form>";
    echo "<div class='alert alert-success' role='alert'>Cadastro realizado com sucesso</div>";
    echo "</header>";

}else{
    echo "<div class='alert alert-success' role='alert'>Cadastro realizado com sucesso</div>";
}
    
   
  
endif;	 

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../css/style_login.css">
<title>ALL-HERE</title>
</head>
<body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="javascript/jquery-3.6.0.js"></script>
<script src="javascript/jquery_v3.js"></script>
</body>
</html>