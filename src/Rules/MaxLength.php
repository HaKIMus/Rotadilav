<?php
/**
 * Created by PhpStorm.
 * User: hakim
 * Date: 12.07.17
 * Time: 05:13
 */

namespace Rotadilav\Rules;

final class MaxLength extends RulesAbstract implements RulesInterface
{
    public function validate($param): void
    {
        if (strlen($param) > $this->rule || !isset($this->rule)) {
            throw new \InvalidArgumentException();
        }
    }
}