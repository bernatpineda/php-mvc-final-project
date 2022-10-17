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

    // public function getAllSports(){

    //    //require_once("models/SportModel.php");

    //    // $model = new SportModel();
    //     $gymSport = $this -> model -> get();
        
    // //     require_once("views/sport/sportsDashboard.php");
    // // }

    use Controller;
    
    public function getAllSports() {

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

    function getSport($request) {

            echo " getSport( ";
            print_r($request);
            echo " ) | ";

        $sport = null;
        if (isset($request["id"])) {
            $sport = $this->model->getById($request["id"]);
        }

        $this->view->action = $request["action"];
        $this->view->data = $sport;
        $this->view->render("sport/sport");
    }

    function updateSport($request) { 

            echo " updateSport( ";
            echo "<pre>";
            print_r($request);
            echo "</pre>";
            echo " ) | ";

        if (count($_POST) > 0) {
            print_r($_POST);
            echo " | ";

            $sport = $this -> model -> update($_POST);
            
            if ($sport[0]) {
                echo $sport[0];
                header("Location: index.php?controller=Sport&action=getAllSports");
            } else {
                echo "Incorrect data";
                
                $this->action = $request["action"];
                $this->error = "The data entered is incorrect, check that there is no other employee with that email.";
                $this->view->render("sport/sport");
            }

        } else {
            $this->view->render("sport/sport");
        }
    }

    function createSport($request)
    {
        if (sizeof($_POST) > 0) {
            $sport = $this-> model -> create($_POST);

            if ($sport[0]) {
                header("Location: index.php?controller=Sport&action=getAllSports");
            } else {
                echo $sport[1];
            }
        } else {
            $this->view->action = $request["action"];
            $this->view->render("sport/sport");
        }
    }

    public function deleteSport($request)
    {
        $action = $request["action"];
        $sport = null;
        if (isset($request["id"])) {
            $sport = $this->model->delete($request["id"]);
            header("Location: index.php?controller=Sport&action=getAllSports");
        }

    }

}