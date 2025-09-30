<?php

class P36_NumberAndSumOfNumbers
{
    public function main(): void
    {
        // Write your code here
        $attempts = 0;
        $sum = 0;
        do {
            echo "Give a number:\n";
            $num = trim(string: fgets($GLOBALS['STDIN'] ?? STDIN));
            if ($num != 0) {
                $attempts++;
            } else {
                break;
            }

            $sum += $num;
        } while (true);
        echo "Number of numbers: " . $attempts . "\n";
        echo "Sum of the numbers: " . $sum;
    }
}