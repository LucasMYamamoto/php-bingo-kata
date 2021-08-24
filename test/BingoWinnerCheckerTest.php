<?php

use Models\Card\BingoWinnerChecker;
use PHPUnit\Framework\TestCase;
require __DIR__ . "/../src/BingoWinnerChecker.php";

class BingoWinnerCheckerTest extends TestCase
{
    public function testCheckerDeterminateNotAWinnerYet()
    {
        $caller = new BingoCaller();

        $card = (new BingoCardGenerator())->generate();

        //Let's call only 20 times (not a winner yet)
        for ($i=1; $i<=20; ++$i) {
            $caller->callNumber();
        }

        $this->assertFalse(
            BingoWinnerChecker::isWinner($caller,$card)
        );
    }

    public function testCheckerDeterminateAWinnerCorrectly()
    {
        $caller = new BingoCaller();

        $card = (new BingoCardGenerator())->generate();

        //Let's call all the numbers
        for ($i=1; $i<=75; ++$i) {
            $caller->callNumber();
        }

        $this->assertFalse(
            BingoWinnerChecker::isWinner($caller,$card)
        );
    }

}