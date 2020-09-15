<?php
namespace Tests;

use Config\User;
use Mockery as m;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public  function test_getUser()
    {
        $value = ['first_name' => "Thrikkalangode", 'last_name' => "32", 'user_name' => "goutham", 'password' => "123456", 'dob' => "2018-03-12"];
        $dataBase = m::mock('dataBase');
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
        $user = new User($dataBase);
        $actualResult = $user->getUser();
        $this->assertEquals($expectedResult, $actualResult);
    }
}
?>
