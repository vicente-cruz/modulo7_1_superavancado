<?php

class homeController extends controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $dados = array();
        $usuarios = new Usuarios();
        
        $offset = 0;
        $limit = 10;
        $total = $usuarios->getTotalUsuarios();
        
        $dados['p'] = (isset($_GET['p']) ? intval($_GET['p']) : 1);
        $offset = ($dados['p'] * $limit) - $limit;
        $dados['paginas'] = ceil($total/$limit);
        
        $dados['usuarios'] = $usuarios->getUsuarios($offset, $limit);
        
        $this->loadTemplate("home", $dados);
    }
    
    public function popularTabela()
    {
        $dados = array();
        
        $usuarios = new Usuarios();
        if ($usuarios->popularTabela() > 0) {
            $dados['mensagem'] = "Tabela populada com sucesso!<br/>";
            $dados['estilo'] = "alert-success";
        }
        else {
            $dados['mensagem'] = "Falha ao popular a tabela!<br/>";
            $dados['estilo'] = "alert-danger";
        }
        
        $this->loadTemplate('home',$dados);
    }
}
