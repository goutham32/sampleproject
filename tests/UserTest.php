<?php

use \Mockery;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function test_getUser()
    {
        require 'config/User.php';
        $value = ['first_name' => "Thrikkalangode", 'last_name' => "32", 'user_name' => "goutham", 'password' => "123456", 'dob' => "2018-03-12"];
        $dataBase = Mockery::mock('Database');
        $dataBase->shouldReceive('run')
            ->once()
            ->andReturn($value);

        $expectedResult = [
            'first_name' => 'Thrikkalangode',
            'last_name'  => '32',
            'user_name'  => 'goutham',
            'password'   => '123456',
            'dob'        => '2018-03-12'
        ];
        $user = new USER($dataBase);
        $actualResult = $user->getUser();
        $this->assertEquals($expectedResult, $actualResult);
    }
}

