<?php

class User_model{
    private $db;
    private $gymUser;
    public function __construct(){
        $this -> db = Connect::connection();
        $this -> gymUser = array();
    }

    function get_users(){
        $sql = "SELECT id, name, last_name, email FROM members";
        $result = $this -> db -> query($sql);

        while ($row = $result -> fetch_assoc()){
            $this -> gymUser [] = $row;
        }
        return $this -> gymUser;
    }

    //function edit
    //function delete
    //function update
}