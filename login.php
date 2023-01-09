<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/login.css">
    <title>Login</title>
</head>
<body>

<form action="login.act.php" method="post">

<div class="msg-php">
<?php
@session_start();
if(isset($_SESSION['msg'])){
    echo "<p class=alert-php>$_SESSION[msg]</p>";
    unset($_SESSION['msg']);
}
?>
</div>

<input type="text" name="email" placeholder="E-mail">
            <input type="password"  name="senha" placeholder="Senha:">
            <input id="dif" type="submit" value="CONTINUAR">

            <p>Fazer <a href="cadastro.php">Cadastro</a></p>


    
</form>
    
</body>
</html>