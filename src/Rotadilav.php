<?php

declare(strict_types=1);

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
        foreach ($this->params as $dataToValidate => $validator) {
            foreach ($validator->getRules() as $validatorRule) {
                $validatorRule->validate($dataToValidate);
            }
        }
    }
}
