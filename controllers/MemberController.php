<?php

class MemberController {

    use Controller;
    
    public function getAllMembers() {

        $members = $this->model->get();

        if (isset($members)) {
            require_once("views/member/membersDashboard.php");
        }
    }
    
    function getMember($request) {

        $member = null;
        if (isset($request["id"])) {
            $member = $this->model->getById($request["id"]);
        }

        $this->view->action = $request["action"];
        $this->view->data = $member;
        $this->view->render("member/member");
    }

    function updateMember($request) { 

        if (count($_POST) > 0) {

            $member = $this->model->update($_POST); 
            if ($member[0]) { 
                header("Location: index.php?controller=Member&action=getAllMembers");
            } else {

                $this->action = $request["action"];
                $this->error = "The data entered is incorrect, check that there is no other employee with that email.";
                $this->view->render("member/member");
            }

        } else {
            $this->view->render("member/member");
        }
    }

    function createMember($request) {
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

    public function deleteMember($request)
    {
        $action = $request["action"];
        $member = null;
        if (isset($request["id"])) {
            $member = $this->model->delete($request["id"]);
            header("Location: index.php?controller=Member&action=getAllMembers");
        }

    }
    
}
