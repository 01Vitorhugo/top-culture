<?php
extract($_POST);
extract($_FILES);
require('connect.php');

$endereco = "img/acessorios/".md5(time()).".jpg";
    move_uploaded_file($foto['tmp_name'],$endereco);


if(mysqli_query($con, "INSERT INTO `tb_acessorios_tc` (`codigo`, `nome`, `valor`, `foto`) 
VALUES (NULL, '$nome', '$valor', '$endereco');")){
     $msg = "<p class=yes>Registo criado com sucesso!</p>";
}else{
    $msg = "<p class=no>Erro ao se registrar!</p>";
}

session_start();
    $_SESSION['msg']= $msg;
    header("location: acessorios.php");
?>