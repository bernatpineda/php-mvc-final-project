<?php

class LoginController {

    use Controller;

    function validLogin() {  

        if (isset($_POST["login"])) {      
            $emailInput = $_POST["user-email"];
            $pwdInput = $_POST["user-password"];

            $loginData = $this->model->get($emailInput);
        }
        
        if (count($loginData) > 0) {
            $pwdHashedInDb = $loginData[0]["password"];
            $pwdVerify = password_verify($pwdInput, $pwdHashedInDb);

            if ($pwdVerify) {
                $_SESSION['email'] = $emailInput;
                $this->view->data = $loginData[0]["name"];
                $this->view->render("main/main");

            } else {
                $errorMsg = "Incorrect password";
                header("Location: index.php?error=2");
            }

        } else {
            $errorMsg = "Email not registered";
            header("Location: index.php?error=1");
        }
    }

    function closeSession() {
        session_destroy();
        header("Location: index.php");
    }

}
