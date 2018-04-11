<?php

class Usuarios extends model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function getUsuarios($offset, $limit)
    {
        $usuarios = array();
        
        $sql = "SELECT * FROM usuarios LIMIT ".$offset.", ".$limit;
        $query = $this->db->query($sql);
        
        if ($query->rowCount() > 0) {
            $usuarios = $query->fetchAll();
        }
        
        return $usuarios;
    }
    
    public function getTotalUsuarios()
    {
        $total = 0;
        $sql = "SELECT COUNT(*) AS total FROM usuarios";
        $query = $this->db->query($sql);
        
        if ($query->rowCount() > 0) {
            $resultado = $query->fetch();
            $total = $resultado['total'];
        }
        
        return $total;
    }
    
    public function popularTabela()
    {
        $sql = "INSERT INTO usuarios(nome,email,senha) VALUES ";
        
        for ($i = 0; $i < 60; $i++) {
            $sql .= "('usuario".$i."','u".$i."@u.com',MD5('123')),";
        }
        $sql = substr($sql, 0, -1);
        $this->db->query($sql);
        
        return $this->db->lastInsertId();
    }
}

?>