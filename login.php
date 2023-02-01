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

    <div class="msg-php">
        <?php
        @session_start();
        // var_dump($_SESSION);
        if (isset($_SESSION['msg'])) {
            echo "<p class=alert-php>$_SESSION[msg]</p>";
            unset($_SESSION['msg']);
        }
        ?>
    </div>
    <main>
        <div class="log">
            <div class="log-img">
                <img src="img/logo/logo.png">
            </div>
            <div class="log-box">
                <h2>acesse sua conta</h2>
                <form action="login.act.php" method="post">
                    <div class="entry">
                        <input type="text" name="email" placeholder="email">
                    </div>
                    <div class="entry">
                        <input type="password" name="senha" placeholder="senha">
                    </div>
                    <div class="center">
                    <p><input type="submit" value="cadastar"></p>
                    </div>
                </form>
                <div class="links">
                    <a href="#">
                        <p>esqueceu a senha? kkkkkk</p>
                    </a>
                    <a href="cadastro.php">
                        <p>criar uma conta.</p>
                    </a>
                </div>
            </div>
        </div>
    </main>
    <script src="js/login.js"></script>
</body>

</html>
<input id="dif" type="submit" value="CONTINUAR">