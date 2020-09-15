<?php

namespace config;

include 'Config/Database.php';

use Config\Database;

class User extends Database
{
    public $data;
    public $dataBase;
    public function __construct($dataBase = null)
    {
        if (is_null($dataBase)) {
            $dataBase = new Database;
        }

        $this->database = $dataBase;
    }

    public function getUser()
    {
        $query = "SELECT first_name, last_name, user_name, password, dob FROM registration";
        $data = $this->database->run($query);
        return $data;
    }
}
?>
