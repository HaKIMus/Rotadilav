<?php
/**
 * Created by PhpStorm.
 * User: hakim
 * Date: 12.07.17
 * Time: 05:13
 */

namespace Rotadilav\Rules;

final class MaxLength extends IntRulesAbstract implements RulesInterface
{
    public function validate($valueToValidate): void
    {
        if (strlen($valueToValidate) > $this->specifiedRule || !isset($valueToValidate)) {
            throw new \InvalidArgumentException();
        }
    }
}
