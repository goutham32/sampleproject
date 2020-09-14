<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function test_getUser()
    {
        require 'config/User.php';
        $value = ['first_name' => "Thrikkalangode", 'last_name' => "32", 'user_name' => "goutham", 'password' => "123456", 'dob' => "2018-03-12"];
        $dataBase = $this->getMockBuilder('Database')->getMock();
        $dataBase->method('run')->willReturn($value);
        $expectedResult = [
            'first_name' => 'Thrikkalangode',
            'last_name'  => '32',
            'user_name'  => 'goutham',
            'password'   => '123456',
            'dob'        => '2018-03-12'
        ];
        $user = new USER($dataBase);
        $this->assertEquals($expectedResult, $user->getUser());
    }
}