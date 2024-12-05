<?php 


class Database {
    private $servername = DB_SERVER;
    private $database= DB_NAME;

    private $db;
    private $stmt;

    public function __construct() {
        try {
            $this->db = new PDO("sqlsrv:server=$this->servername;Database= $this->database");
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            var_dump("connect");
        } catch (PDOException $e) {
            var_dump($e->getMessage());
            die('Connection failed');
        }
        
    }

    public function query($query) {
        $this->stmt = $this->db->prepare($query);
    }

    public function bind($param, $value, $type = null) {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    public function execute() {
        return $this->stmt->execute();
    }

    public function resultSet() {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function single() {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }
}