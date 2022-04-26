<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require 'controllers/PHPMailer /Exception.php' ;
    require 'controllers/PHPMailer /PHPMailer.php' ;
    require 'controllers/PHPMailer /SMTP.php' ;



class UsuariosController {

    // ======================
    // REGISTRO DE USUARIOS
    // ======================

    public static function registroUsuarioCtr(){

        if(isset($_POST["nombre"])){

            $tabla = "usuarios";

            $datos = array("nombre"=>$_POST["nombre"],
                            "apellido"=>$_POST["apellido"],
                            "email"=>$_POST["email"],
                            "contraseña"=>$_POST["password"]);

            $respuesta = UsuariosModel::registroUsuarioMdl($datos, $tabla);

            if($respuesta == "success"){

                echo '<script>
                    Swal.fire({
                        icon: "success",
                        title: "Registro Exitoso",
                        confirmButtonText: "Ok"
                    }).then((result) => {
                        if(result.isConfirmed){
                            window.location.href = "http://localhost/simulador_toefl/";
                        }
                    })
                </script>';

            }else{

                echo '<script>
                    Swal.fire({
                        icon: "error",
                        title: "Error al registrarte",
                        text: "Por favor intentalo de nuevo más tarde",
                        confirmButtonText: "ok"
                    }).then((result) => {
                        if(result.isConfirmed){
                            window.location.href = "http://localhost/simulador_toefl/";
                        }
                    })
                </script>';

            }

        }
        
    }
    
    
    
      // ======================
    // OLVIDE CONTRASEÑA
    // ======================

    
    public static function ctrOlvidoPassword(){
    
    
   
        
        
        
        
     if(isset($_POST["pass_email"])){
       
        //GENERAR CONTRASEÑA ALEATORIA
         
         function Crear_clave(){

            //Obtengo numeros 
             
            $num=mt_rand(100,900);

            //Obtengo letras
             
            $letra=  chr(rand(ord("A"), ord("Z")));

            $clave=$num . $letra;

            //echo "La clave es ".$clave; 
            return $clave;
        }
     
     $new_password=Crear_clave();
     $tabla="usuarios";
     $item1="email";
     $valor1=$_POST["pass_email"];
     
         
     $respuesta1=UsuariosModel::mdlMostrarUsuario($tabla,$item1,$valor1);
         
        if($respuesta1){
            $id=$respuesta1["id"];
            $item2="password";
            $valor2=$new_password;
             
            $respuesta2=UsuariosModel::mdlOlvidoPassword($tabla,$id,$item2,$valor2);
            
            if($respuesta2=="ok"){
                
                //1. Destino
                $destinatario=$valor1;


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
                $mail->Body    = 'La contraseña temporal asignada a su cuenta es  '.$valor2.'  cambiela al ingresar al sistema.';  //Mensaje 


                $mail->send();                                        //Envia mensaje

                     echo '<script>
                    Swal.fire({
                        icon: "success",
                        title: "Revise su correo, se le ha enviado su contraseña temporal",
                        confirmButtonText: "Ok"
                    }).then((result) => {
                        if(result.isConfirmed){
                            window.location.href = "http://localhost/simulador_toefl/login";
                        }
                    })
                </script>';

            } catch (Exception $e) {                                   //Si falla el envio del msj. muestra mensaje
                echo "No se envio el email : {$mail->ErrorInfo}";}

                
                  
        }else{
            
             echo '<script>
                    Swal.fire({
                        icon: "error",
                        title: "El correo no existe"
                    }) 
                </script>';

            
            
        }

     
    }
    

                        $mail->send();                                        //Envia mensaje
        
                                echo '<script>
                            Swal.fire({
                                icon: "success",
                                title: "Revise su correo, se le ha enviado su contraseña temporal",
                                confirmButtonText: "Ok"
                            }).then((result) => {
                                if(result.isConfirmed){
                                    window.location.href = "http://localhost/simulador_toefl/login";
                                }
                            })
                        </script>';
   
                    } catch (Exception $e) {//Si falla el envio del msj. muestra mensaje
                        echo "No se envio el email : {$mail->ErrorInfo}";
                    }
                     
                }else{
               
                    echo '<script>
                        Swal.fire({
                            icon: "error",
                            title: "El correo no existe"
                        }) 
                    </script>';
                }
            }
        }
    }


}
