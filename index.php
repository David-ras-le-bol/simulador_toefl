<?php

require_once "controllers/template.controller.php";
require_once "controllers/usuarios.controller.php";
require_once "controllers/questions.controller.php";

require_once "models/template.model.php";
require_once "models/usuarios.model.php";
require_once "models/questions.model.php";

require_once "models/routes.php";

$template = new ControllerTemplate();
$template -> template();