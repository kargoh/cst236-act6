<?php

spl_autoload_register(function($class){
    
    // get the difference in foldres beteween the location of autoloader and the file that called autoloader
    $lastdirectories = substr(getcwd(), strlen(__DIR__));
    
    $numberoflastdirectories = substr_count($lastdirectories, '\\');
    
    // this is the liste of possible locations that classes are found in this app
    $directories = ['businessService', 'businessService/model', 'database', 'presentation', 'presentation/handlers', 'presentation/views', 'utility'];
    
    // look inside each directory for the desired class
    foreach ($directories as $d) {
        $currentdirectory = $d;
        for ($x=0; $x < $numberoflastdirectories; $x++){
            $currentdirectory = "../" . $currentdirectory;
        }
        
        $classfile = $currentdirectory . '/' . $class . '.php';
        
        if (is_readable($classfile)) {
            $require_file = require $d . '/' . $class . '.php';
            if ($require_file) {
                break;
            }
        }
    }
});


?>