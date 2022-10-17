<?php

class SportController{

    public $model; // declarada como propiedad para redefinirla a acceder a ella en los métodos.
    public $view;


    use Controller;
    public function getAllSports(){
        $gymSport = $this->model-> getSports();

        require_once("views/sport/sportsDashboard.php");
    }

    function createSport($request)
    {
        if (sizeof($_POST) > 0) {
            $sport = $this->model->create($_POST);
            
            if ($sport[0]) {
                header("Location: index.php?controller=Sport&action=getAllSports");
            } else {
                echo $member[1];
            }
        } else {
            $this->view->action = $request["action"];
            $this->view->render("sport/sport");
        }

     

    }

}