<?php

declare(strict_types=1);

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
