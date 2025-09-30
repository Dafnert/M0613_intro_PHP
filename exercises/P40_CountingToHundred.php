<?php

class P40_CountingToHundred
{
    public function main(): void
    {
        // Write your program here
        $number = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
       for ($i = $number; $i <= 100; $i++) {
        echo $i . "\n";
        }
    }
}