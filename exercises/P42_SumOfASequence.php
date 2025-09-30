<?php

class P42_SumOfASequence
{
    public function main(): void
    {
        $sum = 0;
        echo "Last number? ";
        $number = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        for ($i = 0; $i <= $number; $i++) {
            $sum += $i;
        }
        echo "The sum is " . $sum . "\n";
    }
}