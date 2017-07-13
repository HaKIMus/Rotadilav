<?php
namespace Rules;


use Rotadilav\Rules\Required;

class RequiredTest extends \Codeception\Test\Unit
{
    public function testShouldEndWithSuccess()
    {
        $rule = new Required();

        $rule->validate('Hello World');
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testWithNoParameterShouldEndWithAnException()
    {
        $rule = new Required();

        $rule->validate(null);
    }
}