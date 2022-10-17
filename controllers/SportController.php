<?php

class SportController{

    public $model; // declarada como propiedad para redefinirla a acceder a ella en los métodos.
    public $view;
   // public function __construct(){
        
       // $action = $_GET["action"];
       // $this -> $action();        
    //}
    use Controller;

    public function getAllSport(){

        require_once("models/SportModel.php");

        $modelS = new SportModel();
        $gymSport = $modelS -> getSports();
        
        require_once("views/sport/sportsDashboard.php");
    }
    public function deleteSports($request)
    {
        print_r($request);
        require_once("models/SportModel.php");

        $modelS = new SportModel();
        $action = $request["action"];
        $sports = null;
        if (isset($request["id"])) {
            $sports = $this->model->delete($request["id"]);
            header("Location: index.php?controller=Sport&action=getAllSport");
        }

    }

}