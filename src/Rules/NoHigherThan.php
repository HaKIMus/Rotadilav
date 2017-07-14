<?php
/**
 * Created by PhpStorm.
 * User: hakim
 * Date: 12.07.17
 * Time: 05:15
 */

namespace Rotadilav\Rules;

final class NoHigherThan extends IntRulesAbstract implements RulesInterface
{
    public function validate($valueToValidate): void
    {
        if ($valueToValidate > $this->specifiedRule || !isset($valueToValidate) || !is_int($valueToValidate)) {
            throw new \InvalidArgumentException();
        }
    }
}
