<?php

class LoginController {

    use Controller;

    function validLogin() {  
        //echo " validLogin() | ";

        if (isset($_POST["login"])) {      
            $emailInput = $_POST["user-email"];
            $pwdInput = $_POST["user-password"];

            $loginData = $this->model->get($emailInput); // get(): returns the array with the DB data

<<<<<<< HEAD
            //echo 'loginData = ';
            //echo "<pre>";
            //print_r($loginData);
            //echo "</pre>";
        }
        
        if (count($loginData) > 0) { // (sizeof($loginData) > 0)
            //echo "count: ".count($loginData). " | " ;
=======
            // echo 'loginData = ';
            // echo "<pre>";
            // print_r($loginData);
            // echo "</pre>";
        }
        
        if (count($loginData) > 0) { // (sizeof($loginData) > 0)
            // echo "count: ".count($loginData). " | " ;
>>>>>>> 2e4b98101904b6bc6549d0a545d486d4ca1a7231

            $pwdHashedInDb = $loginData[0]["password"];
            $pwdVerify = password_verify($pwdInput, $pwdHashedInDb);

<<<<<<< HEAD
            //echo 'password_verify( '." $pwdHashedInDb, $pwdInput ) -> $pwdVerify <- | ";
=======
            // echo 'password_verify( '." $pwdHashedInDb, $pwdInput ) -> $pwdVerify <- | ";
>>>>>>> 2e4b98101904b6bc6549d0a545d486d4ca1a7231

            if ($pwdVerify) {
                $_SESSION['email'] = $emailInput;
                $this->view->data = $loginData[0]["name"]; // assignamos el name de la DB data a la propiedad data de la class View
                $this->view->render("main/main");
                
<<<<<<< HEAD
                //echo '$_SESSION = ';
                //print_r($_SESSION);
=======
                // echo '$_SESSION = ';
                // print_r($_SESSION);
>>>>>>> 2e4b98101904b6bc6549d0a545d486d4ca1a7231
            } else {
                $errorMsg = "Incorrect password";
                $this->view->render("login/login"); 
                // require_once VIEWS . "login/login.php?error=2";
<<<<<<< HEAD
                //echo " $errorMsg | ";
=======
                // echo " $errorMsg | ";
>>>>>>> 2e4b98101904b6bc6549d0a545d486d4ca1a7231
            }

        } else {
            $errorMsg = "Email not registered";
            $this->view->render("login/login");
            // require_once VIEWS . "login/login.php?error=1";
<<<<<<< HEAD
            //echo " $errorMsg | ";
=======
            // echo " $errorMsg | ";
>>>>>>> 2e4b98101904b6bc6549d0a545d486d4ca1a7231
        }
    }

    function closeSession() {
        session_destroy();
        header("Location: index.php");
    }

}
