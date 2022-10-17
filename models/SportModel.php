<?php

class SportModel {
    
    private $db;

    public function __construct(){
        $this -> db = new Database();
    }

    function getSports(){
        
        //$query = $this->db->connect()->prepare("SELECT count(members.id), sports.sport, sports.id FROM sports right join members on members.sport_id = sports.id group by members.sport_id;");
        $query = $this->db->connect()->prepare("SELECT id, sport FROM sports");
        try {
            $query->execute();
            $sports = $query->fetchAll();  

            return $sports;

        } catch (PDOException $e) {
            return [];
        }
    }

    function create($sport)
    {
        $query = $this->db->connect()->prepare("INSERT INTO sports (sport)
        VALUES
        (?);");

        $query->bindParam(1, $sport["sport"]);
        

        try {
            $query->execute();
            return [true];
        } catch (PDOException $e) {
            return [false, $e];
        }
    }

    function getById($id) {
    
        echo " getById( $id ) | ";

        $query = $this->db->connect()->prepare(
            "SELECT id, sport 
            FROM sports
            WHERE id = $id;"
        );

        try {
            $query->execute();
            $sport = $query->fetchAll(); 
            // print_r($sport);
            return $sport;
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

    function delete($id) {
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