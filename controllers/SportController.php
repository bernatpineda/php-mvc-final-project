<?php

class SportController{

    use Controller;


    
    public function getAllSport(){

        require_once("models/SportModel.php");

        $modelS = new SportModel();
        $gymSport = $modelS -> getSport();
        
        require_once("views/sport/sportsDashboard.php");
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
                header("Location: index.php?controller=Sport&action=getAllSport");
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
                header("Location: index.php?controller=Sport&action=getAllSport");
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
            header("Location: index.php?controller=Sport&action=getAllSport");
        }

    }

}