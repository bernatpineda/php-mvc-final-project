<?php

class SportController {

    use Controller;
    
    public function getAllSports() {

        $sports = $this->model->get();
        
        if (isset($sports)) {
            if ($_GET["controller"] === "Sport") {
                require_once("views/sport/sportsDashboard.php");
            } else if ($_GET["controller"] === "Member") {

                return $sports;
            }
        }
    }

    function getSport($request) {

        $sport = null;
        if (isset($request["id"])) {
            $sport = $this->model->getById($request["id"]);
        }

        $this->view->action = $request["action"];
        $this->view->data = $sport;
        $this->view->render("sport/sport");
    }

    function updateSport($request) { 


        if (count($_POST) > 0) {

            $sport = $this -> model -> update($_POST);
            
            if ($sport[0]) {
                echo $sport[0];
                header("Location: index.php?controller=Sport&action=getAllSports");
            } else {
                // echo "Incorrect data";
                
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