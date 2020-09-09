<?php

use  PHPUnit\Framework\TestCase;


class userClassTest extends TestCase
{
       /**
        * @test
        */
       public function test_registerUser() {
        require 'config/userClass.php';
        $user = new User();
        $user->registerUser("Goutham","S","Goutham","123456","2018-08-25");
        $queryTable = $user->getUser();
        $expectedvalues =['first_name'=>"Goutham",'last_name'=>"S",'user_name'=>"Goutham",'password'=>"123456",'dob'=>"2018-08-25"];
        $this->assertEquals($expectedvalues, $queryTable);
 
    }
}
