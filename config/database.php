<?php

class Connect{

    public static function connection(){
//create database connection
        $connection = new mysqli("localhost", "root", "", "gym");
// Check connection
        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }
        return $connection;
    }
}