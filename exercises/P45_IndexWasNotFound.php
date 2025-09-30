<?php

class P45_IndexWasNotFound
{
    public function main(): void
    {

        $array = [6, 2, 8, 1, 3, 0, 9, 7];

        // Write your code here
        echo "Search for? ";
        $number = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        $position = array_search($number, $array);
        if ($position === false) {
            echo "$number was not found.";
        } else {
            echo "$number is at index $position.";
        }
    }
}