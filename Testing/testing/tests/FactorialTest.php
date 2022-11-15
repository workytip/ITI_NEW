<?php

use App\Factorial;
use PHPUnit\Framework\TestCase;

class FactorialTest extends TestCase
{
    public function testFactorial(): void
    {
        $myfact = new Factorial;

        $result=  $myfact->factorail(5);
        $this->assertEquals(120,$result );

        $result=  $myfact->factorail(0);
        $this->assertEquals(1,$result );

        $result=  $myfact->factorail(1);
        $this->assertEquals(1,$result );

        // $randomNum = random_int(4,100);
        // $result=  $myfact->factorail($randomNum);
        // $x=$myfact->factorail($randomNum-1)*$randomNum;
        // $this->assertEquals($x,$result );

        $result=  $myfact->factorail(-3);
        $this->assertEquals(null,$result );

        $result=  $myfact->factorail(1.5);
        $this->assertEquals(null,$result );

        $result=  $myfact->factorail('false');
        $this->assertEquals(null,$result );

        $result=  $myfact->factorail('abc');
        $this->assertEquals(null,$result );
    }
}

?>