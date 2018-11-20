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
    public function testWithNULLShouldEndWithAnException()
    {
        $rule = new Required();

        $rule->validate(null);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testWithEmptyParamShouldEndWithAnException()
    {
        $rule = new Required();

        $rule->validate('');
    }
}