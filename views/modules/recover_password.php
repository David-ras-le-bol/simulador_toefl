<?php
include('conexion.php');

use  PHPMailer \ PHPMailer \ PHPMailer ;
use  PHPMailer \ PHPMailer \ Exception ;

require  'PHPMailer /Exception.php' ;
require  'PHPMailer /PHPMailer.php' ;
require  'PHPMailer /SMTP.php' ;
    
//Paso 0: Recuperar email

    $email = $_POST['email'];
    


//Paso 1: Validar que el correo exista

    $consulta= " SELECT * FROM usuario where email ='$email'";
    
    $verificar_correo = mysqli_query($conexion,$consulta);
    
    if(mysqli_num_rows($verificar_correo) > 0){
           
            $clave=Crear_clave();
            Cambiar_contraseña($conexion,$clave,$email);
            Enviar_email($clave,$email);
            
    }
    else{
        
         echo '<script> alert("El correo ingresado no existe")
        window.location.assign("login.html") </script>';
        
    }
          
          



//********************FUNCIONES*********************************


function Crear_clave(){

//Obtengo numeros    
$num=mt_rand(100,900);
    
//Obtengo letras
$letra=  chr(rand(ord("A"), ord("Z")));
    
$clave=$num . $letra;

//echo "La clave es ".$clave; 
return $clave;
}


function Cambiar_contraseña($conexion,$clave,$email){
    
    $consulta=" UPDATE usuario set contraseña='$clave' where email='$email'";
    $modificar=mysqli_query($conexion,$consulta);
      
    //Ejecutar consulta
 
    if(!$modificar){
        echo 'Error al modificar los datos';
    }else{
        echo 'Datos modificados correctamente';
    }
    
    //Cierra conexion
    mysqli_close($conexion);
}


function Enviar_email($clave,$correo){
    
    //1. Destino
    $destinatario=$correo;
    
   
    //3.Enviar mensaje
    
    $mail = new PHPMailer(true);
    
    try {
    //Server settings
    $mail->SMTPDebug = 2;                                     //Muestra errores
    $mail->isSMTP();                                          //SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Servidor de correo utilizado
    $mail->SMTPAuth   = true;                                  //SMTP
    $mail->Username   = 'simToefl@gmail.com';                  //correo origen
    $mail->Password   = 'p123toefl';                          //contraseña del correo origen
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;        //Seguridad 
    $mail->Port       = 587;                                   //Puerto TCP

    //Correos electronicos a utilizar
    $mail->setFrom('simToefl@gmail.com', 'SIMULADOR TOEFL:RECUPERACION DE PASSWORD'); //Correo origen
    $mail->addAddress($destinatario);     //Correo destino
  

    //Datos del archivo
    $mail->isHTML(true);                                  //Acepta archivos con formato HTML
    $mail->Subject = 'Recuperacion de password';           //Asunto
    $mail->Body    = 'La contraseña temporal asignada a su cuenta es  '.$clave.'  cambiela al ingresar al sistema.';  //Mensaje 
   

    $mail->send();                                        //Envia mensaje
 
        echo '<script> alert("Revise su correo, se le ha enviado su contraseña temporal")
        window.location.assign("login.html") </script>';
        
} catch (Exception $e) {                                   //Si falla el envio del msj. muestra mensaje
    echo "No se envio el email : {$mail->ErrorInfo}";}

    
       
}//Fin de funcion 


    


?>