<?php
class Controller
{
    public function loadView($viewName, $viewData)
    {
        extract($viewData);
        include "views/".$viewName.".php";
    }
    
    public function loadTemplate($viewName, $viewData)
    {
        include "views/template.php";
    }
    
    public function loadViewInTemplate($viewName, $viewData)
    {
        extract($viewData);
        include "views/".$viewName.".php";
    }
}
?>