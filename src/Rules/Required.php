<?php
/**
 * Created by PhpStorm.
 * User: hakim
 * Date: 13.07.17
 * Time: 13:36
 */

namespace Rotadilav\Rules;


final class Required implements RulesInterface
{
    public function validate($valueToValidate): void
    {
        if (empty($valueToValidate) || !isset($valueToValidate)) {
            throw new \InvalidArgumentException();
        }
    }
}
