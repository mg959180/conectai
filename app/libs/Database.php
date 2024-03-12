<?php
class Database
{
    private $host = HOST_NAME;
    private $user = USER_NAME;
    private $pw = PASSWORD;
    private $dbname = DATABASE;

    private $db;
    private $stmt;
    private $error;

    public function __construct()
    {
        $dsn = "mysql:host=$this->host; dbname=$this->dbname";
        $options = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
            $this->db = new PDO($dsn, $this->user, $this->pw, $options);
            #echo 'Successfully connected to the database using PDO!';
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
            die;
        }
    }

    public function beginTransaction()
    {
        $this->db->beginTransaction();
    }

    public function inTransaction()
    {
        $this->db->inTransaction();
    }

    public function commit()
    {
        $this->db->commit();
    }

    public function query($sql)
    {
        $this->stmt = $this->db->prepare($sql);
    }

    public function rollBack()
    {
        $this->db->rollBack();
    }

    public function lastInsertId()
    {
        $this->db->lastInsertId();
    }
    #Bind the values: *NOTE: Bind only when selecting by passing a property argument through a param.
    public function bind($param, $value, $type = null)
    {
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


    public function execute()
    {
        return $this->stmt->execute();
    }

    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }
}
