<?php

class SportModel {
    
    private $db;

    public function __construct(){
        $this -> db = new Database();

    }

    function get_sports(){
        
        $query = $this->db->connect()->prepare("select count(members.id), sports.sport from sports right join members on members.sport_id = sports.id group by members.sport_id;");
        try {
            $query->execute(); // lanza la petición del prepare a la base de datos
            $sports = $query->fetchAll();

            return $sports;

        } catch (PDOException $e) {
            return [];
        }
    }

}