<?php

class MemberController{

    public function __construct(){
        //esta funcion se llamara por el action del query:
        $this -> getAllMembers();
        
    }
    
    public function getAllMembers(){
        require_once("models/MemberModel.php");
        $model = new MemberModel();
        $gymUser = $model -> get_users();
        
        //me traigo la view/member/membersDashboard, se lee aki
        require_once("views/member/membersDashboard.php");
    }
}