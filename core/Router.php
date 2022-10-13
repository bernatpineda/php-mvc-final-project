<?php

class Router
{
    function __construct()
    {   
        session_start();

        // session_destroy();

        if (isset($_GET['controller'])) {
            $controllerName = $_GET['controller'] . "Controller";
            $controllerPath = CONTROLLERS . $controllerName . ".php";
            $fileExists = file_exists($controllerPath);

            // si no existe la session accedes al login

            // si existe la session, accedes al main directamente

            if ($fileExists) {

                // TODO: revisar lógica de la session
                
                if ($controllerName === "LoginController" || isset($_SESSION["email"])) {
                    require_once $controllerPath;
                    $controller = new $controllerName(); // aquí es donde se instancia el controller correspondiente.

                } else if ($controllerName != "LoginController" && !isset($_SESSION["email"])) {
                    require_once VIEWS . "login/login.php";
                    echo " You are not logged in, you cannot access this page. | ";

                } else {
                    require_once VIEWS . "login/login.php";
                    echo " Please login | ";
                }
                
                // require_once CONTROLLERS . "LoginController.php";
                // $loginController = new LoginController();
                    
                
            } else {
                $errorMsg = "The page you are trying to access does not exist.";
                require_once VIEWS . "error/error.php";
            }

        } else if (isset($_SESSION["email"])) {
            require_once VIEWS . "main/main.php";

        } else {
            require_once VIEWS . "login/login.php";
        }
    }
}
