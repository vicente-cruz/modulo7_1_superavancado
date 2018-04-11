<?php

// Aula 3
class core
{   
    public function checkRoutes($url)
    {
        global $routes;
        
        foreach ($routes as $pt => $newurl) {
            // Identifica os templates/argumentos e substitui por um RegEx
            $pattern = preg_replace('(\{[a-z0-9]{1,}\})','([a-z0-9-]{1,})', $pt);
            
            // Faz o match da URL
            if (preg_match('#^('.$pattern.')*$#i', $url, $matches) === 1) {
                array_shift($matches);
                array_shift($matches);
                
                // Pega todos os argumentos para associar
                $itens = array();
                if (preg_match_all('(\{[a-z0-9]{1,}\})', $pt, $m)) {
                    $itens = preg_replace('(\{|\})', '', $m[0]);
                }
                
                // Faz a associacao
                $arg = array();
                foreach ($matches as $key => $match) {
                    $arg[$itens[$key]] = $match;
                }
                
                // Monta a nova URL
                foreach ($arg as $argkey => $argvalue) {
                    $newurl = str_replace(':'.$argkey, $argvalue, $newurl);
                }
                
                $url = $newurl;
                break;
            }
        }
        
        return $url;
    }
    
    
    public function run()
    {
        $raw_url = "/".((isset($_GET['url'])) ? $_GET['url'] : "");
        $params = array();
        
        $routed_url = $this->checkRoutes($raw_url);
        
        if ( ! empty($routed_url) && $routed_url != '/') {
            $url = explode("/",$routed_url);
            array_shift($url);
            
            $currentController = $url[0]."Controller";
            array_shift($url);
            
            if (isset($url[0]) && $url[0] != '/') {
                $currentAction = $url[0];
                array_shift($url);
            }
            else {
                $currentAction = "index";
            }
            
            if (count($url) > 0) {
                $params = $url;
            }
        }
        else {
            $currentController = "homeController";
            $currentAction = "index";
        }
        
        if (( ! file_exists('controllers/'.$currentController.'.php')) ||
            (  ! method_exists($currentController,$currentAction))) {
            $currentController = 'notfoundController';
            $currentAction = 'index';
        }
        
        $c = new $currentController();
        call_user_func_array(array($c, $currentAction), $params);
        
    }
}
