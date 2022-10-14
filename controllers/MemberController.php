<?php

class MemberController {

    public $model; // declarada como propiedad para redefinirla a acceder a ella en los métodos.
    public $view;

    public function __construct(){
        require_once("models/MemberModel.php");
        $this->model = new MemberModel();

        $this->view = new View();

        //esta funcion se llamara por el action del query:
        $action = $_GET["action"];
        $this -> $action($_REQUEST); // he añadido el parámetro $_REQUEST, que es un array de los Query Params.      
    }
    
    public function getAllMembers(){
        // require_once("models/MemberModel.php"); // AHORA EN EL CONSTRUCT
        // $model = new MemberModel(); // AHORA EN EL CONSTRUCT
        $gymUser = $this->model -> get_users();
        
        //me traigo la view/member/membersDashboard, se lee aki
        require_once("views/member/membersDashboard.php");
    }

    function getMember($request) {
        // este método se usa en update para seleccionar el Member que hemos clicado según el id (el método se ejecuta en Query Param al clicar el link edit)
        //echos
            echo " getMember( ";
            print_r($request);
            echo " ) | ";

        $member = null; // ! WHY?
        if (isset($request["id"])) {
            $member = $this->model->getById($request["id"]);
        }

        $this->view->action = $request["action"]; // = getMember
        $this->view->data = $member;
        $this->view->render("member/member");
    }

    function updateMember($request) { 
        // este método se ejecuta según el action Query Param (cuando está seteado el id al enviar el form de member.php)
        //echos
            echo " updateMember( ";
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
                // $this->action = $request["action"];
                // $this->error = "The data entered is incorrect, check that there is no other employee with that email.";
                $this->view->render("member/member");
            }

        } else {
            $this->view->render("member/member");
        }
    }
}
