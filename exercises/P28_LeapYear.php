<?php

class P28_LeapYear
{
    public function main(): void
    {
        // Write your code here
        echo "Give a year:\n";
        $year = (int)trim(string: fgets($GLOBALS['STDIN'] ?? STDIN));
        if (($year % 400 == 0) || ($year % 4 == 0 && $year % 100 != 0)) {
            echo "The year is a leap year.\n";
        } else {
            echo "The year is not a leap year.\n";
        }
    }
}