<?php

require_once "vendor/autoload.php";
use App\classes\Auth;

$auth = new Auth();
$auth->login();

//use App\classes\Home;
//
//$home = new Home();
//$home->index();
