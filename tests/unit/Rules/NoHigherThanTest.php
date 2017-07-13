<?php
namespace Rules;


use Rotadilav\Rules\NoHigherThan;

class NoHigherThanTest extends \Codeception\Test\Unit
{
    public function testValidationShouldEndWithSuccess()
    {
        $rule = new NoHigherThan(20);

        $rule->validate(15);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testWithoutAnyRuleTestShouldReturnAnException()
    {
        $rule = new NoHigherThan();

        $rule->validate(3);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testWithStringShouldEndWithAnException()
    {
        $rule = new NoHigherThan(10);

        $rule->validate('Hello World');
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testWithHigherNumberShouldEndWithAnException()
    {
        $rule = new NoHigherThan(10);

        $rule->validate(11);
    }
}