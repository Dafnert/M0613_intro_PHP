<?php

class P21_LargerThanOrEqualTo
{
    public function main(): void
    {
        // Write your code here
        // Prompt the user for input
        echo "Give the first number:\n";

        // Get input from the user
        $numA = (int)trim(string: fgets($GLOBALS['STDIN'] ?? STDIN));

        // Prompt the user for input
        echo "Give the second number:\n";

        // Get input from the user
        $numB = (int)trim(string: fgets($GLOBALS['STDIN'] ?? STDIN));

        // Check year value
        if ($numA < $numB) {
            echo "Greater number is: ".$numB."\n";
        } else if ($numA > $numB) {
            echo "Greater number is: ".$numA."\n";
        } else {
            echo "The numbers are equal!\n";
        }
    }
}