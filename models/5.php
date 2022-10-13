<?php

class Vehiculo_model{
    private $db;
    private $vehiculos;
    public function __construct(){
        $this -> db = Connect::connection();
        $this -> vehiculos = array();
    }
//load data from database
    function get_vehiculos(){
        $sql = "SELECT id, name, last_name, email FROM members";
        $result = $this -> db -> query($sql);
// output data of each row
        while ($row = $result -> fetch_assoc()){
            $this -> vehiculos [] = $row;
        }
        return $this -> vehiculos;
    }

}