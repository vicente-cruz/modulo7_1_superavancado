<?php
class Modulos extends model {
    
    public function getModulos()
    {
        $modulos = array();
        
        $sql = "SELECT * FROM modulos ";
        $query = $this->db->query($sql);
        
        if ($query->rowCount() > 0) {
            $modulos = $query->fetchAll();
        }
        
        return $modulos;
    }
}
?>