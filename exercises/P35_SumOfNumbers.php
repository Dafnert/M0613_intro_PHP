<?php

class P35_SumOfNumbers
{
    public function main(): void
    {
        // Write your code here
        $sum =0;
        do {
            echo "Give a number: \n";
            $num = trim(string: fgets($GLOBALS['STDIN'] ?? STDIN));
            if ($num ==  0) {
                break;
            }
            $sum += $num;
        } while (true);

        echo "Sum of the numbers: " . $sum;
    }
}