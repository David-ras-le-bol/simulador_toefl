<!-- =========================================
    VALIDAR SESION 
===========================================-->
<?php

$url = Route::ctrRoute();

if(!isset($_SESSION["validarSesion"])){
    echo '<script>
        window.location = "'.$url.'";
    </script>';

    exit();
}

?>

<body class="bgLight">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <nav class="navConfig txtDark">
                    <div class="logo d-flex">
                        Simulador TOEFL
                    </div>
                    <ul class="d-flex txtDark">
                        <?php
                            
                            if($_SESSION["validarSesion"] == "ok"){
                                if($_SESSION["foto"] != ""){
                                    echo '<li><a href="register">
                                        <img class="rounded-circle" src="'.$url.$_SESSION["foto"].'" width="40px">
                                    </a></li>';
                                }else{
                                    echo '<li><a href="register">
                                        <img class="rounded-circle" src="'.$url.'views/img/usuarios/default/profile.jpg" width="40px">
                                    </a></li>';
                                }
                                echo '<li>|</li>
                                    <li><a class="txtDark" href="'.$url.'perfil">Ver Perfil</a></li>
                                    <li>|</li>
                                    <li><a class="txtDark" href="'.$url.'salir">Salir</a></li>';
                            }
                            
                        ?>
                    </ul>
                </nav>
            </div>

            <div class="row">
                <div class="instrucciones">
                    <h4>Choose test</h4>
                    <div class="sep"></div>
                    <p>
                        <span>Instrucciones: </span>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit dolorem sapiente perferendis eos consequatur, explicabo culpa vitae excepturi veniam, id voluptatibus itaque suscipit nisi adipisci corrupti. Sit quaerat totam vel.
                    </p>
                </div>
            </div>

            <div class="contbtn d-flex justify-content-center">
                <div class="btnPrincipal">
                    <a href="fullTest">FullTest</a>
                </div>
            </div>

            <div class="features col-12">
                <div class="row d-flex justify-content-around">
                    <div class="target col-5 col-md-2">
                        <div class="contima">
                            <img class="bgPrimary" src="<?php echo $url;?>views/img/fullTestWriting.png" alt="">
                        </div>
                        <div class="cardCont">
                            <h5 class="text-center">Writing</h5>
                            <p><span>Questions: </span> 40</p>
                            <p><span>Time: </span> 60 min</p>
                            <div class="btnPrincipal">
                                <a href="writing">Start</a>
                            </div>
                            <br>
                        </div>
                    </div>
                    <div class="target col-5 col-md-2">
                        <div class="contima">
                            <img class="bgPrimary" src="<?php echo $url;?>views/img/fullTestSpeak.png" alt="">
                        </div>
                        <div class="cardCont">
                            <h5 class="text-center">Speaking</h5>
                            <p><span>Questions: </span> 40</p>
                            <p><span>Time: </span> 60 min</p>
                            <div class="btnPrincipal">
                                <a href="reading">Start</a>
                            </div>
                            <br>
                        </div>
                    </div>
                    <div class="target col-5 col-md-2">
                        <div class="contima">
                            <img class="bgPrimary" src="<?php echo $url;?>views/img/FullTestLis.svg" alt="">
                        </div>
                        <div class="cardCont">
                            <h5 class="text-center">Listening</h5>
                            <p><span>Questions: </span> 40</p>
                            <p><span>Time: </span> 60 min</p>
                            <div class="btnPrincipal">
                                <a href="listening">Start</a>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
                
            </div>

        </div>
    </div>

    
</body>
</html>