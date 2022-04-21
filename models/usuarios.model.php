<?php

class UsuariosModel{

     // ======================
    // REGISTRO DE USUARIOS
    // ======================

    public static function registroUsuarioMdl($datos, $tabla){

        $stmt = Connection::connect()->prepare("INSERT INTO $tabla(nombre, apellido, email, password) VALUES (:nombre, :apellido, :email, :password)");

        $stmt -> bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt -> bindParam(":apellido", $datos["apellido"], PDO::PARAM_STR);
        $stmt -> bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt -> bindParam(":password", $datos["contraseña"], PDO::PARAM_STR);

        if($stmt -> execute()){

            return "success";

        }else{

            return "error";

        }

    }

}