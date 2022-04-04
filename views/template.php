<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulator TOEFL</title>

    <?php

		$url = Route::ctrRoute();

	?>

    <!-- IMPORT CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $url; ?>views/plugins/css/sweetalert2.min">
    <link rel="stylesheet" href="<?php echo $url; ?>views/css/principal.css">
    <link rel="stylesheet" href="<?php echo $url; ?>views/css/general.css">
    <link rel="stylesheet" href="<?php echo $url; ?>views/css/styleLogin.css">
    
    <!-- IMPORT JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/666ce126ea.js" crossorigin="anonymous"></script>
    <script src="<?php echo $url; ?>views/plugins/js/sweetalert2.all.min.js"></script>
    <script src="<?php echo $url; ?>views/plugins/js/sweetalert2.min.js"></script>
</head>

<body>

    <?php

        $rutas = array();

        if(isset($_GET["ruta"])){

            $rutas = explode("/", $_GET["ruta"]);
            //var_dump($rutas);     //divide las rutas en un array

            if($rutas[0] == "login" || $rutas[0] == "register" || $rutas[0] == "forgotPassword" || $rutas[0] == "inicio"){

                include 'modules/'.$rutas[0].'.php';

            }else{
                echo "error 404";
            }

        }else{
            include "modules/inicio.php";
        }

    ?>
    
</body>
</html>