<?php

// $pwdInput = "r123";
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

    function get($emailInput) { // $loginInputs es un array con el email y el password que haya introducido el usuario
        // returns the array with the DB data
        echo " get( $emailInput ) | ";

        $query = $this->db->connect()->prepare(
            "SELECT email, password 
            FROM members
            WHERE email = '$emailInput';"
        );

        try {
            $query->execute(); // lanza la petición del prepare a la base de datos
            $loginData = $query->fetchAll(); // si tiene registro, es que será correcto.
            // $session email - 
            // print_r($loginData);
            return $loginData;
            
        } catch (PDOException $e) {
            return [];
        }
    }

    // function validLogin()
}

// en vez de render: header("Location: ini.php?controller=employee&action=showAll");

// $emailInputName = substr($emailInput, 0, -10);
// $emailInputExt = substr($pwdInput, -9);
// echo " ". $emailInputName . " - $emailInputExt | ";