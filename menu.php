
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/menu.css">
    <title>Menu</title>
</head>
<body>
    <nav>
        <ul>
        <li><a href="#">Top Culture</a></li>
        <li><a href="acessorios.php">Acessórios</a></li>
        <li><a href="#">Roupas</a></li>

        <?php
        @session_start();
        // var_dump($_SESSION);
        if($_SESSION['logina'] === true){
       echo "<li><a href=logoff.php>Sair</a></li>";
    }else{
       echo "<li><a href=login.php>Entrar</a></li>";
    }
        ?>

        </ul>
    </nav>

    

</body>
</html>

