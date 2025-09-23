<?php

class P12_AverageOfThreeNumbers {
    public function main(): void {
        // Define three numbers
        $numA = 10;
        $numB = 10;
        $numc = 12;

        // Output the formula and result
        $sum = $numA + $numB+$numc;
        $result = $sum/3;
        // Write the program here
        echo "The average is ". $result."\n";
    }
}