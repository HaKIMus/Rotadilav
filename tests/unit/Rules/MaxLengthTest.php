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
    public function testShouldEndWithAnException()
    {
        $rule = new MaxLength(5);

        $rule->validate('Hello World');
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testWithoutAnParameterShouldEndWithAnException()
    {
        $rule = new MaxLength(2);

        $rule->validate(NULL);
    }
}