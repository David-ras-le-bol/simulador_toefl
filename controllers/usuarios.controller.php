<?php

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

}