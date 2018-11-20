<?php

declare(strict_types=1);

namespace Rotadilav\Rules;

final class Rules
{
    private $rules;

    public function __construct(RulesInterface ...$rules)
    {
        $this->rules = $rules;
    }

    public function getRules(): array
    {
        return $this->rules;
    }
}
