<?php

require "config.php";

define("BASE_URL", "http://cursophp.pc/modulo7_1_superavancado/aula28_mvc_paginacao/");  

spl_autoload_register(function ($class) {
    if (file_exists('controllers/'.$class.'.php')) {
        require 'controllers/'.$class.'.php';
    }
    elseif (file_exists('models/'.$class.'.php')) {
        require 'models/'.$class.'.php';
    }
    elseif (file_exists('core/'.$class.'.php')) {
        require 'core/'.$class.'.php';
    }
});

$core = new core();
$core->run();
?>