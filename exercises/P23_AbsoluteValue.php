<?php

class P23_AbsoluteValue
{
    public function main(): void
    {
        // Write your code here
        
        $numA = trim(string: fgets($GLOBALS['STDIN'] ?? STDIN));
        if ($numA < 0) {
            $mult = $numA*-1;
            echo $mult ."\n";
        }else{
            echo $numA."\n";
        }
    }
}