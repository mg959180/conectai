<?php

require_once APP_DIR . 'libs/Database.php';
require_once APP_DIR . 'libs/Input.php';
class AuthModel
{
    private $table  = ADMINS;
    private $column_pk = 'adm_id';
    private $_db;

    public function __construct()
    {
        $this->_db = new Database();
    }
    public function CheckUser($type = 'id', $data = '')
    {
        if ($type == 'user') {
            $this->column_pk = 'adm_user_name';
        }
        $this->_db->query("SELECT * FROM " . $this->table . " WHERE " . $this->column_pk . " = '" . $data . "'");
        $this->_db->stmt->execute();
        $res =  $this->_db->stmt->fetchAll();
        return $res;
    }
}
