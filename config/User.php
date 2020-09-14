<?php
require_once("Database.php");
class USER extends Database
{
    public $data;
    public $dataBase;
    public function __construct($dataBase)
    {
        parent::__construct();
        $this->database = $dataBase;
    }

    public function getUser()
    {
        $query = "SELECT first_name, last_name, user_name, password, dob FROM registration";
        $data = $this->database->run($query);
        return $data;
    }
}

