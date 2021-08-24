<?php

namespace Models;
class Card
{
    private $grid;

    public function __construct($grid)
    {
        $this->grid = $grid;
    }

    public function isValid(): bool
    {
        return $this->isValidSize() && $this->respectBoundaries();
    }

    private function isValidSize(): bool
    {
        foreach ($this->grid as $column) {
            if (sizeof($column) !== 5)
                return false;
        }
        return true;
    }

    private function respectBoundaries(): bool
    {
        return
            $this->columnHasElementBetween($this->grid['B'],1,15)
            && $this->columnHasElementBetween($this->grid['I'],16,30)
            && $this->columnHasElementBetween($this->grid['N'],31,45,true)
            && $this->columnHasElementBetween($this->grid['G'],46,60)
            && $this->columnHasElementBetween($this->grid['O'],61,75);

    }

    private function columnHasElementBetween($column, $min, $max, $allowNull=false): bool
    {
        foreach ($column as $number) {
            if($allowNull && is_null($number))
                continue;
            if ($number < $min || $number > $max)
                return false;
        }
        return true;
    }

    public function hasFreeSpaceInTheMiddle()
    {
        return is_null($this->grid['N'][2]);
    }

}