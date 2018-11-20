<?php

use Rotadilav\Rotadilav;
use Rotadilav\Rules\JsonType;
use Rotadilav\Rules\MaxLength;
use Rotadilav\Rules\Required;
use Rotadilav\Rules\Rules;

class RotadilavTest extends \Codeception\Test\Unit
{
    public function testValidationShouldEndWithSuccess()
    {
        $login = 'Username';
        $password = '"Password"';

        $validator = new Rotadilav([
            $login => new Rules(
                new Required()
            ),
            $password => new Rules(
                new Required(),
                new MaxLength(32),
                new JsonType()
            )
        ]);

        $validator->validate();
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testValidationShouldReturnAnException()
    {
       $login = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';

       $validator = new Rotadilav([
           $login => new Rules(
               new MaxLength(20)
           )
       ]);

       $validator->validate();
    }
}