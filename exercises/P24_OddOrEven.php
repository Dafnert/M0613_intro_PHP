<?php

class P24_OddOrEven
{
    public function main(): void
    {
        // Write your code here
       echo "Give the number:\n";
        
        $num = trim(string: fgets($GLOBALS['STDIN'] ?? STDIN));
        if ($num % 2 == 0) {
            echo "Number ". $num ." is even";
        }else{
          echo "Number ". $num ." is odd";


        }
    }
}
$orwell = new P24_OddOrEven();
$orwell->main();