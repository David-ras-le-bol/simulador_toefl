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

    <?php
    
    echo '<div class="container-fluid bgPrimary txtLight">
        <div class="container profile text-center">
            <div class="d-flex justify-content-center">';
                
                if($_SESSION["validarSesion"] == "ok"){
                    if($_SESSION["foto"] != ""){
                        echo '<img class="rounded-circle" src="'.$url.$_SESSION["foto"].'" width="40px">';
                    }else{
                        echo '<img class="rounded-circle" src="'.$url.'views/img/usuarios/default/profile.jpg" width="40px">';
                    }
                }
                echo '<p>'.$_SESSION["nombre"].'</p>
                
            </div>
            <div class="col-12 d-flex justify-content-center">';

                $item = "numeroPregunta";
                $valor = $rutas[0];

                $question = QuestionsController::mostrarQuestionCtr($item, $valor);

                echo '<h6>Writting</h6>
                <h6>'.$question["numeroPregunta"].'/30</h6>

            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container">
            
            <div class="titleQuestion col-12">';

                //var_dump($question["pregunta"]);

                $Pregunta = json_decode($question["pregunta"], true);

                echo '<h2>'.$question["numeroPregunta"].'. '.$Pregunta["Pregunta"].'</h2>
                <hr>
            </div>

            

            <div class="options col-12 txtDark">
                <form action="">';

                    for($i=0; $i < count($Pregunta["Respuestas"]); $i++){
                    for($i=0; $i < count($Pregunta["Incisos"]); $i++){
                    echo'<div class="contOption"> 
                        <input type="radio" id="preg'.$Pregunta["Incisos"][$i].'" value="'.$Pregunta["Incisos"][$i].'" name="questionW">
                        <label for="'.$Pregunta["Incisos"][$i].'"><span>'.$Pregunta["Incisos"][$i].'. </span>'.$Pregunta["Respuestas"][$i].'</label>
                    </div>';
                    }
                    }
                    

                    echo '
                    <div class="col-12 d-flex justify-content-center">
                        <input class="btnSiguiente" type="button" id="Enviar" value="Siguiente">
                    </div>';

                    $validarQuestion = new QuestionsController();
                    $validarQuestion -> validarQuestion();
                    
                echo '</form>
            </div>
            
        </div>

    </div>';

    ?>

    <div class="container-fluid fTest">
        <div class="col-12 d-flex justify-content-between">
            <div class="temporizador d-flex">
                <h5 class="minutos" id="minutos">30</h5>
                <h5>:</h5>
                <h5 class="minutos" id="segundos">00</h5>
            </div>
            <div class="cancelTest">
                <div class="btnCancelText" onclick="canceltest()">
                    <p>Cancel Test</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>