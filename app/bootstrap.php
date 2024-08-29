<?php

session_start();
require_once 'Core'.DIRECTORY_SEPARATOR.'config.php';
require_once 'Core'.DIRECTORY_SEPARATOR.'Route.php';
require_once 'Core'.DIRECTORY_SEPARATOR.'Controller.php';
require_once 'Core'.DIRECTORY_SEPARATOR.'View.php';  

use app\route;
Route::start();



?>