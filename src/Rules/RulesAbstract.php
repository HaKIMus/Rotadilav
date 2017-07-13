<?php
/**
 * Created by PhpStorm.
 * User: hakim
 * Date: 13.07.17
 * Time: 13:15
 */

namespace Rotadilav\Rules;


abstract class RulesAbstract
{
    protected $rule;

    public function __construct($rule = null)
    {
        $this->rule = $rule;
    }

    public function getRule()
    {
        return $this->rule;
    }
}