<?php
/**
 * Created by PhpStorm.
 * User: hakim
 * Date: 12.07.17
 * Time: 05:15
 */

namespace Rotadilav\Rules;


final class NoHigherThan extends RulesAbstract implements RulesInterface
{
    public function validate($param): void
    {
        if ($param > $this->rule || !isset($param) || !is_int($param)) {
            throw new \InvalidArgumentException();
        }
    }
}