<?php
// Aula 07
require "environment.php";

global $config;
$config = array();
if (ENVIRONMENT == "development") {
    $config['dbname'] = "curso_php";
    $config['host'] = "localhost";
    $config['dbuser'] = "root";
    $config['dbpass'] = "";
}
?>