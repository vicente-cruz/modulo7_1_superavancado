<?php

class noticiaController extends controller
{
    public function index()
    {
        
    }
    
    public function abrir($id)
    {
        echo "ID da noticia:".$id;
    }
    
    public function abrirTitulo($titulo)
    {
        echo "TITULO:".$titulo;
    }
}

?>