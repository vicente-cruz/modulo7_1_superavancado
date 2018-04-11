<?php
class Carro
{
    private $cor;
    private $corTipo;
    
    public function __construct()
    {
        $this->cor = 'preto';
        $this->corTipo = 'fosco';
    }
    
    public function setCor($cor)
    {
        $this->cor = $cor;
    }
    
    public function setCorTipo($tipo)
    {
        $this->corTipo = $tipo;
    }
    
    public function getCorCompleta()
    {
        return $this->cor.' '.$this->corTipo;
    }
}
?>