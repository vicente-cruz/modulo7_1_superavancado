<?php
// Ao invés de acessar: http://www.site.com.br/noticia/mostrar/morreu-lula
// Acessar: http://www.site.com.br/lula-morreu
// Obs: http://www.site.com.br/<nome-da-noticia> = SLUG

// Cria arquivo routers.php

require "config.php";
require "routers.php";

define("BASE_URL", "http://curso_php.pc/modulo7_1_superavancado/aula24_mvc_routers/");  

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