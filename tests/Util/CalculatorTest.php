<?php
/**
 * Date: 05/04/2018
 * Time: 15:40
 */

namespace App\Tests\Util;

use App\Util\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{

    public function testSum()
    {
        $calculator = new Calculator();
        $result = $calculator->sum(3, 4);

        $this->assertEquals(7, $result);
    }
}
