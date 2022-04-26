<?php

require_once "controllers/template.controller.php";
require_once "controllers/usuarios.controller.php";

require_once "models/template.model.php";
require_once "models/usuarios.model.php";

require_once "models/routes.php";


use  PHPMailer \ PHPMailer \ PHPMailer ;
use  PHPMailer \ PHPMailer \ Exception ;

require_once 'controllers/PHPMailer /Exception.php' ;
require_once 'controllers/PHPMailer /PHPMailer.php' ;
require_once 'controllers/PHPMailer /SMTP.php' ;
    

$template = new ControllerTemplate();
$template -> template();