<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style_logar.css">
    <title>ALL-HERE</title>
</head>
<body>

<header>
    <div class="logo">
        <h1>ALL-HERE</h1>
    </div>
</header>

<div class="container">
    <div class="painel">
        <div class="redes">
            <a href="#"><img src="../imagem/facebook.png"></a>
            <a href="#"><img src="../imagem/email.png"></a>
            <a href="#"><img src="../imagem/instagram.png"></a>
        </div>
    </div>
    <div class="painel-form">
        <form action="" method="POST">
            <p>Calcular frete</p>
            <input type="text" name='destino' class='form-control' name="fretes">
            </br>
            <input type="submit" name="calcular-frete" value="Calcular-frete" id="logar">
            <div id="result">

            <?php 
            
		    if (isset($_POST['calcular-frete'])):
            
            $parametros = array();

			$parametros['nCdEmpresa'] = '';
			$parametros['sDsSenha'] = '';

			$parametros['sCepOrigem'] = '05387100';
			$parametros['sCepDestino'] = $_POST['destino'];

			$parametros['nVlPeso'] = '0.3';

			$parametros['nCdFormato'] = '1';

			$parametros['nVlComprimento'] = '10';
			$parametros['nVlAltura'] = '28';
			$parametros['nVlLargura'] = '23';
			$parametros['nVlDiametro'] = '0';

			$parametros['sCdMaoPropria'] = 's';

			$parametros['nVlValorDeclarado'] = '250';

			$parametros['sCdAvisoRecebimento'] = 'n';

			$parametros['StrRetorno'] = 'xml';


			$parametros['nCdServico'] = '04014';


			$parametros = http_build_query($parametros);
			$url = 'http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx';
			$curl = curl_init($url.'?'.$parametros);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			$dados = curl_exec($curl);
			$dados = simplexml_load_string($dados);

			foreach($dados->cServico as $linhas) {
			if($linhas->Erro == 0) {
			echo $linhas->Codigo.'</br>';
			echo $linhas->Valor .'</br>';
			echo $linhas->PrazoEntrega.' Dias </br>';
			}else {
			echo $linhas->MsgErro;
			}
			echo '<hr>';
			}


		    	
		    endif;

			
            ?>	
                
            </div>
        </form>
    </div>
</div>



</body>
<script src="/all-here/javascript/jquery-3.6.0.js"></script>
</html>