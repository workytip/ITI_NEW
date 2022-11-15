<?php

use App\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testname(): void
    {
        $user = new User;

        $result=  $user->name();
        $this->assertEquals('Ahmed',$result );

         $result=  $user->name('samy');
        $this->assertEquals('samy',$result );
    }

    public function testemail(): void
    {
        $user = new User;
         $result=  $user->email('samy@gmail.com');
        $this->assertEquals('samy@gmail.com',$result );
    }
}

?>