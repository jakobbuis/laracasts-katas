<?php

namespace App;

class FizzBuzz
{
    public function convert(int $number): string
    {
        $isDivisibleByThree = $number % 3 === 0;
        $isDivisibleByFive = $number % 5 === 0;

        if ($isDivisibleByThree && $isDivisibleByFive) {
            return 'fizzbuzz';
        }

        if ($isDivisibleByThree) {
            return 'fizz';
        }

        if ($isDivisibleByFive) {
            return 'buzz';
        }

        return (string) $number;
    }
}
