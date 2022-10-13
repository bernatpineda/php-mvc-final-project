<?php

class VehiculosController{

    public function __construct(){
        require_once("models/5.php");
    }

    public function index(){
        $vehiculos = new Vehiculo_model();
        $data ["titulos"] = "Users";
        $data ["vehiculo"] = $vehiculos -> get_vehiculos();

        require_once("views/6/6.php");

    }
}
?>