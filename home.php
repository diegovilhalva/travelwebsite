<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/style.css">
    <title>Home</title>
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
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background:url(img/home-slide-1.jpg) no-repeat">
                    <div class="content">
                        <span>Explore, descubra, viaje</span>
                        <h3>Viaje pelo Mundo</h3>
                        <a href="package.php" class="btn">Descubra mais</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(img/home-slide-2.jpg) no-repeat">
                    <div class="content">
                        <span>Explore, descubra, viaje</span>
                        <h3>Descubra Novos Lugares!</h3>
                        <a href="package.php" class="btn">Descubra mais</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(img/home-slide-3.jpg) no-repeat">
                    <div class="content">
                        <span>Explore, descubra, viaje</span>
                        <h3>Crie momentos inesquecíveis</h3>
                        <a href="package.php" class="btn">Descubra mais</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <section class="services">
        <h1 class="heading-title"> Conheça nossos Serviços </h1>
        <div class="box-container">
            <div class="box">
                <img src="img/icon-1.png" alt="icon 1">
                <h3>Viagem de  Aventura</h3>
            </div>
            <div class="box">
                <img src="img/icon-2.png" alt="icon 2">
                <h3>Tour</h3>
            </div>
            <div class="box">
                <img src="img/icon-3.png" alt="icon 3">
                <h3>trekking</h3>
            </div>
            <div class="box">
                <img src="img/icon-4.png" alt="icon 4">
                <h3>Acampamentos</h3>
            </div>
            <div class="box">
                <img src="img/icon-5.png" alt="icon 5">
                <h3>Trilhas</h3>
            </div>
            <div class="box">
                <img src="img/icon-6.png" alt="icon 6">
                <h3>Acampamentos</h3>
            </div>
        </div>
    </section>
     <section class="home-about">
         <div class="image">
             <img src="img/about-img.jpg" alt="about">
         </div>
         <div class="content">
             <h3>Sobre nós</h3>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat sit excepturi dolorum explicabo facere, aspernatur blanditiis iure illum ullam temporibus repellat quia ad similique, dolores non voluptas quod animi delectus.</p>
             <a href="about.php" class="btn">Saiba Mais</a>
         </div>
     </section>
     <setion class="home-packages">
         <h1 class="heading-title">Nossos Pacotes </h1>
         <div class="box-container">
             <div class="box">
                 <div class="image">
                     <img src="img/img-1.jpg" alt="image 1">
                 </div>
                 <div class="content">
                     <h3>Aventuras e excurções</h3>
                     <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est voluptatum cupiditate praesentium unde veritatis commodi</p>
                     <a href="book.php" class="btn">Agendar Agora</a>
                 </div>
             </div>
             <div class="box">
                 <div class="image">
                     <img src="img/img-2.jpg" alt="image 2">
                 </div>
                 <div class="content">
                     <h3>Aventuras e excurções</h3>
                     <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est voluptatum cupiditate praesentium unde veritatis commodi modi</p>
                     <a href="book.php" class="btn">Agendar Agora</a>
                 </div>
             </div>
             <div class="box">
                 <div class="image">
                     <img src="img/img-3.jpg" alt="image 3">
                 </div>
                 <div class="content">
                     <h3>Aventuras e excurções</h3>
                     <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est voluptatum cupiditate praesentium unde veritatis commodi modi </p>
                     <a href="book.php" class="btn">Agendar Agora</a>
                 </div>
             </div>
             
         </div>
         <div class="load-more"><a href="package.php" class="btn">Carregar mais</a></div>
     </setion>
    <section class="home-offer">
        <div class="content">
            <h3>50% de Desconto Na primeira viagem</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde molestiae, excepturi dolores provident ab, perferendis odit at minus hic non facere eveniet delectus error? Corrupti, nulla reiciendis! Quasi, commodi nobis.</p>
            <a href="book.php" class="btn">Comprar agora</a>

        </div>
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