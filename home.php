<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <!--Swiper é o controle deslizante de toque móvel gratuito mais moderno com transições aceleradas por hardware
    e comportamento nativo incrível. Destina-se a ser usado em sites para dispositivos móveis,
    aplicativos da Web para dispositivos móveis e aplicativos nativos/híbridos para dispositivos móveis.-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <!--swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <section class="header">
        <a href= "home.php" class="logo">travel.</a>
        <nav class="navbar">
            <a href="home.php"> home</a>
            <a href="about.php"> about</a>
            <a href="package.php"> package</a>
            <a href="book.php">book </a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>

    </section>   

<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"> <i class="fas fa-angle-right"></i>about</a>
            <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
            <a href="book.php"> <i class="fas fa-angle-right"></i>book </a>
        </div>
        <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
            <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
            <a href="#"> <i class="fas fa-angle-right"></i> privacy politic</a>
            <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
        </div>
        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +55 998411041</a>
            <a href="#"> <i class="fas fa-envelope"></i> wanessamarcos14@gmail.com</a>
            <a href="#"> <i class="fas fa-map"></i> Belo Horizonte, Brazil - 31515232 </a>
        </div>
       

    </div>
</section>




</head>
<body>    
<script>
    let menu = document.querySelector('#menu-btn');
    let navbar = document.querySelector('.header .navbar');

    menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
    }
    </script>
</body>

</html>