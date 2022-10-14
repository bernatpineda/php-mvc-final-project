<?php

class SportController{

    use Controller;

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

    function updateSport($request) { 

            echo " updateSport( ";
            echo "<pre>";
            print_r($request);
            echo "</pre>";
            echo " ) | ";

        if (count($_POST) > 0) {
            print_r($_POST);
            echo " | ";

            $member = $this->model->update($_POST); // los datos de $_POST vienen del form de member.php
            // $member recibe un true o false del return del método update de MemberModal.php

            if ($member[0]) { // si update return true
                echo $member[0];
                header("Location: index.php?controller=Member&action=getAllMembers");
            } else {
                echo "Incorrect data";
                // estas propiedades se utilizan para validar el update en membersDashboard.php
                $this->action = $request["action"];
                $this->error = "The data entered is incorrect, check that there is no other employee with that email.";
                $this->view->render("member/member");
            }

        } else {
            $this->view->render("member/member");
        }
    }

    function createMember($request)
    {
        if (sizeof($_POST) > 0) {
            $member = $this->model->create($_POST);

            if ($member[0]) {
                header("Location: index.php?controller=Member&action=getAllMembers");
            } else {
                echo $member[1];
            }
        } else {
            $this->view->action = $request["action"];
            $this->view->render("member/member");
        }
    }

}