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
    //use Controller;


    
   // public function getAllSports(){

       //require_once("models/SportModel.php");

        $modelS = new SportModel();
        $gymSport = $modelS -> getSports();
       // $model = new SportModel();
        $gymSport = $this -> model -> get();
        
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

   // public function deleteSport($request)
    //{
      //  $action = $request["action"];
      //  $sport = null;
      //  if (isset($request["id"])) {
       //     $sport = $this->model->delete($request["id"]);
     //       header("Location: index.php?controller=Sport&action=getAllSports");
     //   }

    //}

}