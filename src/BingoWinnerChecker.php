<?php

namespace Models\Card;

use BingoCaller;
use Models\Card;

class BingoWinnerChecker
{

    public static function isWinner(BingoCaller $caller, Card $card): bool
    {
        $cardNumbers = $card->getNumbersInCard();

        foreach ($cardNumbers as $cardNumber) {
            if (!$caller->hasCalledNumber($cardNumber)) {
                return false;
            }
        }

        return true;
    }
}