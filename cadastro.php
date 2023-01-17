<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/cadastro.css">
    <title>Cadastro</title>
</head>

<body>
    <main>
        <div class="cad">
            <div class="cad-img">
                <img src="img/logo/logo.png">
            </div>
            <div class="cad-box">
                <h2 id="cad-title">registre-se</h2>

                <form action="cadastro.act.php" method="post" enctype="multipart/form-data">
                    <div class="input-group">
                        <label for="nome">nome</label>
                        <input type="text" name="nome" placeholder="Digite seu nome">
                    </div>
                    <div class="input-group">
                        <label for="nome">sobrenome</label>
                        <input type="text" name="sobrenome" placeholder="Digite seu sobrenome">
                    </div>
                    <div class="input-group">
                        <label for="nome">email</label>
                        <input type="text" name="email" placeholder="Digite seu email">
                    </div>
                    <div class="input-group">
                        <label for="nome">senha</label>
                        <input type="password" name="senha" placeholder="Digite sua senha">
                    </div>
                    <div class="input-group">
                        <p><input type="submit" value="cadastar"></p>
                    </div>
                </form>
            </div>
        </div>
    </main>


</body>

</html>