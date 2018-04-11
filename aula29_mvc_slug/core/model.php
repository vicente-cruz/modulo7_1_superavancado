<?php
class model
{
    protected $db;
    
    public function __construct()
    {
        global $config;
        try {
            $this->db = new PDO($config['dbtype'].":host=".$config['dbhost'].";dbname=".$config['dbname'].";charset=utf8",
                $config['dbuser'],
                $config['dbpass']
            );
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e) {
            echo "[ERROR]: ".$e->getMessage();
            exit;
        }
    }
}
?>