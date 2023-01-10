<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/menuAdm.css">
    <title>Menu Adm</title>
</head>
<body>

    <h1>ADM TOP CULTURE</h1>
    <?php
    @session_start();
    // var_dump($_SESSION);
    ?>
    <nav>
    <h2><a href="logoff.php">Sair</a></h2>
       <h2><a href="#">PROMOCÃO</a></h2>
       <h2><a href="#">ROUPAS</a></h2>
       <h2><a href="acessorios.cad.php">ADICIONAR-ACESSÓRIOS</a></h2>
       <h2><a href="acessorios.php">EDITAR-ACESSÓRIOS</a></h2>
    </nav>

    
</body>
</html>