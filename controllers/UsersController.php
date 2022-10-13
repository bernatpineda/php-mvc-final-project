<?php

class UsersController{

    public function __construct(){
        require_once("models/TablaModels.php");
    }

    public function index(){
        $gymUser = new User_model();
        $data ["titulos"] = "Users";
        $data ["Users"] = $gymUser -> get_users();

        require_once("views/userstable/usertable.php");

    }



}
