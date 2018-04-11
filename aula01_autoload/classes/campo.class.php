<?php

class Campo {
    private $largura;
    private $altura;
    private $comprimento;
    
    function getLargura() {
        return $this->largura;
    }

    function getAltura() {
        return $this->altura;
    }

    function getComprimento() {
        return $this->comprimento;
    }

    function setLargura($largura) {
        $this->largura = $largura;
    }

    function setAltura($altura) {
        $this->altura = $altura;
    }

    function setComprimento($comprimento) {
        $this->comprimento = $comprimento;
    }
}
