<?php

class LoginController {

    public $view;
    public $model; // = new LoginModel; | esta propiedad instancia la clase Model correspondiente

    function __construct() {
        echo "LoginController __construct() | ";

        $this->view = new View();
        $this->model = $this->loadModel(substr(__CLASS__,0,-10));

        $action = "getLoginData"; // cuando capturemos este valor por Query Param, declararemos esta propiedad vacía y la setearemos en el siguiente condicional
            // // if (isset($_REQUEST["action"])) {
            // //     $action = $_REQUEST["action"]; // ej: = getAllPlayers
            // // }
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

    function getLoginData() {
        echo " getLoginData() | ";
    
        $loginData = $this->model->get(); // get(): returns the array with the DB data
        echo 'loginData = ';
        echo "<pre>";
        print_r($loginData);
        echo "</pre>";
    
        if (isset($loginData)) {
            // assignamos el array de la DB data a la propiedad data de la class View
            $this->view->data = $loginData; 
            $this->view->render("login/login");
        }
    }


    // function validSession() {
    //     // return true or false;
    // }
}




