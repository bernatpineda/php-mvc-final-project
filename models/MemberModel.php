<?php

class MemberModel{
    
    private $db;

    public function __construct(){
        $this -> db = new Database();

        //esta variable la hace el usercontroller(prueba):
        //$gymUser = $this -> get_users();
    }

    function get_users(){
        $query = $this->db->connect()->prepare("SELECT id, name, last_name, email FROM members");
        try {
            $query->execute(); // lanza la petición del prepare a la base de datos
            $members = $query->fetchAll();
            //print_r($members);
            return $members;

        } catch (PDOException $e) {
            return [];
        }
    }
    function create($member)
    {
        $query = $this->db->connect()->prepare("INSERT INTO members (`name`, last_name, email, sport_id)
        VALUES
        (?, ?, ?, ?);");

        $query->bindParam(1, $member["name"]);
        $query->bindParam(2, $member["last_name"]);
        $query->bindParam(3, $member["email"]);
        $query->bindParam(4, $member["sport_id"]);
        
   

        try {
            $query->execute();
            return [true];
        } catch (PDOException $e) {
            return [false, $e];
        }
    }

    // function edit_user(){
        
    // }
    //function delete
    //function update

}

    