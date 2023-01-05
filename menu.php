
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
        <li><a href="#">Lançamentos</a></li>
        <li><a href="#">Acessórios</a></li>
        <li><a href="#">Marcas</a></li>
        <li><a href="#">Roupas</a></li>
        <?php
        @session_start();
        if(@$_SESSION['login']){
       echo "<li><a href=home.php>Sair</a></li>";
       //Criar logoff do login
    }else{
       echo "<li><a href=login.php>Entrar</a></li>";
    }
        ?>
        </ul>
    </nav>

    

</body>
</html>

