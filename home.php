<?php
include('menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Culture</title>
    <link rel="stylesheet" href="CSS/home.css">
</head>
<body>
        <!-- slides iniciais -->
        <section class="news">ao navegar nesse site você aceita o risco de viciar nos nossos produtos?</section>
    <!-- botões -->
    <div class="slider">
        <div class="slides">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">

            <!-- imagens -->
            <div class="slide first">
                <img src="img/banner/teste1.jpg" alt="imagem1">
            </div>
            <div class="slide">
                <img src="img/banner/teste2.jpg" alt="imagem2">
            </div>
            <div class="slide">
                 <img src="img/banner/teste3.jpg" alt="imagem3">
            </div>

            <!-- troca automatica -->
            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
            </div>
        </div>
            <!-- navegação manual -->
            <div class="manual-navigation">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
            </div>
    </div>
    <script src="js/home.js"></script>

    <!-- anunciando alguns produtos -->
    <section class="txt" id="txt">
        <div class="content">
            <h3>TOP <span>CULTURE</span></h3>
            <br>
            <p>Estilo é uma forma de dizer quem você é sem precisar falar.</p>
        </div>

    </section>
    <div class="producer">
        <div class="proItem">
            <h1 class="proTitle">o seu estilo</h1>
            <img src="img/producer/drip1.jpg" alt="" class="proImg">
        </div>
        <div class="proItem">
            <img src="img/producer/drip2.jpg" alt="" class="proImg">
            <h1 class="galleryTitle">começa aqui</h1>
        </div>
        <div class="proItem">
            <h1 class="proTitle">com a top culture</h1>
            <img src="img/producer/drip3.jpg" alt="" class="proImg">
        </div>
    </div>
</body>
</html>