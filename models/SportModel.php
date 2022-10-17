<?php

class SportModel {
    
    private $db;

    public function __construct(){
        $this -> db = new Database();
    }

    // function get_sports(){
        
    //     $query = $this->db->connect()->prepare("SELECT id, sport FROM sports;
    //     ");//falta
    //     try {
    //         $query->execute(); // lanza la petición del prepare a la base de datos
    //         $sports = $query->fetchAll();

    //         return $sports;

    //     } catch (PDOException $e) {
    //         return [];
    //     }
    // }

    
    function get() {
        $query = $this->db->connect()->prepare(
            "SELECT id, sport FROM sports;"
        );
        
        try {
            $query->execute(); // lanza la petición del prepare a la base de datos
            $sports = $query->fetchAll();

            return $sports;

        } catch (PDOException $e) {
            return [];
        }
    }

}