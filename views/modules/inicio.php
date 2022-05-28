<div class="container-fluid introsection">
    <div class="container">
        <div class="row">
            <nav class="navConfig">
                <div class="logo d-flex">
                    <a href="index.html"><img src="<?php echo $url;?>views/img/logo.png" alt="#" /></a>
                </div>
                <ul class="d-flex">

                    <?php

                        if(isset($_SESSION["validarSesion"])){

                            if($_SESSION["validarSesion"] == "ok"){

                                if($_SESSION["foto"] != ""){

                                    echo '<li><a href="register">
                                        <img class="rounded-circle" src="'.$url.$_SESSION["foto"].'" width="40px">
                                    </a></li>';

                                }else{

                                    echo '<li><a class="txtLight" href="register">
                                        <img class="rounded-circle" src="'.$url.'views/img/usuarios/default/profile.jpg" width="40px">
                                    </a></li>';

                                }

                                echo '<li>|</li>
                                    <li><a class="txtLight" href="'.$url.'perfil">Ver Perfil</a></li>
                                    <li>|</li>
                                    <li><a class="txtLight" href="'.$url.'salir">Salir</a></li>';

                            }

                        }else{

                            echo '<li><a class="txtLight" href="register">sing up</a></li>
                            <li> | </li>
                            <li><a class="txtLight" href="login">log in</a></li>';

                        }

                    ?>
                    
                </ul>
            </nav>
        </div>
    </div>
    
    <div class="container txtLight">
        <div class="row">
            
            <div class="introImg col-12 col-lg-5">
                <div class="circleSlide">
                    <div class="circleBackground"></div>
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="<?php echo $url;?>views/img/listening.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="<?php echo $url;?>views/img/writting.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="<?php echo $url;?>views/img/speaking.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="introText col-12 col-lg-6">
                <div class="title d-flex col-12">
                    <h1>Practice your </h1>
                    <div class="dinamicText col-12">
                        <h1> Listening</h1>
                        <h1> Writing</h1>
                        <h1> Reading</h1>
                        <img src="<?php echo $url;?>views/img/btnBackground.png" alt="">
                    </div>
                </div>
                <div class="textIntro">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus commodi minus in aut quas provident, sint ipsam quo dignissimos, placeat asperiores officiis blanditiis, nesciunt perspiciatis obcaecati eveniet officia labore accusantium.
                    </p>
                    <div class="btnPrincipal">

                        <?php

                            if(isset($_SESSION["validarSesion"])){

                                if($_SESSION["validarSesion"] == "ok"){

                                    echo '<a href="tests">Start</a>';

                                }

                            }else{

                                echo '<button onclick="noPaso()" href="">Start</button>';

                            }

                        ?>
                        
                    </div>
                </div>
                
            </div>

        </div>

    </div>
</div>
<!-- we_do -->
<div id="we_do"  class="we_do">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="titlepage">
                <h2>What we do?</h2><br>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="we_do_box">
                <i><img src="<?php echo $url;?>views/img/plan1.png" alt="#"/></i>
                <h4>Prepare You</h4>
                <p>Our TOEFL simulator is intented to be used by people who want to prepare themselves for an upcoming TOEFL ITP exam they might take, while also improving their English Skills along the way.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="we_do_box">
                <i><img src="<?php echo $url;?>views/img/plan4.png" alt="#"/></i>
                <h4>Grade You</h4>
                <p>We follow the same structrure and grading systems you will find in a real TOEFL exam so you get an accurate idea of your strengths and weaknesses </p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="we_do_box">
                <i><img src="<?php echo $url;?>views/img/plan2.png" alt="#"/></i>
                <h4>Give you the Tools</h4>
                <p>Nowadays the ability to speak English fluently has become a must in most jobs across the globe. Our goal is to help you sharpen your skills in hopes that you might find better oportunities for yourself in the future. </p>
            </div>
        </div>
    </div>
    </div>
</div>
<!-- end we_do -->
<!--  footer -->
<footer>
    <div class="footer">
    <div class="cont">
        <div class="row">
        <div class = "footer-col">
            <h4>About TOEFL</h4>
            <ul>
                <li><a href="#">What is the TOEFL Test ?</a></li>
                <li><a href="#">How the TOEFL is divided</a></li>
                <li><a href="#">Advantages</a></li>
            </ul>
        </div>
        <div class = "footer-col">
            <h4>About us</h4>
            <ul>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Blog</a></li>
            </ul>
        </div>
        <div class="footer-col">
                <h4>Follow Us</h4>
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                </ul>
            </div>
            <div class="col-md-10 offset-md-1">
            <p>Copyright 2022 All Right Reserved</p>
        </div>
    </div>
</footer>
<!-- end footer -->