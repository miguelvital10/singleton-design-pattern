<?php

use app\Connection;

require "../app/Connection.php";

function create(){
    $instance = Connection::getInstance();

    return  $instance;
}

function update(){
    $instance = Connection::getInstance();

    return  $instance;
}