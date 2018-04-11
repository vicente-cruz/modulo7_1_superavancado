<?php
// Aula 8 - Conexao com DB e configuracoes globais
class usuarios extends model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function getUsuarios()
    {
        $lista_usuarios = array();
        
        $sql = "SELECT * FROM usuarios LIMIT 10";
        $query = $this->db->query($sql);
        
        if ($query->rowCount() > 0) {
            $lista_usuarios = $query->fetchAll();
        }
        
        return $lista_usuarios;
    }
}
?>