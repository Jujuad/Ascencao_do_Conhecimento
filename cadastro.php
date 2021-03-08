<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$login = $_POST['login'];
$senha = MD5($_POST['senha']);
$connect = mysqli_connect('localhost','root','');
$db = mysqli_select_db($connect,'adc');
$select = mysqli_query($connect, "SELECT login FROM cadastro WHERE login ='$login'");
$array = mysqli_fetch_array($select);
$logarray = $array['login'];

  if($login == "" || $login == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo login deve ser preenchido');window.location.href='
    cadastro.html';</script>";

    }
    else{
      if($logarray == $login){

        echo"<script language='javascript' type='text/javascript'>
        alert('Esse login já existe');window.location.href='
        cadastro.html';</script>";
        die();

      }
      else{
        $insert = mysqli_query($connect, "INSERT INTO cadastro (login,senha) VALUES ('$login', '$senha')");

        if($insert){
          echo"<script language='javascript' type='text/javascript'>
          alert('Usuário cadastrado com sucesso!');window.location.
          href='cadastro.html'</script>";
          header("Location:glossario.php");
        }
        else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível cadastrar esse usuário');window.location
          .href='cadastro.html'</script>";
        }
      }
    }
?>