<?php 

//include('controller/produtos.php');
//include('controller/button_+.php');

// aqui é o github for instalar o mercado pago 

//https://github.com/mercadopago/sdk-php

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style_v10.css">
    <title>ALL-HERE</title>
</head>
<body>


<header>
    <div class="logo">
        <h1>ALL-HERE</h1>
    </div>
    <div class="status_login">
        <form>
            <button type="button" id="sair">Deslogar</button>
        </form>
    </div>
</header>

<div class="anuncio-black">
    <p id="text">ALL-HERE PRODUTOS DE QUALIDADE COM PREÇO QUE CABE NO SEU BOLSO</p>
</div>

<div class="login-and-cadastro">
    <div class="login">
      <a href="/all-here/views/window_login.php">LOGIN</a>
    </div>
    <div class="fretes">
        <a href="/all-here/views/fretes.php">CALCULAR FRETE</a>
    </div>
    <div class="cadastro">
      <a href="views/formulario.php">CADASTRO</a>  
    </div>
</div>

<div class="painel">
    <div class="foto">
        <img src="https://static.netshoes.com.br/produtos/bone-quiksilver-aba-curva-emb-solid-black/14/A46-8324-014/A46-8324-014_zoom1.jpg?ts=1644409064&amp;ims=544x" data-modal-trigger="photo-modal" data-ajax-modal="" data-srcset="https://static.netshoes.com.br/produtos/bone-quiksilver-aba-curva-emb-solid-black/14/A46-8324-014/A46-8324-014_zoom1.jpg?ts=1644409064&amp;ims=544x, https://static.netshoes.com.br/produtos/bone-quiksilver-aba-curva-emb-solid-black/14/A46-8324-014/A46-8324-014_zoom1.jpg?ts=1644409064&amp;ims=1088x" data-large-img-url="//static.netshoes.com.br/produtos/bone-quiksilver-aba-curva-emb-solid-black/14/A46-8324-014/A46-8324-014_zoom1.jpg?ts=1644409064">
    </div>
    <div class="quadro-formulario">
       <div class="sobre-produto">
           <h1>$250,00</h1>
           <p id="descricao">Boné Quiksilver Aba Curva Emb Solid Black - Branco</p>
       </div>
       <div class="formulario">
           <form id="formulario" action="controller/buttons_comprar.php" method="POST">
               <div class="quadros">
                    <div class="centralizando">
                        <label>P:</label>
                        <input class="form-check-input" type="checkbox" name="p" id="P">
                    </div>
               </div>
               <div class="quadros">
                    <div class="centralizando">
                        <label>M:</label>
                        <input class="form-check-input" type="checkbox" name="m" id="M">
                    </div>
               </div>
               <div class="quadros">
                    <div class="centralizando">
                        <label>G:</label>
                        <input class="form-check-input" type="checkbox" name="g" id="G">
                    </div>
               </div>
               <div class="quadros">
                    <div class="centralizando">
                        <label>GG:</label>
                        <input class="form-check-input" type="checkbox" name="gg" id="GG">
                    </div>
               </div>
               <div class="painel-comprar">
                   <div class="comprar">
                       <input type="submit" name="submit" value="Comprar" id="comprar">
                   </div>
               </div>
           </form>
       </div>     
    </div>
</div>


<div class="footer">
    <div class="links">
        <h1>Suporte:</h1>
        <p>E-mail:</p>
        <p>all-here@outlook.com</p>
        <h1>Contato:</h1>
        <p>Telefone:</p>
        <p>(11)9xxxxxxxx</p>
        <h1>Sobre:</h1>
        <a href="#">Sobre all-here</a>
        <br>
        <a href="#">Politica de privacidade</a>
    </div>
    <div class="logo-all-here">
        <div class="img">
            <h1>ALL-HERE</h1>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="javascript/jquery-3.6.0.js"></script>
<script src="javascript/jquery_v5.js"></script>

<script type="text/javascript">
    
$(function(){
    $('#sair').on('click',function(){
        $.ajax({
            url:'controller/deslogar.php',
            success:function(){
              window.location.href= '/all-here/views/deslogar.php';
            },

            error:function(){
              alert('error');
            }
        })
    })
})

</script>

</body>
</html>
