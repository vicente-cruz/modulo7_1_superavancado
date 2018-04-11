<?php
class noticiasController extends controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $dados = array();
        $noticias = new Noticias();
        
        $dados['total_noticias'] = $noticias->getTotalNoticias();
        $dados['noticias'] = $noticias->getNoticias();
        
        $this->loadTemplate('noticias',$dados);
    }
    
    public function ver($slug)
    {
        $dados = array();
        $noticia = new Noticias();
        
        $dados['noticia'] = $noticia->getNoticia($slug);
        
        $this->loadTemplate('noticia_ver',$dados);
    }
    
    public function popularTabela()
    {
        $dados = array();
        
        $noticias = new Noticias();
        
        $dados['mensagem'] = "Não foi possível popular a tabela!";
        $dados['status'] = FALSE;
        $dados['total_noticias'] = 0;
        $dados['noticias'] = array();
        if ($noticias->popularTabela() > 0) {
            $dados['mensagem'] = "Tabela populada com sucesso!";
            $dados['status'] = TRUE;
            $dados['total_noticias'] = $noticias->getTotalNoticias();
            $dados['noticias'] = $noticias->getNoticias();
        }
        
        $this->loadTemplate('noticias',$dados);
    }
}
?>