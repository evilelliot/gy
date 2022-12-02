<?php
include './config/app.php';
include './config/config.php';
include './routes/Router.php';
($config["env"] == "dev" ? error_reporting(E_ALL ^ E_WARNING) : error_reporting(0));

$url  = $_SERVER['REQUEST_URI'];
$path = explode('/', $url);


$router = new Router($path);
?>