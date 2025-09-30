<?php

class P26_Same
{
    public function main(): void
    {
        // Write your code here
        echo "Enter the first string:\n";
        $stringA = trim(string: fgets(stream: $GLOBALS['STDIN'] ?? STDIN));
        echo "Enter the second string:\n";
        $stringB = trim(string: fgets($GLOBALS['STDIN'] ?? STDIN));
        if ($stringA == $stringB) {
            echo "Same!";
        }else{
          echo "Different";
        }
    }
}