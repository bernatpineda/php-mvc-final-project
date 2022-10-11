<?php
require_once "config/constants.php";
require_once "config/db.php";
require_once "core/classes/Database.php";
require_once "core/classes/Model.php";
require_once "core/classes/View.php";
require_once "core/classes/Controller.php";

require_once "core/Router.php";
//require_once "core/login/login.php";
$email = $_POST['email'];
echo $email;
$password = $_POST['password'];