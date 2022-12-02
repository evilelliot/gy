<?php
include "./config/app.php";
include "./config/routes.php";
include "./helpers/loadController.php";
class Router{
    protected $params = array();
    
    function __construct($url){
        for($it = 1; $it <= count($url); $it++){
            $this->params[$it] = $url[$it];
        }
        if($this->doesExist()){
            $this->callController();
        }
    }
    public function _print(){
        foreach($this->params as &$data){
            echo $data . "<br>";
        }
    }
    // A partir del segundo indice, todo es un parametro.
    private function doesExist(){
        $view = $this->params[2];
        $returnable;
        if(in_array($view, routes)){
            $returnable = true;
        }else{
            $returnable = false;
        }
        return $returnable;
    }
    private function callController(){
        $controllerName = "./controllers/". $this->params[2] . "Controller.php";
        if(file_exists($controllerName)){
            $data = array("params" => $this->params, "name" => "names");
            loadController::load($controllerName, $data, true);
        }else{
            include "./controllers/404Controller.php";
        }
    }
};