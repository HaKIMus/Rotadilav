<?php
/**
 * Created by PhpStorm.
 * User: hakim
 * Date: 12.07.17
 * Time: 05:10
 */

namespace Rotadilav\Rules;

interface RulesInterface
{
    public function validate($valueToValidate): void;
}
