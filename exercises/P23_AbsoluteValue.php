<?php

class P23_AbsoluteValue
{
    public function main(): void
    {
        // Write your code here
        echo "Give the number:";
        
        $numA = trim(string: fgets($GLOBALS['STDIN'] ?? STDIN));
        if ($numA < 0) {
            $mult = $numA*-1;
            echo $mult;
        }else{
            echo $numA;
        }
    }
}
$orwell = new P23_AbsoluteValue();
$orwell->main();