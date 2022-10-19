<?php

class LoginModel extends Model {

    function get($emailInput) { 

        $query = $this->db->connect()->prepare(
            "SELECT name, email, password 
            FROM members
            WHERE email = '$emailInput';"
        );

        try {
            $query->execute();
            $loginData = $query->fetchAll();

            return $loginData;
            
        } catch (PDOException $e) {
            return [];
        }
    }
}
