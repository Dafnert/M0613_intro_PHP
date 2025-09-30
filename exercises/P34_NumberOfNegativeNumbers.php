<?php

class P34_NumberOfNegativeNumbers
{
    public function main(): void
    {
        // Write your code here
        $attempts = 0;
        do {
            echo "Give a number: \n";
            $num = trim(string: fgets($GLOBALS['STDIN'] ?? STDIN));
            if ($num < 0) {
                $attempts++;
            } else if ($num ==  0) {
                break;
            }
        } while (true);

        echo "Number of negative numbers: " . $attempts;
    }
}