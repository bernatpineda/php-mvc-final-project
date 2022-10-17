<?php

class SportModel {
    
    private $db;

    public function __construct(){
        $this -> db = new Database();

    }

    function getSports(){
        
        $query = $this->db->connect()->prepare("select count(members.id), sports.sport, sports.id from sports right join members on members.sport_id = sports.id group by members.sport_id;");
        try {
            $query->execute(); // lanza la petición del prepare a la base de datos
            $sports = $query->fetchAll();

            return $sports;

        } catch (PDOException $e) {
            return [];
        }
    }

    function delete($id)
    {
        $query = $this->db->connect()->prepare("DELETE FROM sports WHERE id = ?");
        $query->bindParam(1, $id);

        try {
            $query->execute();
            return [true];
        } catch (PDOException $e) {
            return [false, $e];
        }
    }
}