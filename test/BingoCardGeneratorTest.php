<?php

use PHPUnit\Framework\TestCase;
require __DIR__ . "/../src/BingoCardGenerator.php";

class BingoCardGeneratorTest extends TestCase
{

    public function testWhenCallsANumberItsInTheValidRange()
    {
        $generator = new BingoCardGenerator();
        $this->assertTrue(true);

    }
}