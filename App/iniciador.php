<?php
require_once 'config/configurar.php'; 
//require_once 'librerias/Core.php';
//require_once 'librerias/Controlador.php';
require_once 'vistas/inc/header.php';
require_once 'vistas/inc/footer.php';

spl_autoload_register(function($nombreClase){
    require_once 'librerias/'.$nombreClase.'.php';
});