<?php

class P27_CheckingTheAge
{
    public function main(): void
    {
        // Write your code here
        echo "How old are you?\n";
        $age = (int) trim(string: fgets($GLOBALS['STDIN'] ?? STDIN));
       if($age >= 0 && $age <= 120){
        echo "Ok\n";
       }else{
        echo "Impossible!\n";
       }
    }
}