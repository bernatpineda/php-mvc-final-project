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

    // function edit_user(){
        
    // }
    //function delete
    //function update

}

    