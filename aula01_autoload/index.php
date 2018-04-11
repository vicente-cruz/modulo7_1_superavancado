<?php

/**
 * Aultoload - Carrega VÁRIAS CLASSES SEM o 'require', 'include'
 * require 'classe1.php';
 * require 'classe2.php';
 * ...
 * XXX require 'classeN.php';
 * XXX require 'bola.php';
   XXX function __autoload($class) {
      include_once($class.".class.php");
   }
 */
spl_autoload_register(function ($class) {
    if (file_exists("classes/".$class.".class.php")) {
        require_once("classes/".$class.".class.php");
    }
});
 

$bola = new Bola();
$bola->setCor('azul');

echo "Cor da bola: ".$bola->getCor()."<br/><br/>";

$campo = new Campo();
$campo->setAltura(20);
$campo->setLargura(30);
$campo->setComprimento(40);

echo "Dados do campo: largura - ".$campo->getAltura().", altura - ".$campo->getLargura().", comprimento - ".$campo->getComprimento();
        