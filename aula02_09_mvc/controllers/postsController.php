<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of testeController
 *
 * @author vicentesc
 */
// Aula 04
class postsController extends controller
{
    public function index()
    {
        echo "Teste index() de postsController";
    }
    
    // Aula 5 - Passando parametros na URL
    public function ver($param1, $param2)
    {
        echo "Teste ver() de postsController. Parametro1: ".$param1." - Parametro2: ".$param2;
    }
    
}
