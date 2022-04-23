<?php

require_once "../controllers/usuarios.controller.php";
require_once "../models/usuarios.model.php";

class AjaxUsuarios{

    // ==========================
    // VALIDAR EMAIL EXISTENTE
    // ==========================

    public $validarEmail;

    public function ajaxValidarEmail(){

        $datos = $this->validarEmail;

        $respuesta = UsuariosController::ctrMostrarUsuario("email", $datos);

        echo json_encode($respuesta);

    }

    // ==========================
    // VALIDAR PASSWORD EXISTENTE
    // ==========================

    public $validarPassword;

    public function ajaxValidarPassword(){

        $datos = $this->validarPassword;

        $respuesta = UsuariosController::ctrMostrarUsuario("password", $datos);

        echo json_encode($respuesta);

    }

}

//Validar Email Existente

if(isset($_POST["validarEmail"])){

    $valEmail = new AjaxUsuarios();
    $valEmail -> validarEmail = $_POST["validarEmail"];
    $valEmail -> ajaxValidarEmail();

}

//Validar Password Existente

if(isset($_POST["validarPassword"])){

    $valPass = new AjaxUsuarios();
    $valPass -> validarPassword = $_POST["validarPassword"];
    $valPass -> ajaxValidarPassword();

}