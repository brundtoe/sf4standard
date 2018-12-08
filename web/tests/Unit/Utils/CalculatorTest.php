<?php
/**
 * Created by PhpStorm.
 * User: bent
 * Date: 09/05/18
 * Time: 14:53
 */

namespace App\Tests\Unit\Utils;

use App\Utils\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{

    public function testAdd()
    {
        $calculator = new Calculator();
        $result = $calculator->add(30,12);

        $this->assertEquals(42,$result);
    }
}
