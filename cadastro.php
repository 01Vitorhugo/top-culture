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
    <div class="cad">
        <h1>Cadastro de Cliente</h1>
        <form action="cadastro.act.php" method="post" enctype="multipart/form-data">
        <div class="content">
            <p>Nome</p>
            <input type="text" name="nome" id="">

            <p>Sobrenome</p>
            <input type="text" name="sobrenome" id="">

            <p>E-mail</p>
            <input type="text" name="email" id="">

            <p>Senha</p>
            <input type="password" name="senha" id="">

            <p><input type="submit" value="Criar-Conta"></p>

            </form>

            
        </div>

    </div>
    
</body>
</html>