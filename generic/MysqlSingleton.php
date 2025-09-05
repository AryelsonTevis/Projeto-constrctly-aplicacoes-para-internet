<?php
class DatabaseConnection
{
    private static ?DatabaseConnection $instance = null;
    private $dsn = 'mysql:host=localhost;dbname=projeto';
    private $usuario = "root";
    private $senha = "";
    private $options=null;
    private $conn = null;

    private function __construct() {
        if ($this->conn==null) {
            $this->conn = new PDO($this->dsn, $this->usuario, $this->senha, $this->options);
        }
        
        
    }

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new DatabaseConnection();
        }

        return self::$instance;
    }

    
    public function query( $sql)
    {
        

        if ($this->conn != null) {
            $sth = $this->conn->prepare($sql);
            $sth->execute();
            return $sth->fetchAll(PDO::FETCH_ASSOC);
            
        }
        return null;
    }
}