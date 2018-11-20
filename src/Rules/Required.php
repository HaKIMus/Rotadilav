<?php

declare(strict_types=1);

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
