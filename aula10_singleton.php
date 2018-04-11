<?php

// Quando apenas 1 objeto deve ser criado

class pessoa
{
    private $nome;
    private $idade;

    private function __construct()
    {
        
    }
    
    public static function getInstance()
    {
        static $instance = NULL;
        
        if ($instance === NULL) {
            $instance = new pessoa();
        }
        
        return $instance;
    }
    
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    
    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }


}

$cara = pessoa::getInstance();
$cara->setNome("Vicente");
echo "NOME: ".$cara->getNome()."<br/>";

$cara2 = pessoa::getInstance();
echo "Meu nome (cara2): ".$cara2->getNome()."<br/>";

$cara2->setIdade(35);
echo "Idade (cara1): ".$cara->getIdade()."<br/>";


?>