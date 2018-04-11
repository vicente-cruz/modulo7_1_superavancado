<?php
require "environment.php";

global $config;
$config = array();
if (ENVIRONMENT == "development") {
    define("BASE_URL","http://cursophp.pc/modulo7_1_superavancado/aula29_mvc_slug/");
    
    $config['dbtype'] = "mysql";
    $config['dbhost'] = "localhost";
    $config['dbname'] = "projeto_mvcslug";
    $config['dbuser'] = "root";
    $config['dbpass'] = "";
    
    $config['popularTabela'] = FALSE;
}
elseif (ENVIRONMENT == "development_benin") {
    define("BASE_URL","http://benim.daer.rs.gov.br/cursophp_benin/modulo7_1_superavancado/aula29_mvc_slug/");
    
    $config['dbtype'] = "postgres";
    $config['dbhost'] = "10.76.64.83";
    $config['dbname'] = "projeto_mvcslug";
    $config['dbuser'] = "postgres";
    $config['dbpass'] = "&kVyhG<({t}[";
    
    $config['popularTabela'] = FALSE;
}
else {
    define("BASE_URL","");
    
    $config['dbtype'] = "";
    $config['dbhost'] = "";
    $config['dbname'] = "";
    $config['dbuser'] = "";
    $config['dbpass'] = "";    
}
?>