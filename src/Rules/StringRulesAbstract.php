<?php

declare(strict_types=1);

namespace Rotadilav\Rules;

abstract class StringRulesAbstract
{
    protected $specifiedRule;

    public function __construct(string $rule)
    {
        $this->specifiedRule = $rule;
    }
}
