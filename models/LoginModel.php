<?php

// $pwdInput = "c123";
// $pwdHashedInDb = password_hash($pwdInput, PASSWORD_DEFAULT);
// echo $pwdHashedInDb. "<br>";

// $pwdVerify = password_verify($pwdInput, $pwdHashedInDb);
// echo $pwdVerify . " incorrect";

class LoginModel {
    // meterlo en una super class Model que sea heredada por todos los Models
    // class Model {
        protected $db;
        function __construct() {
            echo "LoginModel __construct() | ";

            $this->db = new Database();
        }
    // }

    function get() {
        // returns the array with the DB data
        echo " get() | ";

        $query = $this->db->connect()->prepare("SELECT id, email, password FROM members;");

        try {
            $query->execute(); // lanza la petición del prepare a la base de datos
            $loginData = $query->fetchAll();
            // print_r($loginData);
            return $loginData;
            
        } catch (PDOException $e) {
            return [];
        }
    }
}
