<?php
require "template.php";

$tpl_tags = array(
    "titulo" => "Titulo da pagina",
    "nome" => "Vicente",
    "idade" => "35"
);

$tpl = new Template("template.phtml");
$tpl->render($tpl_tags);
?>