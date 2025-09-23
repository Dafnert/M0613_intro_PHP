<?php

class P28_LeapYear
{
    public function main(): void
    {
        // Write your code here
        echo "Give a year:";
        $age = trim(string: fgets($GLOBALS['STDIN'] ?? STDIN));
       if($age % 4 == 0){
        echo "The year is a leap year";
       }else{
        echo "The year is not a leap year";
       }
    }
}
$ex = new P28_LeapYear();
$ex->main();