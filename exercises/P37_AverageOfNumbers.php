<?php

class P37_AverageOfNumbers
{
    public function main(): void
    {
        // Write your code here
        $sum = 0;
        $count =0;
        do {
            echo "Give a number:\n";
            $num = trim(string: fgets($GLOBALS['STDIN'] ?? STDIN));
            if ($num == 0) break;

            $sum += $num;
            $count++;
        } while (true);
        $avg = $sum / $count;
        echo "Average of the numbers: ".$avg;
    }
}
$ex = new P37_AverageOfNumbers();
$ex->main();