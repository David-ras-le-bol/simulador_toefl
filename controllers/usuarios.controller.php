<?php

class UsuariosController {

    // ======================
    // REGISTRO DE USUARIOS
    // ======================

    public static function registroUsuarioCtr(){

        if(isset($_POST["regNombre"])){

            $tabla = "usuarios";

            $datos = array("nombre"=>$_POST["regNombre"],
                            "apellido"=>$_POST["regApellido"],
                            "email"=>$_POST["regEmail"],
                            "contraseña"=>$_POST["regPassword"]);

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

    /*======================================================
        MOSTRAR USUARIO
    ======================================================*/
    public static function ctrMostrarUsuario($item, $valor){

        $tabla = "usuarios";

        $respuesta = UsuariosModel::mdlMostrarUsuario($tabla, $item, $valor);

        return $respuesta;

    }

    /*======================================================
        INGRESO USUARIO 91
    ======================================================*/
    public static function ingresoUsuarioCtr(){

        if(isset($_POST["ingEmail"])){

            $password = $_POST["ingPassword"];

            $tabla = "usuarios";
            $item = "email";
            $valor = $_POST["ingEmail"];

            $respuesta = UsuariosModel::mdlMostrarUsuario($tabla, $item, $valor);

            if($respuesta["email"] == $_POST["ingEmail"] && $respuesta["password"] == $password){

                $_SESSION["validarSesion"] = "ok";
                $_SESSION["id"] = $respuesta["id"];
                $_SESSION["nombre"] = $respuesta["nombre"];
                $_SESSION["foto"] = $respuesta["foto"];
                $_SESSION["email"] = $respuesta["email"];
                $_SESSION["password"] = $respuesta["password"];

                echo '<script>

                    window.location = "http://localhost/simulador_toefl/";

                </script>';

            }else{

                echo '<script>
                    Swal.fire({
                        icon: "error",
                        title: "Error al Ingresar",
                        text: "El email o la contraseña son incorrectos",
                        confirmButtonText: "ok"
                    })
                </script>';

            }

        }

    }

}