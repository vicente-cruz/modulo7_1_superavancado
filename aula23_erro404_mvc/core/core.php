<?php

// Aula 3
class core
{   
    public function run()
    {
//        Busca tudo o que foi digitado apos "index.php"
//        $url = substr($_SERVER['PHP_SELF'], (strpos($_SERVER['PHP_SELF'],"index.php") + strlen("index.php")));
        
        // Aula 5 - Consertando a coleta do Controller e Action + Parametros
//        $url = end(explode("index.php",$_SERVER['PHP_SELF']));
        // AULA 9 - Nem sempre o servidor possui "$_SERVER['PHP_SELF']" habilitado...
        $raw_url = "/".((isset($_GET['url'])) ? $_GET['url'] : "");
        $params = array();
        
        if ( ! empty($raw_url) && $raw_url != '/') {
            $url = explode("/",$raw_url);
            // Exclui o primeiro registro, que eh vazio
            array_shift($url);
            
            $currentController = $url[0]."Controller";
            array_shift($url);
            
            // Evita erro quando URL finaliza com "/"
            if (isset($url[0]) && $url[0] != '/') {
                $currentAction = $url[0];
                array_shift($url);
            }
            else {
                $currentAction = "index";
            }
            
            // Aula 5 - Pegando parametros da URL
            if (count($url) > 0) {
                $params = $url;
            }
        }
        else {
            $currentController = "homeController";
            $currentAction = "index";
        }
        
        // Verifica se existe o controller
        if (( ! file_exists('controllers/'.$currentController.'.php')) ||
            (  ! method_exists($currentController,$currentAction))) {
            $currentController = 'notfoundController';
            $currentAction = 'index';
        }
        
        $c = new $currentController();
        call_user_func_array(array($c, $currentAction), $params);
        
    }
}
