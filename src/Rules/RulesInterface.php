<?php

declare(strict_types=1);

namespace Rotadilav\Rules;

interface RulesInterface
{
    public function validate($valueToValidate): void;
}
