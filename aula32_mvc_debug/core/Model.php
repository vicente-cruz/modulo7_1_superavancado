<?php
class Model
{
    protected $db;
    
    public function __construct()
    {
        global $config;
        try {
            $this->db = new PDO(
                    $config['dbtype'].":host=".$config['dbhost'].";dbname=".$config['dbname'],
                    $config['dbuser'],
                    $config['dbpass']
                );
        }
        catch(PDOException $e) {
            echo "ERROR: ".$e->getMessage();
            exit;
        }
    }
}
?>