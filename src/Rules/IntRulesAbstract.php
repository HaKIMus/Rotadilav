<?php

declare(strict_types=1);

namespace Rotadilav\Rules;

abstract class IntRulesAbstract
{
    protected $specifiedRule;

    public function __construct(int $rule)
    {
        $this->specifiedRule = $rule;
    }
}
