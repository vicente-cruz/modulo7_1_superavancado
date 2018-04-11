<?php
class Noticias extends model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function getNoticias()
    {
        $noticias = array();
        
        $sql = "SELECT * FROM noticias";
        $query = $this->db->query($sql);
        
        if ($query->rowCount() > 0) {
            $noticias = $query->fetchAll();
        }
        
        return $noticias;
    }
    
    public function getTotalNoticias()
    {
        $total = 0;
        
        $sql = "SELECT COUNT(*) AS total_noticias FROM noticias";
        $query = $this->db->query($sql);
        
        if ($query->rowCount() > 0) {
            $resp = $query->fetch();
            $total = $resp['total_noticias'];
        }
        
        return $total;
    }
    
    public function getNoticia($slug)
    {
        $noticia = array();
        
        $sql = "SELECT titulo, texto FROM noticias WHERE slug = :slug";
        $query = $this->db->prepare($sql);
        $query->bindValue(":slug",$slug);
        $query->execute();
        
        if ($query->rowCount() > 0) {
            $noticia = $query->fetch();
        }
        
        return $noticia;
    }
    
    public function popularTabela()
    {
        global $config;
        
        $totalPopulado = 0;
        
        if ($config['popularTabela']) {
            $sql =  "INSERT INTO noticias(titulo,slug,texto) VALUES ";
            for ($i = 0; $i < 68; $i++) {
                $sql .= "('Notícia ".$i."','slug-mostrar-noticia-".$i."','Texto preenchando a notícia ".$i."'),";
            }
            $sql = substr($sql, 0, -1);
            
            $this->db->query($sql);
            $totalPopulado = $this->db->lastInsertId();
        }
        
        return $totalPopulado;
    }
}
?>