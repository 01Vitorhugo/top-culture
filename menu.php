<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/menu.css">
    <title>TC MENU</title>
</head>

<body>
        <div class="container">

            <div class="logo-container">
                <img src="img/logo/tc-black.png" alt="" class="img" height="80px">
                <h3 class="logo">TOP <span>CULTURE</span></h3>
            </div>

            <div class="nav-btn">
                <div class="nav-links">

                    <ul>
                        <li class="nav-link">
                            <a href="home.php">Home</a>
                        </li>

                        <li class="nav-link" style="--i: .85s">
                            <a href="#!">Acessórios<i class="fas fa-caret-down"></i></a>

                            <div class="dropdown">
                                <ul>
                                    <li class="dropdown-link">
                                        <a href="error.php">Correntes Ice Kuban</a>
                                    </li>

                                    <li class="dropdown-link">
                                        <a href="error.php">Pulseiras Ice Kuban</a>
                                    </li>

                                    <li class="dropdown-link">
                                        <a href="#!">mais<i class="fas fa-caret-down"></i></a>

                                        <div class="dropdown second">
                                            <ul>
                                                <li class="dropdown-link">
                                                    <a href="error.php">Kits Cuban</a>
                                                </li>

                                                <li class="dropdown-link">
                                                    <a href="error.php">Brincos</a>
                                                </li>

                                                <li class="dropdown-link">
                                                    <a href="error.php">Pingentes</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </li>

                        <li class="nav-link">
                            <a href="#!">Roupas<i class="fas fa-caret-down"></i></a>

                            <div class="dropdown">
                                <ul>
                                    <li class="dropdown-link">
                                        <a href="error.php">Femininas</a>
                                    </li>

                                    <li class="dropdown-link">
                                        <a href="error.php">Masculinas</a>
                                    </li>

                                    <li class="dropdown-link">
                                        <a href="error.php">Unissex</a>
                                    </li>

                                    <li class="dropdown-link">
                                        <a href="#!">mais<i class="fas fa-caret-down"></i></a>

                                        <div class="dropdown second">
                                            <ul>
                                                <li class="dropdown-link">
                                                    <a href="error.php">Streetwear</a>
                                                </li>

                                                <li class="dropdown-link">
                                                    <a href="error.php">Peitas de time</a>
                                                </li>

                                                <li class="dropdown-link">
                                                    <a href="error.php">Sneakers</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </li>

                        <li class="nav-link">
                            <a href="about.php">About us</a>
                        </li>

                    </ul>
                </div>
                <div class="nav-action">
                    <?php
                    @session_start();
                    // var_dump($_SESSION);
                    if($_SESSION['login'] === true){
                        echo "<a href=logoff.php class=btn-log>exit</a>";
                    }else {
                        echo "<a href=login.php class=btn-log>Log in</a>";
                        echo "<a href=cadastro.php class=btn-primary>Sign up</a>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </header>
</body>

</html>