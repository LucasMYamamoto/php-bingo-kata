<?php

use PHPUnit\Framework\TestCase;
use src\BingoCaller;
require __DIR__ . "/../src/BingoCaller.php";

class BingoCallerTest extends TestCase
{

    public function testWhenCallsANumberItsInTheValidRange()
    {
        $caller = new BingoCaller();
        $number = $caller->callNumber();

        $this->assertTrue($number >= 1 && $number <=75);
    }

    public function testWhenCalls75TimesAllNumbersArePresent(){
        $caller = new BingoCaller();
        $calledNumbers = [];
        $expectedNumbers = range(1,75);

        for($i=1; $i<=75; ++$i){
        $calledNumbers[] = $caller->callNumber();
        }
        sort($calledNumbers);
        $this->assertEquals($expectedNumbers,$calledNumbers);
    }

}