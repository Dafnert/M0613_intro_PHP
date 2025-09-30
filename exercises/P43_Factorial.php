<?php

class P43_Factorial
{
    public function main(): void
    {
        $mult = 1;
        echo "Last number? ";
        $number = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        for ($i = 1
        ; $i <= $number; $i++) {
            $mult *= $i;
            echo $i;
        }
        echo "Factorial: " . $mult . "\n";
    }
}