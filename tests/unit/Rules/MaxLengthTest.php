<?php
namespace Rules;

use Rotadilav\Rules\MaxLength;

class MaxLengthTest extends \Codeception\Test\Unit
{
    public function testValidationShouldEndWithSuccess()
    {
        $rule = new MaxLength(20);

        $rule->validate('Hello World');
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testWithoutAnyRuleTestShouldReturnAnException()
    {
        $rule = new MaxLength();

        $rule->validate('dwa');
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testShouldEndWithAnException()
    {
        $rule = new MaxLength(10);

        $rule->validate('Hello World');
    }
}