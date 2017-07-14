<?php
/**
 * Created by PhpStorm.
 * User: hakim
 * Date: 12.07.17
 * Time: 05:10
 */

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
