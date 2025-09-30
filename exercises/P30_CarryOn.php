<?php

class P30_CarryOn
{
    public function main(): void
    {

        do {
            echo "Carry on?\n";
            $word = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            if ($word === "no") break;
        } while (true);
    }
}