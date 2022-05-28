<?php

require_once "connection.php";

class QuestionsModel{

    /*=============================================
    MOSTRAR QUESTION
    =============================================*/

    public static function mostrarQuestionMdl($tabla, $item, $valor){

        $stmt = Connection::connect()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

        $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

        $stmt -> execute();

        return $stmt -> fetch();

        $stmt = null;

    }

}