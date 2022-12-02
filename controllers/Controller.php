<?php
class Controller{
    protected $type;
    public $params = array();
    function __construct($data){
        $this->params = $data;
        $this->type = $_SERVER['REQUEST_METHOD']; 
        $this->commuter();   
    }
    protected function get(){}
    protected function post(){}
    protected function commuter(){
        switch($this->type){
            case "GET":
                // echo "From commuter: " .  count($this->params);
                $this->get();
                break;
            case "POST":
                $this->post();    
                break;
            default:
                echo "Non supported request type: " . $this->type;
                break;
        }
    }
};

?>