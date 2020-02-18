<?php

namespace Tests;

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /** @test */
    public function itPrintsNumbers()
    {
        foreach ([1, 2, 4, 7, 11] as $number) {
            $this->assertEquals((string) $number, FizzBuzz::convert($number));
        }
    }

    /** @test */
    public function itPrintsFizzWhenDivisibleByThree()
    {
        foreach ([3, 6, 9, 12] as $number) {
            $this->assertEquals('fizz', FizzBuzz::convert($number));
        }
    }

    /** @test */
    public function itPrintsBuzzWhenDivisibleByFive()
    {
        foreach ([5, 10, 20, 25] as $number) {
            $this->assertEquals('buzz', FizzBuzz::convert($number));
        }
    }

    /** @test */
    public function itPrintsFizzBuzzWhenDivisibleByThreeAndFive()
    {
        foreach ([15, 30, 45, 60] as $number) {
            $this->assertEquals('fizzbuzz', FizzBuzz::convert($number));
        }
    }
}
