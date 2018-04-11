<?php
/**
 * Aula 02 (MVC 01) - Cria pastas MVC - "models", "views", "controllers" e "core", e arquivo "index.php"
 *  cria controlers/homeController
 *  index.php: carrega classes via "spl_autoload_register"
 * Aula 03 (MVC 02) - Cria arquivo e classe "core/core.php"
 *  cria ação run() e busca o Controller e Action inserida na URL ($_SERVER['PHP_SELF']
 *  define Controller e Action padrao
 * Aula 04 (MVC 03) - Cria arquivo e classe "core/controller.php"
 *  cria ação core::loadView() em core/core.php
 *  modifica acao run():
 *      insere require "core/controller.php"
 *      coloca para executar o "controller" e o "action"
 *  cria "models/usuario.php"
 *  cria "views/home.php" e chama-o em homeController/index()
 *  cria "controller/testeController.php" e as acoes index() e foi()
 * Aula 05 (MVC 04) - Correção na coleta da URL em core/core::run();
 *  Passagem de PARÂMETROS para um action VIA URL
 *      cria controller/postsControllers.php e acoes index() e ver($p1, $p2)
 *      modifica a execução do Controller e action em core/core::run(): call_user_func_array
 * Aula 06 (MVC 05) - Usando Templates e o mod_rewrite para excluir o index.php da URL
 *  cria metodo "loadTemplate" em core/controller
 *  cria arquivo e classe views/template.php
 *  cria mecanismo para carregar a View dentro do Template:
 *      cria metodo "loadViewInTemplate" em core/controller
 *      modifica views/template.php executando o método loadViewInTemplate
 *  criar .htaccess na raiz do site
 * Aula 07 (MVC 06) - Criando o DB e conexoes com PDO
 *  cria arquivo "environment.php" para diferenciar ambientes "desenv" e "prod"
 *  cria arquivo "config.php" para acessar DB dependendo do ambiente
 *  cria arquivo e classe "core/model.php" -> construtor p/conectar ao DB
 *  cria arquivo e classe "models/usuarios.php" -> buscar dados do DB
 * Aula 08 (MVC 07) - Acabamentos: parent_construct, BASE_URL, include .js e .css
 *  altera models/usuarios.php -> define construtor c/parent::__construct()
 *  altera index.php -> define BASE_URL
 *  altera template.php -> include dos .js .css... | incluie BASE_URL
 * Aula 09 (MVC 08) - Finalizações: enviando p/producao. Erros.
 *  alteracao arquivo (home e controller) e nome classes - todos minusculos
 *  alteracao .htaccess - pega index via GET
 *  modifica core::run(); - troca o $_HTTP por $_GET para pegar URL
 *  modifica core::run(); corrige quando URL acaba em "/"
 */


// Aula 8 - Conexao com DB e configuracoes globais
require "config.php";

define("BASE_URL", "http://curso_php.pc/modulo7_1_superavancado/aula02_09_mvc/");  

// Aula 2 - Carregando as classes das respectivas pastas
spl_autoload_register(function ($class) {
    // Verifica se as classes sao Controller e se os arquivos existem de fato
    // OBS: Só classes controller possuem o padrao de nomeacao <nome>Controller
    if (strpos($class,"Controller") > -1) {
        if (file_exists("controllers/".$class.".php")) {
            require_once "controllers/".$class.".php";
        }
    } else if (file_exists("models/".$class.".php")) {
        require_once "models/".$class.".php";
    } else {
        require_once "core/".$class.".php";
    }
});

// Aula 3
$core = new core();
$core->run();
?>