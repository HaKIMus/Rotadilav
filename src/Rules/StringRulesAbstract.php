<?php
/**
 * Created by PhpStorm.
 * User: hakim
 * Date: 13.07.17
 * Time: 13:15
 */

namespace Rotadilav\Rules;


abstract class StringRulesAbstract
{
    protected $specifiedRule;

    public function __construct(string $rule)
    {
        $this->specifiedRule = $rule;
    }
}
