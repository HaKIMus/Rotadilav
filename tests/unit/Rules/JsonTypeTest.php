<?php
namespace Rules;

use Rotadilav\Rules\JsonType;

class JsonTypeTest extends \Codeception\Test\Unit
{
    public function testValidationShouldEndWithSuccess()
    {
        $rule = new JsonType();

        $rule->validate('"Hello World"');
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testShouldEndWithAnExceptionIfParamIsNotJson()
    {
        $rule = new JsonType();

        $rule->validate('Hello World');
    }
}