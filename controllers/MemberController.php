<?php

class MemberController{

    // public function __construct(){
    //     //esta funcion se llamara por el action del query:
    //     $action = $_GET["action"];
    //     $this -> $action();        
    // }

    use Controller;
    
    public function getAllMembers(){
        require_once("models/MemberModel.php");
        $model = new MemberModel();
        $gymUser = $model -> get_users();
        
        //me traigo la view/member/membersDashboard, se lee aki
        require_once("views/member/membersDashboard.php");
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
            $this->view->render("member/memberDashboard");
        }
    }
}