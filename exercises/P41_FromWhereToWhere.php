<?php

class P41_FromWhereToWhere
{
    public function main(): void
    {
        // Write your program here
        $numberA = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        $numberB = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        if ($numberA > $numberB) {
            for ($i = $numberB; $i <= $numberA; $i++) {
                echo $i . "\n";
            }
        } else {
            for ($i = $numberA; $i <= $numberB; $i++) {
                echo $i . "\n";
            }
        }
    }
}