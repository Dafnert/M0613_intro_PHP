<?php

class P44_Swap
{
    public function main(): void
    {
        $array = [1, 3, 5, 7, 9];

        foreach ($array as $value) {
            echo $value . "\n";
        }

        echo "\n";
        echo "Give two indices to swap: \n";
        $numberA = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        $numberB = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        //Intercambio de valores
        $temp = $array[$numberA];
        $array[$numberA] = $array[$numberB];
        $array[$numberB] = $temp;
        echo "\n\n\n";
        foreach ($array as $value) {
            echo $value . "\n";
        }
    }
}
// $ex = new P44_Swap();
// $ex->main();