<?php
class loadController{
    public static function load($filePath, $data = array(), $print = true){
        $output = NULL;
        $filePath = $filePath;
        
        if(file_exists($filePath)){
            extract($data);
            ob_start();
            // echo "Data size: ";
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
};
