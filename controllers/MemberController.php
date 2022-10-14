<?php

class MemberController{

    public function __construct(){
        //esta funcion se llamara por el action del query:
        $action = $_REQUEST["action"];
        $this -> $action($_REQUEST);        
    }
    
    public function getAllMembers(){
        require_once("models/MemberModel.php");
        $model = new MemberModel();
        $gymUser = $model -> get_users();
        
        //me traigo la view/member/membersDashboard, se lee aki
        require_once("views/member/membersDashboard.php");
    }
    public function deleteMembers($request)
    {
        require_once("models/MemberModel.php");
        $model = new MemberModel();
        $action = $request["action"];
        $members = null;
        if (isset($request["id"])) {
            $members = $this->model->delete($request["id"]);
            header("Location: index.php?controller=Member&action=getAllMembers");
        }

    }
}