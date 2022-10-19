<?php

trait Controller {

    public $view;
    public $model;

    function __construct() {

        $this->view = new View();
        $this->model = $this->loadModel(substr(__CLASS__,0,-10));

        $action = "";

        if (isset($_REQUEST["action"])) {
            $action = $_REQUEST["action"];
        }

        if (method_exists(__CLASS__, $action)) {
            call_user_func([__CLASS__, $action], $_REQUEST);
        }
    }

    function loadModel($model) {
        $url = MODELS . $model . 'Model.php';

        if (file_exists($url)) {
            
            require_once $url;
            $modelName = $model . "Model";
            return new $modelName();
        }
    }

    function error($errorMsg) {
        require_once VIEWS . "/error/error.php";
    }

}