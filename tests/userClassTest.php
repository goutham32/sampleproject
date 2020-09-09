<?php
use PHPUnit\Framework\TestCase;

class userClassTest extends TestCase
{
    public function test_registerUser()
    {
        require 'config/userClass.php';
        $user=new user;
        $user->registerUser("Goutham", "S", "goutham", "12345", "2018-05-24");
        $queryValue=$user->getUser();
        $expectedValues=['first_name'=>"Goutham",'last_name'=>"S",'user_name'=>"goutham",'password'=>"12345",'dob'=>"2018-05-24"];
        $this->assertEquals($expectedValues, $queryValue);
    }
}
