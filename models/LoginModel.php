<?php

// ENCRYPT AND VERIFY PASSWORDS
// $pwdInput = "r123";
// $pwdHashedInDb = password_hash($pwdInput, PASSWORD_DEFAULT); //PASSWORD_BCRYPT
// echo $pwdHashedInDb. "<br>";

// $pwdVerify = password_verify($pwdInput, $pwdHashedInDb);
// echo $pwdVerify . " incorrect";

class LoginModel extends Model {

    function get($emailInput) { 
        // returns the array with the DB data
<<<<<<< HEAD
        //echo " get( $emailInput ) | ";
=======
        // echo " get( $emailInput ) | ";
>>>>>>> 2e4b98101904b6bc6549d0a545d486d4ca1a7231

        $query = $this->db->connect()->prepare(
            "SELECT name, email, password 
            FROM members
            WHERE email = '$emailInput';"
        );

        try {
            $query->execute(); // lanza la petición del prepare a la base de datos
            $loginData = $query->fetchAll(); // si tiene algun registro con ese emailInput, es que existirá en la base de datos.

            // print_r($loginData);
            return $loginData;
            
        } catch (PDOException $e) {
            return [];
        }
    }

}
