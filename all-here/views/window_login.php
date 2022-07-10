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
        <form action="/all-here/controller/login.php" method="POST">
            <label>E-mail:</label>
            <input type="text" class="form-control" name="email">
            <br>
            <label>Senha:</label>
            <input type="password" class="form-control" name="senha">
            <br>
            <input type="submit" name="enviar" value="Logar" id="logar" />
            <div id="result">
                
            </div>
        </form>
    </div>
</div>



</body>
<script src="/all-here/javascript/jquery-3.6.0.js"></script>
</html>