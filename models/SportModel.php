<?php

class SportModel {
    
    private $db;

    public function __construct(){
        $this -> db = new Database();
    }

    function get_sports(){
        
        $query = $this->db->connect()->prepare("select count(members.id), sports.sport, sports.id from sports right join members on members.sport_id = sports.id group by members.sport_id;");
        try {
            $query->execute(); // lanza la petición del prepare a la base de datos
            $sports = $query->fetchAll();

            return $sports;

        } catch (PDOException $e) {
            return [];
        }
    }

    function update($sport){
        //echos
            echo " update( ";
            print_r($sport);
            echo " ) | ";

        $query = $this->db->connect()->prepare(
            "UPDATE sports
            SET sport = ?
            WHERE id = ?;"
        );

        $query->bindParam(1, $sport["sport"]);

        try {
            $query->execute();
            return [true];
        } catch (PDOException $e) {
            return [false, $e];
        }
    }

}