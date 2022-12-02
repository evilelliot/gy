<?php
include "./controllers/Controller.php";
include "./helpers/renderer.php";

class helpController extends Controller{
    protected $data = array();
    protected $conn;
    function __construct($_data){
        parent::__construct($_data);
    }
    function get(){
        include "./config/db.php";        
        // echo count($this->params);

        $ob    = array("title" => "Help page", "body" => "help.php", "params" => $this->params);
        render("/partials/layout", $ob, true);
    }
}
$params = $data["params"];
$help = new helpController($params);
?>