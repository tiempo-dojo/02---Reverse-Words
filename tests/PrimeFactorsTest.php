<?php

namespace PrimeFactors\tests;

use PrimeFactors\primeFactors;

class PrimeFactorsTest extends \PHPUnit_Framework_TestCase
{
	public function provider()
    {
        return array(
            array(array(1), 1),
            array(array(2), 2),
            array(array(3), 3),
            array(array(2, 2), 4),
            array(array(2, 3), 6),
            array(array(2, 2, 2), 8),
            array(array(3, 3), 9),
            array(array(2, 5), 10),
            array(array(2, 2, 3), 12),
            array(array(2, 2, 5, 5), 100)
        );
    }

    /**
    * @dataProvider provider
    */
	public function testPrimeFactorsIsWorkingAsExpected(array $expected, $n){
		$this->assertEquals($expected, PrimeFactors::generate($n));
	}
}