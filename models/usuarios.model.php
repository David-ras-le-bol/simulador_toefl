<?php

require_once "connection.php";

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

    /*======================================================
        MOSTRAR USUARIO
    ======================================================*/
    public static function mdlMostrarUsuario($tabla, $item, $valor){

        $stmt = Connection::connect()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

        $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

        $stmt -> execute();

        return $stmt -> fetch();
        
        $stmt = null;

    }

    // ======================
    // OLVIDE CONTRASEÑA
    // ======================
    public static function  mdlOlvidoPassword($tabla,$id,$item2,$valor2){
        
        $stmt=Connection::connect()->prepare("UPDATE $tabla set $item2=:$item2 where id=:id");
        $stmt -> bindParam(":".$item2,$valor2, PDO::PARAM_STR);
        $stmt -> bindParam(":id",$id, PDO::PARAM_INT);
        
        if($stmt -> execute()){

            return "ok";

        }else{

            return "error";

        }
        
    }

}