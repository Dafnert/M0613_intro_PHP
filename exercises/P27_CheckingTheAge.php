<?php

class P27_CheckingTheAge
{
    public function main(): void
    {
        // Write your code here
        echo "How old are you? \n";
        $age = trim(string: fgets($GLOBALS['STDIN'] ?? STDIN));
       if($age > 0 && $age < 120){
        echo "OK";
       }else{
        echo "Impossible!";
       }
    }
}
$ex = new P27_CheckingTheAge();
$ex->main();