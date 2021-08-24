<?php

use Models\Card;

class BingoCardGenerator
{
    private $grid = [
        'B' => [],
        'I' => [],
        'N' => [],
        'G' => [],
        'O' => []
    ];

    /**
     * @return array[]
     */
    public function generate(): Card
    {
        foreach ($this->grid as $columnLetter => $column){
            $this->grid[$columnLetter] = $this->generateColumnWithBoundaries(BingoRules::BOUNDARIES[$columnLetter][0],
            BingoRules::BOUNDARIES[$columnLetter][1]
            );
        }

        //Free s`pace at the middle of the card
        $this->grid['N'] [2] = null;

        return new Card($this->grid);
    }

    public function generateColumnWithBoundaries($min,$max)
    {
        $column = [];

        while (sizeof($column) <5 ) {
            $number = rand($min, $max);

            if (!in_array($number, $column))
                $column[] = $number;
        }

        return $column;
    }
}