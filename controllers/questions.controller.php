<?php

class QuestionsController{

    /*=============================================
	MOSTRAR QUESTIONS
    https://drive.google.com/drive/u/1/folders/1iLu98nan-1S5i0Vv4v4mceHqBwUYxAUv
	=============================================*/

    public static function mostrarQuestionCtr($item, $valor){

        $tabla = "writing_test";
        $valor = 1;

        $respuesta = QuestionsModel::mostrarQuestionMdl($tabla, $item, $valor);

        return $respuesta;

    }

    public static function validarQuestion(){

        if(isset($_POST["questionW"])){
            echo 'no es';
        }else {
            echo ' si es';
        }

    }

}