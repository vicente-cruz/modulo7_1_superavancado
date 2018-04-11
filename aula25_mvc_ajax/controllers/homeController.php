<?php

// Aula 2
class homeController extends controller
{
    public function index()
    {
        /**
         *  Aula 04 - testa o model.
         *  $usuario = new usuario();
         *  $usuario->setName("Vicente");
         * 
         *  echo "Nome: ".$usuario->getName();
         * 
         *  $dados = array('name' => $usuario->getName());
         *  $this->loadView('home', $dados);
         */
        
        
        // Aula 07
        // Cria Model: "usuarios" para puxar dados do DB
        $usuarios = new usuarios();
        $dados['usuarios'] = $usuarios->getUsuarios();
        
        // Aula 06
        $this->loadTemplate("home", $dados);
    }
    
    // Aula 06
    public function sobre()
    {
        $dados = array();
        $this->loadTemplate("sobre",$dados);
//        $this->loadView("sobre",$dados);
    }
    
    public function testar()
    {
        echo "Testando 1, 2, 3...";
    }
}
