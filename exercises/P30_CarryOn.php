<?php

class P30_CarryOn
{
    public function main(): void
    {
        do {
            echo "Shall we carry on?";

            $word = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            if ($word === "no") break;
        } while (true);
    }
}
$ex = new P30_CarryOn();
$ex->main();