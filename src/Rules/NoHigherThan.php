<?php

declare(strict_types=1);

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
