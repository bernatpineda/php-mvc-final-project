<?php

function cargarControlador($controlador){ 
    //nomre de la clase                    
    $nombreControlador = $controlador . "3";
    //nombre del archivo
    $archivoControlador = 'controllers/' . $controlador . '.php';
                        
    if(!is_file($archivoControlador)){

        $archivoControlador = 'controllers/' . CONTROLADOR_PRINCIPAL . '.php';
        
    }
    //echo $archivoControlador;
    require_once $archivoControlador;
    $control = new $nombreControlador();
    return $control;
}
function cargarAccion($controller, $accion){

    if(isset($accion) && method_exists($controller, $accion)){
        //obketo -> funion
        $controller -> $accion();

    }else{
        $controller -> ACCION_PRINCIPAL();
    }

}


?>