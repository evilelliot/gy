<?php
function render($filePath, $data = array(), $print = true){
    $output = NULL;
    $filePath = "./views/" .  $filePath . ".php";
    
    if(file_exists($filePath)){
        extract($data);
        ob_start();
        include $filePath;
        
        $output = ob_get_clean();
    }else{
        echo "file doesnt exist";
    }
    if ($print) {
        print $output;
    }
    return $output;

}