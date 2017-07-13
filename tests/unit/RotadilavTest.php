<?php

use Rotadilav\Rotadilav;
use Rotadilav\Rules\Required;
use Rotadilav\Rules\Rules;

class RotadilavTest extends \Codeception\Test\Unit
{
    public function testValidationShouldEndWithSuccess()
    {
        $login = 'Username';
        $password = 'Password';

        $validator = new Rotadilav([
            $login => new Rules(
                new Required()
            ),
            $password => new Rules(
                new Required(),
                new \Rotadilav\Rules\MaxLength(32)
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
               new \Rotadilav\Rules\MaxLength(20)
           )
       ]);

       $validator->validate();
    }
}