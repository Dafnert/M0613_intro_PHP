<?php

class P31_AreWeThereYet
{
    public function main(): void
    { {
            do {
                echo "Give a number: \n";

                $num = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
                if ($num == 4) break;
            } while (true) ;
        }
    }
}