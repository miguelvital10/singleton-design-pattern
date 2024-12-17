<?php

require 'app/Log.php'; 
require 'app/Counter.php';
require 'app/Connection.php';

use app\Connection;
use app\Log;

$log = new Log();

$instance1 = Connection::getInstance();
$instance2 = clone $instance1;

var_dump($instance1 == $instance2);
