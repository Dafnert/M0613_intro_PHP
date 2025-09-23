<?php

class P33_NumberOfNumbers
{
    public function main(): void
    {
        // Write your code here
        $attempts = 0;
        do {
            echo "Give a number: \n";
            $num = trim(string: fgets($GLOBALS['STDIN'] ?? STDIN));
            if ($num == 0) {
                break;
            }else{
                $attempts++;
                
            }
        } while (true);
        
        echo "Number of numbers: " . $attempts;
    }
}
$ex = new P33_NumberOfNumbers();
$ex->main();