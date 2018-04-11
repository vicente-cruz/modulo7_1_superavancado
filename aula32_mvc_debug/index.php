<?php
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 'On');

require 'config.php';

spl_autoload_register(function($class){
    
//    echo "CLASS: ".$class."<br/>";
    
    if (file_exists('controllers/'.$class.'.php')) {
//        echo "ENTROU NO IF do 'controllers/'!";
//        exit;
        require 'controllers/'.$class.'.php';
    }
    elseif (file_exists('models/'.$class.'.php')) {
//        echo "ENTROU NO IF do 'models/'!";
//        exit;
        require 'models/'.$class.'.php';
    }
    elseif (file_exists('core/'.$class.'.php')) {
//        echo "ENTROU NO IF do 'core/'!";
//        exit;
        require 'core/'.$class.'.php';
    }
});

$core = new Core();
$core->run();

?>