<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$login = $_POST['login'];
$senha = MD5($_POST['senha']);
$connect = mysqli_connect('localhost','root','');
$db = mysqli_select_db($connect,'adc');
$entrar = $_POST['entrar'];


if(isset($entrar)){

    $verifica = mysqli_query($connect, "SELECT * FROM cadastro WHERE login = '$login' AND senha = '$senha'");

    if(mysqli_num_rows($verifica)<=0){

        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login.html';</script>";
        die();
    }else{
        setcookie("login", $login);
        header("Location:glossario.php");
    }

}
?>