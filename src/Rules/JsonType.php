<?php

declare(strict_types=1);

namespace Rotadilav\Rules;

final class JsonType implements RulesInterface
{
    public function validate($valueToValidate): void
    {
        if (null === \json_decode($valueToValidate) && JSON_ERROR_NONE !== \json_last_error()) {
            throw new \InvalidArgumentException();
        }
    }
}