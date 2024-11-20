<?php
require_once("config.php");
require("controlador/indexController.php");
require("controlador/paquetesController.php");
require("controlador/registrosController.php");
require("controlador/reservasController.php");
require("controlador/empleadosController.php");
require("controlador/loginController.php");
require("controlador/sesionController.php");
if(isset($_GET['p'])):
    $metodo =  $_GET['p'];
    if(method_exists('paquetesController', $metodo)):
        paquetesController::{$metodo}();
    endif;
elseif(isset($_GET['c'])):
    $metodo =  $_GET['c'];
    if(method_exists('registrosController', $metodo)):
        registrosController::{$metodo}();
    endif;
elseif(isset($_GET['r'])):
    $metodo =  $_GET['r'];
    if(method_exists('reservasController', $metodo)):
        reservasController::{$metodo}();
    endif;
elseif(isset($_GET['e'])):
    $metodo =  $_GET['e'];
    if(method_exists('empleadosController', $metodo)):
        empleadosController::{$metodo}();
    endif;
elseif(isset($_GET['u'])):
    $metodo = $_GET['u'];
    if (method_exists('LoginController', $metodo)):
        loginController::{$metodo}();
    endif;
elseif(isset($_GET['s'])):
    $metodo = $_GET['s'];
    if (method_exists('sesionController', $metodo)):
        sesionController::{$metodo}();
    endif;
elseif(isset($_GET['i'])):
    $metodo =  $_GET['i'];
    if(method_exists('indexController', $metodo)):
        indexController::{$metodo}();
    endif;
else:
    indexController::index();
endif;
?>