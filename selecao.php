<?php

  $login_cookie = $_COOKIE['login'];
    if(isset($login_cookie)){
      echo"Bem-Vindo, $login_cookie <br>";
      echo"Essas informações <font color='red'>PODEM</font> ser acessadas por você";
    }else{
      echo"Bem-Vindo, convidado <br>";
      echo"Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
      echo"<br><a href='login.html'>Faça Login</a> Para ler o conteúdo";
    }
?>

<html>

<head>
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" type="text/css" href="./css/aplication.css">
    <title> Seleção</title>

    <header class="menu">
        <main>
            <div class="configuracao">
                <div class="logo">
                    <img src="./img/logo.png">
                </div>

                <div class="voltar">
                    <a href="./glossario.php"><img src="./img/back.png"></a>
                </div>
            </div>
        </main>
    </header>
</head>

<body background="./img/background.png">
    <br></br>
    <br></br>
    <br></br>
    <br></br>
    <br></br>
    <br></br>
    <div class="quiz">

        <p>
            <a href="./materias.php"><input type="submit" value="QUIZ INFORMATIVO" /> </a>
        </p>
    </div>
    <div class="info">
        <p>
            <a href="./materiasinfo.php"><input type="submit" value="INFORMAÇÕES" /> </a>
        </p>
    </div>
    <br></br>
    <br></br>
    <br></br>
    <br></br>
    <div class="logoif">
        <img src="./img/logoif.png" width="80" height="70">
    </div>
</body>

</html>