<?php

class Usuarios extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function getUsuarios()
    {
        $usuarios = array();
        
        $query = $this->db->query("SELECT * FROM usuarios");
        
        if ($query->rowCount() > 0) {
            $usuarios = $query->fetchAll();
        }
        
        return $usuarios;
    }
}

?>