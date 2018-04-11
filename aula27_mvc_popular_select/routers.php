<?php
global $routes;
$routes = array();

// Colocar os mais especificos primeiro e os genericos depois

//ex: site.com/cadastro/vicente/cruz -> site.com/usuarios/cadastrar/vicente/cruz
//$routes['cadastro/{nome}/{sobrenome}'] = '/usuarios/cadastrar/:nome/:sobrenome';
$routes['/galeria/{id}/{titulo}'] = '/galeria/abrir/:id/:titulo';
$routes['/news/{id}'] = '/noticia/abrir/:id';
$routes['/n/{titulo}'] = '/noticia/abrirTitulo/:titulo';
?>