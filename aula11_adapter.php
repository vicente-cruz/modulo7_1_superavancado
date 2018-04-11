<?php

/**
 * Util quando nao é possivel alterar os arquivos da classe padrao.
 * Ex: Classes de frameworks não devem ser alteradas, mas extendidas
 */
class Pessoa
{
    private $nome;
    private $idade;
    
    public function __construct($nome = "", $idade = "")
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }
    
    public function getNome() {
        return $this->nome;
    }
    
    public function setNome($nome) {
        $this->nome = $nome;
    }
    
    public function getIdade() {
        return $this->idade;
    }
    
    public function setIdade($idade) {
        $this->idade = $idade;
    }
}

class PessoaAdapter
{
    private $sexo;
    private $pessoa;
    
    public function __construct(Pessoa $pessoa)
    {
        $this->pessoa = $pessoa;
    }
    
    public function getSexo() {
        return $this->sexo;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function getNome()
    {
        return $this->pessoa->getNome();
    }

    public function getIdade()
    {
        return $this->pessoa->getIdade();
    }
}

$pessoa = new Pessoa("Vicente", 35);

$pa = new PessoaAdapter($pessoa);
$pa->setSexo("Masculino");

echo "Nome: ".$pa->getNome()."<br/>";
echo "Idade: ".$pa->getIdade()."<br/>";
echo "Sexo: ".$pa->getSexo()."<br/>";
?>