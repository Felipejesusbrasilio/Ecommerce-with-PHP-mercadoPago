<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../css/style_v1_formulario.css">
<title>ALL-HERE</title>
</head>
<body>

<header>
	<h1>CADASTRE-SE</h1>
</header>

<div class="container" id="form-cadastro">
	<div class="painel">
			<div class="quadros">
			<form action="/all-here/controller/cadastro.php" method="POST" id="formulario">

			<label>E-mail</label>
			<input type="text" class="form-control" name="email" id="email">
			<label>Repetir-email</label>
			<input type="text" class="form-control" name="repetir_email" id="repetir_email">
			<h1>Dados cadastrais</h1>

			<label>Nome</label>
			<input type="text" class="form-control" name="nome" id="nome">
			<label>Sobre-nome</label>
			<input type="text" class="form-control" name="sobre" id="sobre">

            <label>CPF</label>
			<input type="text" class="form-control" name="cpf" id="cpf">
			<label>Telefone</label>
			<input type="text" class="form-control" name="telefone" id="telefone">

			<label>Celular</label>
			<input type="text" class="form-control" name="celular" id="celular">
			<label>Nacimento</label>
			<input type="text" class="form-control" name="nacimento" id="nacimento">
            
            <div>
			<label>Sexo:</label>
			<label>masculino</label>
			<input type="radio" name="masculino" class="form-check-input" id="masculino">
			<label>feminino</label>
			<input type="radio" name="feminino" class="form-check-input" id="femenino">
		    </div>
            <div>
		    <label>Receber ofertas e novidades no email</label>
		    <input class="form-check-input" type="checkbox" name="novidades" id="novidades">
            </div>

		</div>
		<div class="quadros">

			<label>Crie uma senha</label>
			<input type="password" class="form-control" name="senha" id="senha">
			<label>Repetir-senha</label>
			<input type="password" class="form-control" name="repetir_senha" id="repetir_senha">
            <h1>Endereço de entrega</h1>

            <label>Cep</label>
			<input type="text" class="form-control" name="cep" id="cep">
            <label>Numero da residencia</label>
			<input type="text" class="form-control" name="numero" id="numero">
			<label>Complemento</label>
			<input type="text" class="form-control" name="complemento" id="complemento">

			<label>Referencia</label>
			<input type="text" class="form-control" name="referencia" id="referencia">
			
             
            <input type="submit" name="submit" value="Cadastre-se" id="cadastro">    
             
		    </form>
		</div>

	</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="../javascript/jquery-3.6.0.js"></script>
<script src="http://jqueryvalidation.org/files/dist/jquery.validate.js"></script>
<script src="../javascript/jquery_v3.js"></script>
</body>


</html>