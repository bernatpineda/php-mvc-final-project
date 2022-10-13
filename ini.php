<?php
require_once "config/constants.php";
require_once "config/db.php";

//require_once("config/constants.php");
//require_once("core/router.php");
//require_once("config/database.php");


require_once "core/classes/Database.php";
require_once "core/classes/Model.php";
require_once "core/classes/View.php";
require_once "core/classes/Controller.php";

require_once "core/Router.php";
require_once("controllers/MemberController.php");
//require_once("models/TablaModel.php");

//$controller = new User_model();
$controller = new MemberController();

//$email = $_POST['email'];
//echo $email;
//$password = $_POST['password'];
// if(isset($_GET['c'])){

//     $controlador = cargarControlador($_GET['c']);

//     if(isset($_GET['a'])){
//         cargarAccion($controlador, $_GET['a']);
//     }else{
//         cargarAccion($controlador, ACCION_PRINCIPAL);
//     }

// }else{
//     $controlador = cargarControlador(CONTROLLERS);
//     $accionTmp = ACCION_PRINCIPAL;
//     $controlador -> $accionTmp();
//}