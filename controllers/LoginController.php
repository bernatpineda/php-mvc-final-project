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
            echo " LoginController Error | "; //TODO: require_once VIEWS . "/error/error.php";
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
        
        if (count($loginData) > 0) { // (sizeof($_POST) > 0)
            echo "count: ".count($loginData). " | " ;

            $pwdHashedInDb = $loginData[0]["password"];
            $pwdVerify = password_verify($pwdInput, $pwdHashedInDb);

            echo " $pwdHashedInDb | $pwdInput | -> $pwdVerify <- | ";

            if ($pwdVerify) {
                $this->view->render("main/main");
                session_start();
            } else {
                $this->view->render("error/error");
            }

            // assignamos el array de la DB data a la propiedad data de la class View
            #$this->view->data = $loginData; 
        }
    }

    // function validSession() {
    //     // return true or false;
    // }
}




