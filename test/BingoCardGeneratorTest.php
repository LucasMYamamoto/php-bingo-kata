<?php

use PHPUnit\Framework\TestCase;
require __DIR__ . "/../src/BingoCardGenerator.php";

class BingoCardGeneratorTest extends TestCase
{

    public function testCardContainsValidNumbersAccordingToColumn()
    {
        $generator = new BingoCardGenerator();
        $card = $generator->generate();

        $this->assertTrue($card->isvalid());

    }
}