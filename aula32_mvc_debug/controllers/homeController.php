<?php

class homeController extends Controller
{
    public function index()
    {
        $data = array();
        
        $usuarios = new Usuarios();
        $data['usuarios'] = $usuarios->getUsuarios();
        
        $this->loadTemplate('home',$data);
    }
    
    public function teste($parametro = "")
    {
        $data = array();
        
        $data['parametro'] = $parametro;
        
        $this->loadTemplate('teste',$data);
    }
}
?>