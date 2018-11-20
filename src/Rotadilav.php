<?php

declare(strict_types=1);

namespace Rotadilav;

use Rotadilav\Rules\RulesInterface;

final class Rotadilav
{
    private $params;

    public function __construct(array $params)
    {
        $this->params = $params;
    }

    public function validate(): void
    {
        foreach ($this->params as $dataToValidate => $validator) {
            /** @var RulesInterface $validatorRule */
            foreach ($validator->getRules() as $validatorRule) {
                $validatorRule->validate($dataToValidate);
            }
        }
    }
}
