<?php

class P32_OnlyPositives
{
    public function main(): void
    {
        do {
            // Write your code here
            echo "Give a number:\n";
            $num = trim(string: fgets($GLOBALS['STDIN'] ?? STDIN));
            if ($num < 0) {
                echo 'Unsuitable number \n';
            }
            if ($num > 0) {
                $result = $num * $num;
                echo $result . "\n";
            }
            if ($num == 0) break;
        } while (true);
        
    }
}