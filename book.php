<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/style.css">
    <title>Sobre</title>
</head>
<body>
    <section class="header">
        <a href="home.php" class="logo">ITravel.</a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">Sobre</a>
            <a href="package.php">Pacotes</a>
            <a href="book.php">Viagens</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars">
        </div>
    </section>
     <div class="heading" style="background: url(img/header-bg-3.png) no-repeat">
         <h1>Conheça Nossas Viagens</h1>

     </div>
    <section class="booking">
        <h1 class="heading-title">Agende sua Viagem</h1>
        <form action="book_form.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>Nome:</span>
                    <input type="text" placeholder="digite seu nome" name="name">
                </div>
                <div class="inputBox">
                    <span>E-mail:</span>
                    <input type="email" placeholder="digite seu e-mail" name="email">
                </div>
                <div class="inputBox">
                    <span>Telefone:</span>
                    <input type="number" placeholder="digite seu telefone" name="phone">
                </div>
                <div class="inputBox">
                    <span>Endereço:</span>
                    <input type="text" placeholder="digite seu endereço" name="address">
                </div>
                <div class="inputBox">
                    <span>Destino:</span>
                    <input type="text" placeholder="digite o destino da viagem" name="location">
                </div>
                <div class="inputBox">
                    <span>Numero de Pessoas:</span>
                    <input type="number" placeholder="quantas pessoas irão viajar" name="guests">
                </div>
                <div class="inputBox">
                    <span>Data de Chegada:</span>
                    <input type="date" name="arrivals">
                </div>
                <div class="inputBox">
                    <span>Data de Saída:</span>
                    <input type="date" name="leaving">
                </div> 
            </div>
            <input type="submit" value="Enviar" class="btn" name="send">
        </form>
    </section>





    <section class="footer">
        <div class="box-container">
                <div class="box">
                    <h3>Links de Navegação</h3>
                    <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
                    <a href="about.php"><i class="fas fa-angle-right"></i>Sobre</a>
                    <a href="package.php"><i class="fas fa-angle-right"></i>Pacotes</a>
                    <a href="book.php"><i class="fas fa-angle-right"></i>Viagens</a>
                </div>
                <div class="box">
                    <h3>Links Extras</h3>
                    <a href="#"><i class="fas fa-angle-right"></i>Dúvidas</a>
                    <a href="#"><i class="fas fa-angle-right"></i>Sobra a empresa</a>
                    <a href="#"><i class="fas fa-angle-right"></i>Politica de privacidade</a>
                    <a href="#"><i class="fas fa-angle-right"></i>Termos de uso</a>
                </div>
                <div class="box">
                    <h3>Informações de Contato</h3>
                    <a href="#"><i class="fas fa-phone"></i>(41)93327-4127</a>
                    <a href="#"><i class="fab fa-whatsapp"></i>(41)99128-3100</a>
                    <a href="#"><i class="fas fa-envelope"></i>contato@itravel.com</a>
                    <a href="#"><i class="fas fa-map"></i>Av das Torres,224 Curitiba-Pr</a>
                </div>
                <div class="box">
                    <h3>Nossas redes Sociais</h3>
                    <a href=""><i class="fab fa-facebook"></i>Facebook</a>
                    <a href=""><i class="fab fa-instagram"></i>Instagram</a>
                    <a href=""><i class="fab fa-twitter"></i>Twitter</a>
                    <a href=""><i class="fab fa-linkedin"></i>Linkedin</a>
                </div>
            </div>
            <div class="credit">
                Criado por <span>Diego Vilhalva</span> | Todos os direitos  reservados
            </div>
    </section>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>