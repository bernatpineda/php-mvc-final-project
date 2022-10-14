<?php

class SportController{

    public function __construct(){
        
        $action = $_GET["action"];
        $this -> $action();        
    }
    
    public function getAllSport(){

        require_once("models/SportModel.php");

        $modelS = new SportModel();
        $gymSport = $modelS -> get_sports();
        
        require_once("views/sport/sportsDashboard.php");
    }




    //delete
    // function deleteSport($request)
    // {
    //     $action = $request["action"];
    //     $SPort = null;
    //     if (isset($request["id"])) {
    //         $SPort = $this-> SPort -> delete($request["id"]);
    //         header("Location: index.php?controller=Sport&action=getAllSport");
    //     }
    // }
}