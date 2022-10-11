<?php

class Router
{
    function __construct()
    {
        if (isset($_GET['controller'])) {
            session_start();
            $controllerName = $_GET['controller'] . "Controller";
            $controllerPath = CONTROLLERS . $controllerName . ".php";
            $fileExists = file_exists($controllerPath);

            // si no existe la session accedes al login

            // si existe la session, accedes al main directamente

            if ($fileExists) {
                require_once $controllerPath;
                $controller = new $controllerName;
            } else {
                $errorMsg = "The page you are trying to access does not exist.";
                require_once VIEWS . "error/error.php";
            }
        } else {
           //ESTO ES LO QUE HE CAMBIADO
            require_once VIEWS . "login/login.php";

        }
    }
}
