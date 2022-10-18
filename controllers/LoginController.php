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
>>>>>>> elinuevo

            $pwdHashedInDb = $loginData[0]["password"];
            $pwdVerify = password_verify($pwdInput, $pwdHashedInDb);

<<<<<<< HEAD
            //echo 'password_verify( '." $pwdHashedInDb, $pwdInput ) -> $pwdVerify <- | ";
=======
            // echo 'password_verify( '." $pwdHashedInDb, $pwdInput ) -> $pwdVerify <- | ";
>>>>>>> elinuevo

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
>>>>>>> elinuevo
            } else {
                $errorMsg = "Incorrect password";
                header("Location: index.php?error=2");
                // $this->view->render("login/login"); 
                // require_once VIEWS . "login/login.php?error=2";
<<<<<<< HEAD
                //echo " $errorMsg | ";
=======
                // echo " $errorMsg | ";
>>>>>>> elinuevo
            }

        } else {
            $errorMsg = "Email not registered";
            header("Location: index.php?error=1");
            // $this->view->render("login/login");
            // require_once VIEWS . "login/login.php?error=1";
<<<<<<< HEAD
            //echo " $errorMsg | ";
=======
            // echo " $errorMsg | ";
>>>>>>> elinuevo
        }
    }

    function closeSession() {
        session_destroy();
        header("Location: index.php");
    }

}
