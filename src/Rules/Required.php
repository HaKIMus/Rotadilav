<?php
/**
 * Created by PhpStorm.
 * User: hakim
 * Date: 13.07.17
 * Time: 13:36
 */

namespace Rotadilav\Rules;


final class Required extends RulesAbstract implements RulesInterface
{
    public function validate($param): void
    {
        if (empty($param) || !isset($param) || is_null($param) ) {
            throw new \InvalidArgumentException();
        }
    }
}