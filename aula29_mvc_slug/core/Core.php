<?php

class Core
{
    
    public function run()
    {
        $raw_url = "/".(isset($_GET['url']) ? $_GET['url'] : "");
        $params = array();
        
        $currentController = "homeController";
        $currentAction = "index";
        
        if ( ! empty($raw_url) && $raw_url != "/") {
            $url = explode("/",$raw_url);
            
            array_shift($url);
            $currentController = $url[0]."Controller";
            
            array_shift($url);
            if (isset($url[0]) && ( ! empty($url[0]))) {
                $currentAction = $url[0];
                
                array_shift($url);
            }
            
            if (count($url) > 0) {
                $params = $url;
            }
        }
        
        $controller = new $currentController();
        call_user_func_array(array($controller, $currentAction), $params);
    }
}
?>