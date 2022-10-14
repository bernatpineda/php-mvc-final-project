<?php

class SportModel {
    
    private $db;

    public function __construct(){
        $this -> db = new Database();

    }
   // select count(id), sport from sports group by sport;
    //select s.id, m.name, m.last_name, s.sport from sports s right join members m  on m.id = s.id;
    //select COUNT(id), m.id, m.name, m.last_name, s.sport from sports s right join members m  on m.id = s.id GROUP BY id;
    //SELECT id, sport FROM sports
    function get_sports(){
        $query = $this->db->connect()->prepare("select s.id, m.name, m.last_name, s.sport from sports s right join members m  on m.id = s.id;");
        try {
            $query->execute(); // lanza la petición del prepare a la base de datos
            $sports = $query->fetchAll();

            return $sports;

        } catch (PDOException $e) {
            return [];
        }
    }



    //delete
    // function delete($id)
    // {
    //     $query = $this->db->connect()->prepare("DELETE FROM sports WHERE id = ?");
    //     $query->bindParam(1, $id);

    //     try {
    //         $query->execute();
    //         return [true];
    //     } catch (PDOException $e) {
    //         return [false, $e];
    //     }
    // }
}