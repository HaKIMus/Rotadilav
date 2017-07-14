<?php
/**
 * Created by PhpStorm.
 * User: hakim
 * Date: 13.07.17
 * Time: 13:15
 */

namespace Rotadilav\Rules;

abstract class IntRulesAbstract
{
    protected $specifiedRule;

    public function __construct(int $rule)
    {
        $this->specifiedRule = $rule;
    }
}
