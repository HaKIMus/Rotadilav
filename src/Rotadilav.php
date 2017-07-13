<?php
/**
 * Created by PhpStorm.
 * User: hakim
 * Date: 12.07.17
 * Time: 05:05
 */

namespace Rotadilav;

final class Rotadilav
{
    private $params;

    public function __construct(array $params)
    {
        $this->params = $params;
    }

    public function validate(): void
    {
        foreach ($this->params as $value => $validator) {
            $rules = $validator->getRules();
            foreach ($rules as $rule) {
                $rule->validate($value);
            }
        }
    }
}