<div class="cont_all">

    <div class="cont_img" >
        
    </div>

    <div class="cont_form">
    
        <h1 class="titulo">Iniciar sesión</h1>
        
        <form method="post">

            <label for="ingEmail">Correo electrónico</label>
            <input type="email" class="inputs" name="ingEmail" id="ingEmail" required>

            <label for="ingPassword">Contraseña</label>
            <input type="password" class="inputs" name="ingPassword" id="ingPassword" required>

            <a  href="forgotPassword">Olvide mi contraseña</a>

            <div class="btns">
                <input  class="btn" type="submit" value="LOGIN"> 

                <a id="link" href="register">Registrarse</a>
            </div>

            <?php
                $ingreso = new UsuariosController();
                $ingreso -> ingresoUsuarioCtr();
            ?>

        </form>


    </div> 

    </div> 
        
        
        
<div>

<?php
    // if(isset($rutas[1])){
        
    //     if($rutas[1] == "hola"){
    //         echo "Hola";
    //     }else{
    //         echo "Error 404";
    //     }


    // }else{
    //     Pegar aqui el html si es que pasara algo en la ruta 2
    // }
?>