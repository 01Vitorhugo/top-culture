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
    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- scroll -->
    <script src="https://unpkg.com/scrollreveal"></script>
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

        <!-- serviços -->
        <h1 class="services-title"> nossos serviços </h1>
    <div class="services">
        <div class="service">
            <img class="serviceImg" src="img/services/frete.png" alt="">
            <span class="serviceTitle">FRETE GRÁTIS</span>
            <span class="serviceDesc">frete grátis para compras acima de R$250,00</span>
        </div>
        <div class="service">
            <img class="serviceImg" src="img/services/return.png" alt="">
            <span class="serviceTitle">TROCAS E DEVOLUÇÕES</span>
            <span class="serviceDesc">o prazo é de até 7 dias corridos a partir da data de recebimento do produto.</span>
        </div>
        <div class="service">
            <img class="serviceImg" src="img/services/cartao.png" alt="">
            <span class="serviceTitle">PAGAMENTOS</span>
            <span class="serviceDesc">até em 12x ou à vista</span>
        </div>
        <div class="service">
            <img class="serviceImg" src="img/services/whatsapp.png" alt="">
            <span class="serviceTitle">ENTRE EM CONTATO</span>
            <span class="serviceDesc">caso precise, nos chame no whatsapp e fale com um de nossos atendentes.</span>
        </div>
    </div>

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
    <!-- conhecendo mais sobre o style -->
    <div class="convite">
        <div class="conv">
            <div class="conv-text">
                <h2>STREET<span>WEAR</span></h2>
                <br>
                <p>É aquele que mistura elementos esportivos com a moda de rua ligada ao rap, hip-hop, skate, surf e até
                    mesmo punk.
                    Ele expressa a cultura e o comportamento urbano que cada comunidade carrega, por meio de peças e
                    acessórios.</p>
                <div class="button">
                    <a href="#"><button type="button" class="btn">visitar</button></a>
                </div>
            </div>
        </div>
        <div class="logo-tc">
            <img src="img/logo/logo.png" alt="" width="300px">
        </div>
    </div>
    <!-- rodapé -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>our links</h3>
                <a href=""><i class="fas fa-angle-right"></i>Top Culture</a>
                <a href=""><i class="fas fa-angle-right"></i>Acessórios</a>
                <a href=""><i class="fas fa-angle-right"></i>Roupas</a>
            </div>
            <div class="box">
                <h3>atendimento</h3>
                <a href=""><i class="fas fa-angle-right"></i>FAQ</a>
                <a href=""><i class="fas fa-angle-right"></i>termos de serviços</a>
                <a href=""><i class="fas fa-angle-right"></i>fale conosco</a>
            </div>
            <div class="box">
                <h3>our links</h3>
                <a href=""><i class="fas fa-angle-right"></i>lançamentos</a>
                <a href=""><i class="fas fa-angle-right"></i>acessórios</a>
                <a href=""><i class="fas fa-angle-right"></i>marcas</a>
            </div>
            <div class="box">
                <h3>our links</h3>
                <a href=""><i class="fas fa-angle-right"></i>lançamentos</a>
                <a href=""><i class="fas fa-angle-right"></i>acessórios</a>
                <a href=""><i class="fas fa-angle-right"></i>marcas</a>
            </div>
        </div>
        <div class="credit">Copyright © by TopCulture | all rights reserved!</div>
    </section>

    <script src="js/scroll.js"></script>
</body>

</html>