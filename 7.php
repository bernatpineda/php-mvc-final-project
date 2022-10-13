<?php

require_once("config/1.php");
require_once("core/4.php");
require_once("config/2.php");
require_once("controllers/3.php");

if(isset($_GET['c'])){

    $controlador = cargarControlador($_GET['c']);

    if(isset($_GET['a'])){
        cargarAccion($controlador, $_GET['a']);
    }else{
        cargarAccion($controlador, ACCION_PRINCIPAL);
    }

}else{
    $controlador = cargarControlador(CONTROLADOR_PRINCIPAL);
    $accionTmp = ACCION_PRINCIPAL;
    $controlador -> $accionTmp();
}

?>