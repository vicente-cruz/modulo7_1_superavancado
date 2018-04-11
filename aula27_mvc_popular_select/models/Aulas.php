<?php

class Aulas extends model
{
    public function getAulas($id_modulo)
    {
        $aulas = array();
        
        $sql = "SELECT * FROM aulas WHERE id_modulo = :id_modulo";
        $query = $this->db->prepare($sql);
        $query->bindValue(":id_modulo",$id_modulo);
        $query->execute();
        
        if ($query->rowCount() > 0) {
            $aulas = $query->fetchAll();
        }
        
        return $aulas;
    }
}

?>