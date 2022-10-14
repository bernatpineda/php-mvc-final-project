<?php

class LoginController {

    public $view;
    public $model; // = new LoginModel; | esta propiedad instancia la clase Model correspondiente

    function __construct() {
        echo "LoginController __construct() | ";

        $this->view = new View();
        $this->model = $this->loadModel(substr(__CLASS__,0,-10));

        $action = "";

        if (isset($_REQUEST["action"])) {
            $action = $_REQUEST["action"]; // ej: = validLogin
        }

        // ejecutar el método que haya en el action
        if (method_exists(__CLASS__, $action)) {
            call_user_func([__CLASS__, $action]); //([__CLASS__, $action], $_REQUEST)
        } else {
            echo " Controller Error | "; //TODO: require_once VIEWS . "/error/error.php";
        }
    }

    function loadModel($model) {
        echo " loadModel( $model ) | ";
        $url = MODELS . $model . 'Model.php';

        if (file_exists($url)) {
            echo " ".$url." | ";
            
            require_once $url;
            $modelName = $model . "Model";
            return new $modelName(); // new LoginModel()
        }
    }

    function validLogin() {  
        echo " validLogin() | ";

        if (isset($_POST["login"])) {      
            $emailInput = $_POST["user-email"];
            $pwdInput = $_POST["user-password"];

            $loginData = $this->model->get($emailInput); // get(): returns the array with the DB data

            echo 'loginData = ';
            echo "<pre>";
            print_r($loginData);
            echo "</pre>";
        }
        
        if (count($loginData) > 0) { // (sizeof($loginData) > 0)
            echo "count: ".count($loginData). " | " ;

            $pwdHashedInDb = $loginData[0]["password"];
            $pwdVerify = password_verify($pwdInput, $pwdHashedInDb);

            echo 'password_verify( '." $pwdHashedInDb, $pwdInput ) -> $pwdVerify <- | ";

            if ($pwdVerify) {
                $_SESSION['email'] = $emailInput;
                $this->view->data = $loginData[0]["name"]; // assignamos el name de la DB data a la propiedad data de la class View
                $this->view->render("main/main");
                
                echo '$_SESSION = ';
                print_r($_SESSION);
            } else {
                $errorMsg = "Incorrect password";
                $this->view->render("login/login"); 
                // require_once VIEWS . "login/login.php?error=2";
                echo " $errorMsg | ";
            }

        } else {
            $errorMsg = "Email not registered";
            $this->view->render("login/login");
            // require_once VIEWS . "login/login.php?error=1";
            echo " $errorMsg | ";
        }
    }

    // function validSession() {
    //     if (isset($_SESSION["email"])) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }

    // function closeSession() {
            // session_destroy();
            // header(Location: index.php)
    // }
}
