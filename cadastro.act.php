<?php


extract($_POST);
extract($_FILES);
require('connect.php');
$senha = md5($senha);

if( mysqli_query( $con, "INSERT INTO `tb_cadastro_tc` (`codigo`, `nome`, `sobrenome`, `email`, `senha`)
 VALUES (NULL, '$nome', '$sobrenome', '$email', '$senha');")){
    }else{
        $msg = "<p class=erro>Erro ao criar registro!</p>";
    }
    @session_start();
    $_SESSION['msg'] = $msg;


 header("location:home.php");
 
?>