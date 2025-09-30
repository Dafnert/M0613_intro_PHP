<?php

class P29_GiftTax
{
    public function main(): void
    {
        echo "Value of the gift?\n";
        $value = intval(trim(fgets(STDIN)));

        if ($value < 5000) {
            echo "No tax!\n";
        } elseif ($value <= 25000) {
            $tax = 100 + ($value - 5000) * 0.08;
            echo "Tax: " . number_format($tax, 0, '.', '') . "\n";
        } elseif ($value <= 55000) {
            $tax = 1700 + ($value - 25000) * 0.10;
            echo "Tax: " . number_format($tax, 0, '.', '') . "\n";
        } elseif ($value <= 200000) {
            $tax = 4700 + ($value - 55000) * 0.12;
            echo "Tax: " . number_format($tax, 0, '.', '') . "\n";
        } elseif ($value <= 1000000) {
            $tax = 22100 + ($value - 200000) * 0.15;
            echo "Tax: " . number_format($tax, 0, '.', '') . "\n";
        } else {
            $tax = 142100 + ($value - 1000000) * 0.17;
            echo "Tax: " . number_format($tax, 0, '.', '') . "\n";
        }
    }
}