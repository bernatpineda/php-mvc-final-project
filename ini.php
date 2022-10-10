<?php

echo "<h4>index.php</h4>";

require_once "config/constants.php";
require_once "config/db.php";
require_once "./core/classes/Database.php";
require_once "./core/classes/View.php";

// esto es lo que obtendría de la class Router tras hacer la lógica del Query Param
require_once "./controllers/LoginController.php";
$controller = new LoginController();
