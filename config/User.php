<?php

namespace Config;

use Config\Database;

class User extends Database
{
    public $data;
    public function getUser()
    {
        $query = "SELECT first_name, last_name, user_name, password, dob FROM registration";
        $data = $this->database->run($query);
        return $data;
    }
}
