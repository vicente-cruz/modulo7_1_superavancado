<?php

require 'environment.php';

global $config;
$config = array();
if (ENVIRONMENT == "development") {
    define("BASE_URL",'http://cursophp.pc/modulo7_1_superavancado/aula32_mvc_debug/');
    $config['dbhost'] = 'localhost';
    $config['dbtype'] = 'mysql';
    $config['dbname'] = 'projeto_usuarios';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
    
}
elseif (ENVIRONMENT == "development_benin") {
    define("BASE_URL",'http://benim.daer.rs.gov.br/cursophp/cursophp_benin/modulo7_1_superavancado/aula32_mvc_debug/');
    $config['dbhost'] = '10.76.64.83';
    $config['dbtype'] = 'pgsql';
    $config['dbname'] = 'projeto_usuarios';
    $config['dbuser'] = 'postgres';
    $config['dbpass'] = '&kVyhG<({t}[';
}
else {
    define("BASE_URL",'http://cursophp.pc/modulo7_1_superavancado/aula32_mvc_debug/');
    $config['dbhost'] = '';
    $config['dbtype'] = '';
    $config['dbname'] = '';
    $config['dbuser'] = '';
    $config['dbpass'] = '';
}

?>