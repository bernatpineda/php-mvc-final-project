<?php

class SportController {

    // public function __construct(){
        
    //     $action = $_GET["action"];
    //     $this -> $action();        
    // }
    
    // public function getAllSport(){

    //     require_once("models/SportModel.php");

    //     $modelS = new SportModel();
    //     $gymSport = $modelS -> get_sports();
        
    //     require_once("views/sport/sportsDashboard.php");
    // }

    use Controller;
    
    public function getAllSport() {

        $sports = $this->model->get();
        
        if (isset($sports)) {
            if ($_GET["controller"] === "Sport") {
                require_once("views/sport/sportsDashboard.php");
            } else if ($_GET["controller"] === "Member") {
                // echo "sports = ";
                // print_r($sports);
                return $sports;
            }
        }
    }

}