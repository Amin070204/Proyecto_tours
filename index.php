<?php 
require_once('config.php');
require_once('controlador/indexController.php');
if(isset($_GET['i'])):
    $metodo = $_GET['i'];
    if(method_exists('indexController',$metodo)):
        indexController::{$metodo}();
    endif;
else:
    indexController::index();
endif;
?>