<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/acessorios.css">
    <title>Acessórios</title>
</head>
<body>
<?php
      require('connect.php');
      $cadastros = mysqli_query($con,"Select * From `tb_acessorios_tc` ORDER BY `codigo`");
      echo "<div class=\"box\">";
      while($contato = mysqli_fetch_array($cadastros)){
        echo "<div class=\"sc\">";

        //Validação de foto
        if($contato['foto'] != ""){
            echo "<p id= pag >Nome: $contato[nome]</p>";
            echo "<p id= pag >Valor: R$ $contato[valor] </p>";
          echo "<p><img src=$contato[foto]></p>";
          }else{
          echo "<p><img src=img/acessorios/default.png></p>";
          }
    
        
        @session_start();
          if($_SESSION['login'] = true && $_SESSION['email'] == "topculture@gmail.com"){
            echo "<p id= pag><a href=alterar.php?cod=$contato[codigo]>Alterar</a></p>";
            echo "<p id= pag><a href=javascript:confirmar($contato[codigo])>Excluir</a></p>";
            echo "<p id= pag><a href=menuAdm.php?cod=$contato[codigo]>Voltar</a></p>";
          }else{
            echo "<h3 id= pag ><a href=comprar.php>COMPRAR</a></h3>"; //CRIAR PAGINA DE COMPRA
          }
        echo "</div>";
      }
        echo "</div>";
?>

<script>
  
  function confirmar(codigo){
    resposta = confirm("Deseja excluir o registro" + "-"+codigo+"?");

    if(resposta == true){
      window.location = "Excluir.php?cod="+codigo;
    }
  }
    
  </script>
 
</body>
</html>
    
</body>
</html>