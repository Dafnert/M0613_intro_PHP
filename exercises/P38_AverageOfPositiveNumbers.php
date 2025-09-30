<?php

class P38_AverageOfPositiveNumbers
{
    public function main(): void
    {
        // Write your code here
        $sum = 0;
        $count = 0;
        do {
            $num = trim(string: fgets($GLOBALS['STDIN'] ?? STDIN));
            if ($num > 0) {
                $sum += $num;
                $count++;
            }
            if($num == 0){
            break;
            }
            
        } while (true);
        if ($count == 0) {
            echo "Cannot calculate the average";
        } else {
            $avg = $sum / $count;
            echo "Average " . $avg;
        }
    }
}